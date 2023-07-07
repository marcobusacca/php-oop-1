<?php
    // DEFINIZIONE CLASSE "MOVIE"
    class Movie {
        // PROPRIETA - ATTRIBUTI
        public $title;
        public $genre;
        public $releaseYear;
        public $originalLanguage;
        public $productionCountry;
        public $duration;

        // METODI
    
            // COSTRUTTORE
            function __construct($genre, $releaseYear, $originalLanguage, $productionCountry, $duration){
    
                $this->genre = $genre;
                $this->releaseYear = $releaseYear;
                $this->originalLanguage = $originalLanguage;
                $this->productionCountry = $productionCountry;
                $this->duration = $duration;
            }

            // FUNZIONI
            public function setTitle($title){
                // TRASFORMO IL TITOLO IN UPPER_CASE
                $this->title = strtoupper($title);
            }
        // FINE METODI
    }

    // CREO LE ISTANZE / OGGETTI DELLA CLASSE "MOVIE"
    $backToTheFuture = new Movie('Science Fiction', '1985', 'English', 'USA', 92);
    $backToTheFuture2 = new Movie('Science Fiction', '1989', 'English', 'USA', 108);
    $backToTheFuture3 = new Movie('Science Fiction', '1990', 'English', 'USA', 118);

    // ASSEGNAZIONE VALORE DELLA PROPRIETA "TITLE" TRAMITE LA FUNZIONE "SET_TITLE"
    $backToTheFuture->setTitle('Back to the Future');
    $backToTheFuture2->setTitle('Back to the Future Part II');
    $backToTheFuture3->setTitle('Back to the Future Part III');

    // STAMPO A SCHERMO OGGETTI DELLA CLASSE "MOVIE"
    var_dump($backToTheFuture);
    var_dump($backToTheFuture2);
    var_dump($backToTheFuture3);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Head Title -->
        <title>php-oop-1</title>
    </head>
    <body>
    </body>
</html>