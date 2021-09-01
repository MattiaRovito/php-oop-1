<?php





//TODO Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui: 
//TODO è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo. 
//TODO vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.


class Movie {

    public $titolo;
    public $annoDiUscita;
    public $guadagnoBotteghino;

    function __construct($_titolo, $_annoDiUscita){
        $this -> titolo = $_titolo;
        $this -> annoDiUscita = $_annoDiUscita;
    }


}


$film_1 = new Movie('Avengers: End Game', 2019);
var_dump($film_1);