<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Learning PHP</title>
    </head>
    <body>
        <?php
            class Book{
                var $title;
                var $author;
                var $pages;

                // function __construct(){
                //     echo "New book Created <br>";
                // }
                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }

            // $book1 = new Book;
            // $book1->title = "Harry Potter";
            // $book1->author = "Tom";
            // $book1->pages = 400;

            // $book2 = new Book;
            // $book2->title = "Lord Of The Rings";
            // $book2->author = "Tom dep zai";
            // $book2->pages = 600;

            // echo $book1->author;
            // echo $book2->pages;
            $book1 = new Book("harry potter", "tom", 200);
            echo $book1->author;
        ?>
    </body>
</html>