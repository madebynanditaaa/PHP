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
        $a=1;
        $b=4;
         if($a < $b && !$bool)
         {
            echo "First condition is true";
         }
         else if($a< $b && $bool)
         {
            echo "Second statement is true";
         }
         else{
            echo "None of these are true";
         }
        ?>
    </body>
</html>