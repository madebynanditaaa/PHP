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
            $fruits = ["Apple", "Banana", "Cherry"];
            echo $fruits[1];
            echo "<br>";
            $fruits[1] = "Orange";
            echo $fruits[1];
            unset($fruits[1]);//data removed from 1......but positon is still there.....just it is emply data.
            array_splice($fruits, 0, 1)// it means 1 element forward from thr 0th position is deleted//removes that position data and memory allocation from array........the ahead elements shift one place back

        ?>
    </body>
</html>