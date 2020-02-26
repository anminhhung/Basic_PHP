<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="associative_arrays.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <br><br>

        <?php
            $grades = array("Jim"=>"A+", "Hung"=>"A", "Zin"=>"B");
            echo $grades[$_POST["student"]];
        ?>
    </body>
</html>