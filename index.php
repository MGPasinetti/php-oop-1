<!--
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php

class Movie
{
    public $title;
    public $director;
    public $productionYear;

    public $duration = 90 . ' min';

    public function __construct($_title, $_director, $_productionYear) {
        $this->title = $_title;
        $this->director = $_director;
        $this->productionYear = $_productionYear;
    }

    public function setDuration($_duration) {
        $this->duration = $_duration;
    }
}

$moviePulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino', '1994');
$moviePulpFiction->setDuration(150 . ' min');

var_dump($moviePulpFiction);

$movieTheDanishGirl = new Movie('The Danish Girl', 'Tom Hooper', '2015');
$movieTheDanishGirl->setDuration(119 . ' min');

var_dump($movieTheDanishGirl);

?>
