<?php

// Classe
class Movie
{
    public $title;
    public $subTitle;
    public $years;
    public $genere;

    // Costruttore
    public function __construct($title, $subTitle, $years, $genere)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->years = $years;
        $this->genere = $genere;
    }

    // Metodo
    public function getFullTitle()
    {
        if ($this->subTitle) {
            return $this->title . " & " . $this->subTitle;
        } else {
            return $this->title;
        }
    }
}

// Creazione di due istanze della classe Movie con il costruttore
$movie1 = new Movie("Primo Film", "Prima Storia", 2020, "Azione");
$movie2 = new Movie("Secondo Film", "Seconda Storia", 2024, "Commedia");

// Stampa a schermo

var_dump($movie1);

var_dump($movie2);

echo "Informazioni Movie 1:";
echo "Titolo: " . $movie1->title;
echo "Sotto Titolo: " . $movie1->subTitle;
echo "Anno di uscita: " . $movie1->years;
echo "Genere: " . $movie1->genere;
echo "Titolo Completo: " . $movie1->getFullTitle();

echo "<br>";

echo "Informazioni Movie 2:";
echo "Titolo: " . $movie2->title;
echo "Sotto Titolo: " . $movie2->subTitle;
echo "Anno di uscita: " . $movie2->years;
echo "Genere: " . $movie2->genere;
echo "Titolo Completo: " . $movie2->getFullTitle();
