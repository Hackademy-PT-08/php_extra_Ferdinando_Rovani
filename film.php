<?php

class Film {
    public $titolo;
    public $regista;
    public $anno;
    public $genere;
    public static $conteggio = 0;

    public function __construct($titolo, $regista, $anno, $genere) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->anno = $anno;
        $this->genere = $genere;
        self::$conteggio++;
    }

    public static function getConteggio() {
        return self::$conteggio;
    }
    public function __toString() {
        
        return "Titolo: " . $this->titolo . ", Regista: " . $this->regista . ", Anno: " . $this->anno . ", Genere: " . $this->genere . ", Numeo di film creati: " . self::$conteggio;
    }
}

$film1 = new Film("Il Signore degli Anelli", "Peter Jackson", 2001, "Fantasy");
$film2 = new Film("Pulp Fiction", "Quentin Tarantino", 1994, "Crime");
$film3 = new Film("La La Land", "Damien Chazelle", 2016, "Musical");

echo $film1;
echo $film2;
echo $film3;