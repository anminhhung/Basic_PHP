<!DOCTYPE html>
</html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="getting_user_input.php" method="get">
            Name: <input type="text" name="username">
            <br>
            Age: <input type="number" name="userAge">
            <input type="submit">
        </form>
        <br>
        Your name is: <?php echo $_GET["username"] ?>
        <br>
        Your age is: <?php echo $_GET["userAge"] ?>
    </body>
</html>
