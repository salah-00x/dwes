<?php

class Movie{

    private $id;
    private $title;
    private $year;
    private $director;

    public function __construct($id, $title, $year, $director){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }   
    public function getYear(){
        return $this->year;
    }   
    public function getDirector(){
        return $this->director;
    }


}