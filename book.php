<?php

require_once "genre.php";

class Book{
    private string $name;
    private string $author;
    private Genre $genre;
    private float $points;
    private array $coments;

    public function __construct(string $name, string $author, Genre $genre, float $points, array $coments){
        if($points < 1.0 || $points > 5.0){
            throw new InvalidArgumentException("La puntuación debe ser entre 1.0 y 5.0. :(");
        }
        $this->name=$name;
        $this->author=$author;
        $this->genre=$genre;
        $this->points=$points;
        $this->coments=$coments;;
    }

    public function getPoints() : float{
        return $this->points;
    }

    public function getName() : string{
        return $this->name;
    }

    public function getComents() : array{
        return $this->coments;
    }








}