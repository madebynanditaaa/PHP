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
        $foods=["fruits"=>array("Apple","Banana","Cherry"),
                "meat"=>array("Chicken","Fish", "Mutton"),
                "vegetables"=>array("Cucumber","roots"=>array("Carrot","Beetroot"),"Cabbage")
                ];
            echo $foods["vegetables"][0];
            echo "<br>";
            print_r($foods["fruits"][0]);
            echo"<br>";
            print_r($foods["vegetables"]["roots"][1]);
        ?>
    </body>
</html>