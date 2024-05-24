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
            $string = "Hello World!";

            echo strlen($string);
            echo "<br>";
            echo strpos($string, "or");
            echo "<br>";
            echo str_replace("World!", "Daniel", $string);
            echo "<br>";
            echo strtolower($string);
            echo "<br>";
            echo strtoupper($string);
            echo "<br>";
            echo substr($string, 6, strlen($string)-1);
            echo "<br>";
            print_r(explode(" ", $string));

        ?>
    </body>
</html>