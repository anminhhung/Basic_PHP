<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="url_parameters.php" method="get">
            Name: <input type="text" name="name"> <br>
            <input type="submit">
        </form>
        <br><br>

        <?php
            echo $_GET["name"];
        ?>
    </body>   
</html>