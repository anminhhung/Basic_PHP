<?php
    class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this->title = $title;
            $this->rating = $rating;
        }

        function getrating(){
            return $this->rating;
        }

        function setrating($rating){
            $this->rating = $rating;
        }
    }

    $bean = new Movie("Bean", "A-5");
    $bean->setrating("A-10");
    echo $bean->getrating();
?>