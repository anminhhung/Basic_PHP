<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Learning PHP</title>
    </head>
    <body>
        <form action="building_a_better_calculator.php" method="post">
            First Num:<input type="number" name="num1"> <br>
            OP: <input type="textbox" name="op"> <br>
            Second Num <input type="number" name="num2"> <br>
            <input type="submit">
        </form>
        <br><br>

        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if ($op == "+")
                echo $num1 + $num2;
            elseif ($op == "-")
                echo $num1 - $num2;
            elseif ($op == "*")
                echo $num1 * $num2;
            elseif ($op == "/")
                echo $num1 / $num2;
            else
                echo "Invalid Operator";
        ?>
    </body>
</html>