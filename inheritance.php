<?php
    class Chef{
        function makeChicken(){
            echo "the chef makes chicken <br>";
        }

        function makeSalad(){
            echo "the chef makes salad <br>";
        }

        function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>";
        }
    }

    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef makes Pasta <br>";
        }
    }

    $chef = new Chef();
    $chef->makeChicken();

    $italianchef = new ItalianChef();
    $italianchef->makePasta();
?> 