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
        //1: global scope 
        //2: local scope
        //3: class scope
        //4: static scope.
        //1:
        $test = "Daniel";
        echo $test;
        //2:
        function myFunction()
        {
            //how to access a global variable in a function?
            //like this:
            global $test;//or....go to A

            //local variable: $localVar
            $localVar = "Hello World!";
            //A
            return $GLOBALS["test"]; //.....i can return a global variable from within a function.....//use only when neccessary.
            //return  $localVar; //Hello World
        }
        echo "<br>";
        $test = myFunction();
        echo $test;

        //4: static scope.......means only one memory location is assigned to it and changes happen in the same location.
        //for eg: when i call myFunction() 1st time $staticVar=1; then if i call the function again...it'll be 1 again. but if i declare the variable static changes wi'' happen in the same location making $staticVar's value 2 then 3 if i call that function 3 times.

        echo "<br>";
        function myFunction2()
        {
            //declared static...hence changes stay for evertime you call this function.
            static $staticVar = 0;
            $staticVar++;
            echo $staticVar;
        }
        echo myFunction2();

        //class scope.......in classscope.php

        ?>
    </body>
</html>