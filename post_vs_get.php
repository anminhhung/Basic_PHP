<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="post_vs_get.php" method="post">
            Password: <input type="password" name="password"> <br>
            <input type="submit">
        </form>
        <br><br>

        <?php
            echo $_POST["password"];
        ?>
    </body>
</html>