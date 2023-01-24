<?php
class Movie
{
    // variabili d'istanza
    public $name;
    public $year;
    public $genre;
    public $plot;
    public $vote;

    // costruttore
    public function __construct($name, $year, $genre, $plot, $vote)
    {
        $this->name = $name;
        $this->year = $year;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->vote = $vote;
    }

    public function getHTML()
    {
        return "Name: " . $this->name . "</br>" .
            "Year: " . $this->year . "</br>" .
            "Genre: " . $this->genre . "</br>" .
            "Plot: " . $this->plot . "</br>" .
            "Vote: " . $this->vote . "</br>";
    }
}
