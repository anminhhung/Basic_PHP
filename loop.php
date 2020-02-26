<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <?php
            $index = 1;
            while($index <= 5){
                echo "$index <br>";
                $index++;
            }

            for($i=0; $i<10; $i++){
                echo $i*5;
            }
        ?>
    </body>
</html>