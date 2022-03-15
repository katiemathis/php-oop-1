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
            $this->nome . ' ' . $this->anno;
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

    echo "<h1>" . $whileYouWereSleeping->nome . "</h1>";
    echo "<h3> (". $whileYouWereSleeping->anno . ") </h3>";
    echo "<p> The leading actor is: " . $whileYouWereSleeping->attorePrincipale . "</p>";
    echo "<p> The supporting actor is: " . $whileYouWereSleeping->attoreSecondario. "</p>";
    echo "<p> The genre is: " . $whileYouWereSleeping->getGenere(). "</p>";