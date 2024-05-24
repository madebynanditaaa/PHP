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
/*
        $fruits = ["Apple","Banana","Orange"];
        foreach($fruits as $fruit)
        {
            echo "This is a " . $fruit . "<br>";
        }
*/
        $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");
        /*
        foreach($fruits as $fruit)
        {
            echo "This is a " . $fruit . "<br>";
        }
        this will give output of the values: the colours
        This is a Red
        This is a Yellow
        This is a Orange
        */

        foreach($fruits as $fruit => $color)
        {
            echo "The colour of " . $fruit . " is " . $color . "<br>";
        }

        ?>
    </body>
</html>