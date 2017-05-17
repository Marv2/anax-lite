<?php

namespace Marv\Dice100;

class Game extends Session implements GameInterface
{
    /**
    * @var object $session The current Session holding the game object
    * @var object $game The game
    * @var object $round The current round
    * @var integer $score The points from the most recent dice roll
    * @var integer $roundSum The sum of the unsaved current round
    * @var integer $savedSum The sum saved by the user
    * @var integer $sumAll The total unsaved sum of the round and previously saved sum
    * @var string $message What to communicate to the user
    */

    protected $session;
    protected $game;
    protected $round;
    protected $score;
    protected $roundSum;
    protected $savedSum;
    protected $sumAll;
    protected $message;
    protected $roll;
    protected $save;
    protected $new;


    /**
    * Play the game
    * @param object $session containing the game object
    * @return void
    */

    public function play($session)
    {
        // Objects
        $this->session = $session;
        $this->game = $session->get("game");

        if (!$this->session->has("round")) {
            $this->session->set("round", new Round());
        }
        $this->round = $this->session->get("round");


        // What to do
        $this->game->toDo();

        // Roll
        if ($this->roll !== null && $this->sumAll < 100) {
            $this->score = $this->round->play(new Dice());
        }

        // Get or update variables
        $this->savedSum = $session->get("total");
        $this->roundSum = $this->round->getTotal();
        $this->sumAll = $this->savedSum + $this->roundSum;

        // New
        if ($this->new !== null) {
            $this->saveMessage(null, "Ny omgång");
            $this->game->destroy();
        }

        // Save
        if ($this->save !== null && $this->score !== 1 && $this->score !== null && $this->sumAll < 100) {
            $this->saveMessage($this->sumAll, "Omgången har sparats");
            $this->session->set("total", $this->sumAll);
            $this->session->delete("round");
        }

        // Check result
        $this->gameStatus();
    }

    /**
    * Set the what to do variables, using the $_GET global
    *
    * @return void
    */
    public function toDo()
    {
        // What to do
        $this->roll = isset($_GET["roll"]) ? "roll" : null;
        $this->save = isset($_GET["save"]) ? "save" : null;
        $this->new = isset($_GET["new"]) ? "new" : null;
    }

    /**
    * Get the total points in game and round
    *
    * @return integer adds the saved points with the round points
    */
    public function getTotal()
    {
        return $this->savedSum + $this->roundSum;
    }

    /**
    * Check the state of the game and set message
    * @return void
    */

    public function gameStatus()
    {
        if ($this->score == 1) {
            $this->message = "Du förlorade omgången!";
            $this->roundSum = null;
        } elseif ($this->sumAll >= 100) {
            $this->message = "Du vann spelet med " . $this->sumAll . " poäng!";
        } elseif (empty($this->sumAll)) {
            $this->message = "Nytt spel";
        } elseif (!empty($this->score)) {
            $this->message = "Pågående spelomgång";
        }
    }

    /**
    * Reset variables if saved
    * @param $sum
    * @param $message
    * @return void
    */
    public function saveMessage($sum, $message)
    {
        $this->message = $message;
        $this->score = null;
        $this->roundSum = null;
        $this->savedSum = $sum;
    }

    /**
     * Get HTML for the game.
     *
     * @return string as HTML with the game.
     */
    public function getHTML()
    {
        $html = "<h1>$this->message</h1>";
        $html .= "<p>Nytt slag: $this->score</p>";
        $html .= "<p>Den här omgången: $this->roundSum</p>";
        $html .= "<p>Sparad summa: $this->savedSum</p>";
        return $html;
    }


    public function getLinks()
    {
        $html = '<ul class="game">';
        $html .= '<li class="color1"><a href="?roll">Kasta tärningen</a></li>';
        $html .= '<li class="color2"><a href="?save">Spara omgångens poäng</a></li>';
        $html .= '<li class="color3"><a href="?new">Starta om spelet</a></li>';
        $html .= '</ul>';
        return $html;
    }
}
