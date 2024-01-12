<?php

class Movie
{
    public $film;
    public $plot;
    public $vote;
    public $mainActor;

    public function __construct($film, $plot, $vote, $mainActor)
    {
        $this->film = $film;
        $this->plot = $plot;
        $this->vote = $vote;
        $this->mainActor = $mainActor;
    }

    public function getMovie()
    {
        $result = "Film: " . $this->film . "<br>" . "Trama: " . $this->plot . "<br>" . "Voto: " . $this->vote . "/5" . "<br>" . "Attore principale: " . $this->mainActor;
        return $result;
    }
}
