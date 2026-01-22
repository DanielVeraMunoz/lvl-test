<?php

require_once "book.php";
require_once "genre.php";
require_once "library.php";

$book1 = new Book("El pescador", "Daniel Vera", Genre::LIRIC, 4.7, ["Me gusta", "Lo odio"]);
$book2 = new Book("La dama", "Jose Maria", Genre::DIDACTIC, 3.5, ["Pues vale", "No se no se", "Vayaaaa mierda"]);
$book3 = new Book("Superpoder", "Claudia", Genre::DIDACTIC, 4.2, ["molaaa"]);



$library1 = new Library("Mi biblioteca");

$library1->addBook($book1);
$library1->addBook($book2);
$library1->addBook($book3);

$betterBook = $library1->getBetterBook();

echo "\nEl libro con mas puntuación:\n";
echo $betterBook->getName();

$mostComentBook = $library1->getMostComentBook();

echo "\nEl libro con mas comentarios:\n";
echo $mostComentBook->getName();