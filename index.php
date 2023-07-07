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
            function __construct($title, $genre, $releaseYear, $originalLanguage, $productionCountry, $duration){
    
                $this->title = $title;
                $this->genre = $genre;
                $this->releaseYear = $releaseYear;
                $this->originalLanguage = $originalLanguage;
                $this->productionCountry = $productionCountry;
                $this->duration = $duration;
            }
        // FINE METODI
    }
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