<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="building_a_basic_calculator.php" mehod="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <input type="submit">
        </form>
        Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    </body>
</html>
