<?php

class Movie
{
    public $title;
    public $subTitle;
    public $years;
    public $genere;


    public function __construct($title, $subTitle, $years, $genere)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->years = $years;
        $this->genere = $genere;
    }
}
