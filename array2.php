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
        $fruits=["Apple","Banana","Cherry"];
        $test=["Mango", "Strawberry"];
        $m=$fruits;
        array_splice($m, 3,0,$test);
        print_r($m);
        echo "<br>";
        //delete an element: Banana
        array_splice($fruits, 2, 0, "Mango");
        print_r($fruits);
        echo "<br>";
        echo $fruits[1];
        $fruits[] = "Orange";
        echo "<br>";
        echo $fruits[3];
        $fruits[1]="Kiwi";
        echo "<br>";
        print_r($fruits);

        ?>
    </body>
</html>