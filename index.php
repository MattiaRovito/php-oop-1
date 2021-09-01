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

    public function setGuadagno($_guadagnoBotteghino){
        $this->guadagnoBotteghino = $_guadagnoBotteghino;
    }

    public function getGuadagno(){
        return $this->guadagnoBotteghino;
    }



}


$film1 = new Movie('Avengers: End Game', 2019);
$film1->setGuadagno('2.798.000.000');
var_dump($film1);


//? Stampo a schermo il guadagno al botteghino
$avengers = $film1->getGuadagno();
echo "Il film Avengers: End Game ha guadagnato " . $avengers . " di dollari al botteghino";





$film2 = new Movie('Spider-Man: Homecoming', 2017);
$film2->setGuadagno('880.200.000');
var_dump($film2);


//? Stampo a schermo il guadagno al botteghino
$spider = $film2->getGuadagno();
echo "Il film Spider-Man: Homecoming ha guadagnato " . $spider . " di dollari al botteghino";