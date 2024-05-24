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
        $bool = true;
        $a=10;
        $b=4;
        //if a was a string "1".........error aayega....like ===
        $result = match($a)
        {
            1,3,5 => "Variable a = 1",
            2 => "Variable b = 2",
            default => "None were a match",
        };
        echo "<br>";
        echo $result;

        //$result = "sad";
        /*
        .
        .
        .
        .
        if elseif................
        .
        .
        .
        .
        switch....
        .
        .
        .
        .
        .
        */
        ?>
    </body>
</html>