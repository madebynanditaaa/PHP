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
            //tasks

            $tasks=["Laundry"=>"Daniel",
                    "Trash"=>"Frida",
                    "Vaccum"=>"Basse",
                    "Dishes"=>"Bella",
                    ];

            echo $tasks["Laundry"];
            echo "<br>";
            print_r($tasks);
            echo "<br>";
            echo count($tasks);
            echo "<br>";
            sort($tasks);
            print_r($tasks);

            //
            $fruits = ["Apple", "Banana", "Cherry"];
            array_push($fruit, "Mango");

            print_r($fruits);
            $tasks["Dusting"] = "Tera";
            print_r($tasks);
        ?>
    </body>
</html>