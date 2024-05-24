<DOCTYE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Document</title>
    </head>

    <body>
        <form 
        action="<?php 
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
        ?>"
        method="post">
        <label for="num01">Enter a number</label>
        <br>
        <input type=number name="num01" placeholder="Enter first number">
        <br><br>
        <select name="operator">
            <option value="add">+<option>
            <option value="sub">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br><br>
        <label for="num02">Enter a number</label>
        <br>
        <input type="number" name="num02" placeholder="Enter second number">
        <br><br>
        <button>Calculate</button>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //**grab data from inputs

            /*.....alternative accepting....usually used for strings...... numbers ke liye niche wala use hota hai.....
            $num01 = htmlspecialchars($_POST["num01"]);
            $num02 = htmlspecialchars($_POST["num02"]);
            */

            //secure
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            //$num03 = filter_input(INPUT_POST, "operator", FILTER_SANITIZE_NUMBER_FLOAT);
            //instead.......use:
            $operator = htmlspecialchars($_POST["operator"]);

            //**error handlers:
            
            $errors = false;
            if(empty($num01) || empty($num02) || empty($operator))
            {
                echo "<p class='calc-errors'>Fill in all the fields!</p>";
                $errors = true;
            }
            if(!is_numeric($num01) || !is_numeric($num02))
            {
                echo "<p class='calc-errors'>Only write numbers!</p>";
                $errors = true;
            }
        //Calculate the numbers if no errors;
            if($errors == false)
            {
                $value = 0;
                switch($operator)
                {
                    case "add":
                        $value = $num01 + $num02;
                        break;
                    case "sub":
                        $value = $num01 - $num02;
                        break;
                    case "multiply":
                        $value = $num01 * $num02;
                        break;
                    case "divide":
                        $value = $num01 / $num02;
                        break;
                    default:
                        echo "<p class='calc-error'>Something went wrong</p>";

                }
                echo "<p class='calc-result'>Result =" . $value . "<p>";
            }
        }
        ?>
    </body>
</html>