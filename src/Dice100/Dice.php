<?php

namespace Marv\Dice100;

class Dice
{
    /**
    * @var integer The number of faces of the dice.
    */
    protected $sides;

    // Dice constructor - sides are default 6
    public function __construct($sides = 6)
    {
        $this->sides = $sides;
    }

    /**
    * Get the rolls as an array.
    *
    * @return integer the dice roll
    */
    public function roll()
    {
        return rand(1, $this->sides);
    }
}
