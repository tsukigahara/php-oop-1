<?php

// creare classe 
class Movie
{
    // variabili d'istanza
    public $name;
    public $year;
    public array $genres;
    public $plot;
    public $vote;

    // costruttore
    public function __construct($name, $year, array $genres, $plot, $vote)
    {
        $this->name = $name;
        $this->year = $year;
        $this->genres = $genres;
        $this->plot = $plot;
        $this->vote = $vote;
    }

    // funzione per ottenere html
    public function getHTML()
    {
        return "Name: " . $this->name . "</br>" .
            "Year: " . $this->year . "</br>" .
            "Genre: " . $this->getArray($this->genres) . "</br>" .
            "Plot: " . $this->plot . "</br>" .
            "Vote: " . $this->vote . "</br></br>";
    }
    public function getArray(array $array)
    {
        $str = "";
        foreach ($array as $genre) {
            $str .= $genre . ", ";
        }
        return $str;
    }
};

// Creare istanza da classe Movie
$movie1 = new Movie("ironman", 2008, ["action", "battle", "sci-fi"], "Lorem lorem lorem ", 8.5);
$movie2 = new Movie("ironman 2", 2012, ["action", "battle", "sci-fi"], "Lorem lorem lorem ", 7.5);

// chiamare funzione getHTML() dalle istanze
echo $movie1->getHTML();
echo $movie2->getHTML();
