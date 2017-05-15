<?php

namespace Marv\Dice;

class Round implements iGame
{
    /**
    * @var object $dice
    * @var integer $score the most recent dice roll
    * @var integer $roundSum The points in the current round
    */
    protected $dice;
    protected $score;
    protected $roundSum;

    // Round constructor
    public function __construct()
    {
        //$this->dice = new Dice();
    }

    /**
    * Play - Roll the dice
    * Return score or 0 if not a valid number
    *
    * @return Integer the result of the roll, 0 if not valid
    */
    public function play($dice)
    {
        // If roll or save
        $this->dice = $dice;
        $this->score = $this->dice->roll();

        if ($this->score == 1) {
            $this->roundSum = 0;
        } else {
            $this->roundSum += $this->score;
        }

        return $this->score;
    }


    public function getTotal()
    {
        return $this->roundSum;
    }
}
