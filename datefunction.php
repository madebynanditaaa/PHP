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
            echo date("d-m-Y H:i:s");
            echo "<br>";
            $date = "18-04-2024 10:07:43
            ";
            echo strtotime($date);//number of seconds from 1971 till this date
              

        ?>
    </body>
</html>