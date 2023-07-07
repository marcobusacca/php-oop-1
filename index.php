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
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Head Title -->
        <title>php-oop-1</title>
    </head>
    <body class="bg-dark bg-gradient">
        <!-- Main -->
        <main>
            <!-- Movie Container -->
            <div class="container my-5">
                <!-- Movie Row -->
                <div class="row align-items-center">
                    <!-- Movie Col -->
                    <div class="col-12">
                        <!-- Ordered List -->
                        <ol class="d-flex flex-column align-items-center bg-white rounded-3 display-6 p-5 w-100">
                            <!-- First Movie -->
                            <li class="my-5">
                                <!-- Movie Title -->
                                <h1>
                                    <?php echo $backToTheFuture->title ?>
                                </h1>
                                <!-- Unordered List -->
                                <ul>
                                    <li class="my-5">
                                        <!-- Movie Genre -->
                                        <strong>
                                            <?php echo "Genere: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture->genre ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Release Year -->
                                        <strong>
                                            <?php echo "Anno di rilascio: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture->releaseYear ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Lingua Originale -->
                                        <strong>
                                            <?php echo "Lingua Originale: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture->originalLanguage ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Paese Di Produzione -->
                                        <strong>
                                            <?php echo "Paese Di Produzione: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture->productionCountry ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Durata -->
                                        <strong>
                                            <?php echo "Durata: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture->duration." min " ?>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <!-- Horizontal Line -->
                            <hr class="border border-2 border-black w-100">
                            <!-- Second Movie -->
                            <li class="my-5">
                                <!-- Movie Title -->
                                <h1>
                                    <?php echo $backToTheFuture2->title ?>
                                </h1>
                                <!-- Unordered List -->
                                <ul>
                                    <li class="my-5">
                                        <!-- Movie Genre -->
                                        <strong>
                                            <?php echo "Genere: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture2->genre ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Release Year -->
                                        <strong>
                                            <?php echo "Anno di rilascio: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture2->releaseYear ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Lingua Originale -->
                                        <strong>
                                            <?php echo "Lingua Originale: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture2->originalLanguage ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Paese Di Produzione -->
                                        <strong>
                                            <?php echo "Paese Di Produzione: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture2->productionCountry ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Durata -->
                                        <strong>
                                            <?php echo "Durata: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture2->duration." min " ?>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <!-- Horizontal Line -->
                            <hr class="border border-2 border-black w-100">
                            <!-- Third Movie -->
                            <li class="my-5">
                                <!-- Movie Title -->
                                <h1>
                                    <?php echo $backToTheFuture3->title ?>
                                </h1>
                                <!-- Unordered List -->
                                <ul>
                                    <li class="my-5">
                                        <!-- Movie Genre -->
                                        <strong>
                                            <?php echo "Genere: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture3->genre ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Release Year -->
                                        <strong>
                                            <?php echo "Anno di rilascio: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture3->releaseYear ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Lingua Originale -->
                                        <strong>
                                            <?php echo "Lingua Originale: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture3->originalLanguage ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Paese Di Produzione -->
                                        <strong>
                                            <?php echo "Paese Di Produzione: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture3->productionCountry ?>
                                        </span>
                                    </li>
                                    <li class="my-5">
                                        <!-- Durata -->
                                        <strong>
                                            <?php echo "Durata: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $backToTheFuture3->duration." min " ?>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

        </main>
        <!-- Fine Main -->
    </body>
</html>