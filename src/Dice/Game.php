<?php

namespace Marv\Dice;

class Game extends Session implements iGame
{
    /**
    * @var object $round The current Round to play
    * @var integer $score The latest dice roll
    * @var integer $roundSum The points in the current round
    * @var integer $gameSum The points saved by the user
    * @var integer $roundSum
    */

    protected $round;
    protected $score;
    protected $roundSum;
    protected $gameSum;
    protected $message;


    /**
    * Play the game
    * @param object $round
    * @return void
    */

    public function play($round)
    {
        // Check result

        $this->gameSum = Session::get("total");
        $this->gameStatus();

        $this->round = $round;
        $this->score = $this->round->play(new Dice());
        $this->roundSum = $this->round->getTotal();

        $this->gameStatus();
    }

    /**
    * Get the total points in game and round
    *
    * @return integer adds the saved points with the round points
    */
    public function getTotal()
    {
        return $this->gameSum + $this->roundSum;
    }

    /**
    * Check the state of the game
    * Set the message
    * @return void
    */

    public function gameStatus()
    {
        $total = $this->getTotal();

        if ($this->score == 1) {
            $this->message = "Du förlorade rundan!";
        } elseif ($total >= 100) {
            $this->message = "Du vann spelet med " . $total . " poäng!";
        } else {
            $this->message = "Pågående runda";
        }
    }

    /**
    * Reset variables if saved
    * @param $total the new total set in the session
    * @return void
    */
    public function saveReset($total)
    {
        $this->message = "Poängen har sparats";
        $this->score = 0;
        $this->roundSum = 0;
        $this->gameSum = $total;
    }

    /**
     * Get HTML for the game.
     *
     * @return string as HTML with the game.
     */
    public function getHTML()
    {
        if (empty($this->message)) {
            $this->message = "Nytt spel";
        }

        $html = "<h1>$this->message</h1>";
        $html .= "<p>Nytt slag: $this->score</p>";
        $html .= "<p>Den här rundan: $this->roundSum</p>";
        $html .= "<p>Sparad summa: $this->gameSum</p>";
        return $html;
    }
}
