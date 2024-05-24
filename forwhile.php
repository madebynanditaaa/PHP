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

        $test=5;

        for($i = 0; $i < $test; $i ++)
        {
            echo "This is iteration number: " . $i . "<br>";
           
        }
        echo "<br>";
        
        $boolean = true;
        while($boolean)
        {
            echo $boolean;
            $boolean = false;
        }
        echo "<br>";
        
        while($test<=10)
        {
            echo $test;
            $test++;
            echo "<br>";
        }
        ?>
    </body>
</html>