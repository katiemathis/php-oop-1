<?php

    class Movie {
        public $nome;
        public $attorePrincipale;
        public $attoreSecondario;
        public $anno;
        public $genere;

        public function __construct($nome, $anno) {
            $this->nome = $nome;
            $this->anno = $anno;
        }

        public function getNomeAnno(){
            return $this->nome . ' <h3> (' . $this->anno . ') </h3>';
        }

        public function setGenere($genere) {
            $this->genere = $genere;
        }

        public function getGenere() {
            return $this->genere;
        }
    }

    $whileYouWereSleeping = new Movie('While You Were Sleeping', '1995');
    $whileYouWereSleeping->attorePrincipale = 'Sandra Bullock';
    $whileYouWereSleeping->attoreSecondario = 'Bill Pullman';
    $whileYouWereSleeping->setGenere('Romantic Comedy');

    echo "<h1>" . $whileYouWereSleeping->getNomeAnno() . "</h1>";
    //echo "<h3> (". $whileYouWereSleeping->anno . ") </h3>";
    echo "<p> The leading actor is: " . $whileYouWereSleeping->attorePrincipale . "</p>";
    echo "<p> The supporting actor is: " . $whileYouWereSleeping->attoreSecondario. "</p>";
    echo "<p> The genre is: " . $whileYouWereSleeping->getGenere(). "</p>";

    $theNet = new Movie('The Net', '1995');
    $theNet->attorePrincipale = 'Sandra Bullock';
    $theNet->attoreSecondario = 'Jeremy Northam';
    $theNet->setGenere('Thriller');

    echo "<h1>" . $theNet->getNomeAnno() . "</h1>";
    //echo "<h3> (". $theNet->anno . ") </h3>";
    echo "<p> The leading actor is: " . $theNet->attorePrincipale . "</p>";
    echo "<p> The supporting actor is: " . $theNet->attoreSecondario. "</p>";
    echo "<p> The genre is: " . $theNet->getGenere(). "</p>";