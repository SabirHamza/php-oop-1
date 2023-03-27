<?php

class Genre {
    public $genre;

    public function __construct(
        string $_genre,
    )
    {
        $this->genre = $_genre;
    }
}

class Movie {
    public $moviename;
    public $relase;
    public $filmdirector;

    public function __construct(
        string $_moviename,
        string $_relase,
        string $_filmdirector,
    )
    {
        $this->setmoviename($_moviename);
        $this->setmoviename($_relase);
        $this->setmoviename($_filmdirector);
    }

    public function setmoviename($moviename){
        if(!is_string($moviename) || $moviename === "") return false;
        $this->moviename = $moviename;
    }

    public function setrelase($relase){
        if(is_string($relase) || $relase < 1900 || $relase > date("Y")) return false;
        $this->relase = $relase;
    }

    public function setfilmdirector($filmdirector){
        if(!is_string($filmdirector) || $filmdirector === "") return false;
        $this->filmdirector = $filmdirector;
    }
}

$movie1 = new Movie("Memento", 2000, "Christopher Nolan");

var_dump($movie1)

?>