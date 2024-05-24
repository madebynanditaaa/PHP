<?php
//type decoration ........means specifing thr datatype before the variable::: string $name
declare(strict_types=1); // 1 stand for true.
//this allows strict datatypes only.....i can't pass an integer in a string variable
?>
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
        <?php
          function sayHello($name="Dani")//it will use dani when nothing is passed while calling the function
          {
            return "Hello World" . " " . $name . "!"; 
          }
          $test = sayHello("Nandita");
          echo $test;

          echo "<br>";

          function sayName($name, $pet)
          {
            return $name . " likes " . $pet; 
          }
          $test = sayName("Daniel", "Dogs");
          echo $test;

          //what if you pass a number instead of strings?.....refer to 1st line.

          function calculator(int $num1, int $num2)
          {

            $result = $num1 + $num2;
            return $result;

          }
          echo "<br>";
          $test = calculator(3,5);
          echo $test;

        ?>
    </body>
</html>