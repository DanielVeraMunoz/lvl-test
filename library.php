<?php

require_once "book.php";
require_once "genre.php"; //probar si es necesario
require_once "genre.php";

class Library{
    private string $name;
    private array $listOfBooks;



    public function __construct(string $name){
        $this->name=$name;
        $this->listOfBooks=[];
    }


    public function addBook(Book $book){
        $this->listOfBooks[] = $book;
    }


    public function getBetterBook(){
        $bestBook = $this->listOfBooks[0];
        foreach($this->listOfBooks as $book){
            if($book->getPoints() > $bestBook->getPoints()){
                $bestBook = $book;
            }
        }
        return $book;
    }

    public function getMostComentBook(){
        $mostComentBook = $this->listOfBooks[0];
        $counter = 0;
        foreach($this->listOfBooks as $book){
            $counter = count($book->getComents());
            if($counter > count($mostComentBook->getComents())){
            $mostComentBook = $book;
            }
            
        }
        return $mostComentBook;
    }



}