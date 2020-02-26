<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="array.php" method="post">
            Apple: <input type="checkbox" name="fruits[]" value="apples"> <br>
            oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
            <input type="submit">
        </form>
        <br><br>

        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        ?>
    </body>
</html>