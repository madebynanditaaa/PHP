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
        $array=["apple", "banana", "orange"];
        $array2=["plum", "cherry", "fig"];
        echo count($array);
        echo "<br>";
        echo is_array($array);//1 is true
        echo "<br>";
        array_push($array,"kiwi");
        print_r($array);
        echo "<br>";
        array_pop($array);
        print_r($array);
        echo "<br>";
        print_r(array_reverse($array));
        echo "<br>";
        print_r(array_merge($array,$array2));
        echo "<br>";
        
        ?>
    </body>
</html>