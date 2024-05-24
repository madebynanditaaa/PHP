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
        //constants.
        
        //$name = "Daniel";
        //$name = "Basse";
        //echo $name;

        //declaring a variable as constant so that it cannot be changed.

        define("PI", 3.14); //convention: to capitalize varibales which are declared constants......easy to read and unserstand.
        define("NAME", "Nandita");
        echo PI;
        echo "<br>";
        echo NAME;

        //constant is a global scope.....can be accessed within a function.

        echo "<br>";
        define("IS_ADMIN", true);
        echo IS_ADMIN;
        
        echo "<br>";

         function test()
         {
            echo PI;
         }
         test();
        ?>
    </body>
</html>