<?php

namespace Marv\Dice100;

class Round implements GameInterface
{
    /**
    * @var object $dice
    * @var integer $score the most recent dice roll
    * @var integer $roundSum The points in the current round
    */
    private $dice;
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

        //echo $this->score;

        return $this->score;
    }



    public function getTotal()
    {
        return $this->roundSum;
    }
}
