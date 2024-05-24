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

        switch($a)
        {
            case 1:
                echo "The first case is correct";
                break;
            case 2:
                echo "The second case is true";
                break;
            case 3:
                echo "The third case is correct";
            default:
                echo "None of the cases are true";
        }
        echo "<br>";
         if($a == 1)
         {
            echo "First condition is true";
         }
         else if($a == 2)
         {
            echo "Second statement is true";
         }
         else if($a==3)
         {
            echo "Third statement is true";
         }
         else{
            echo "None of these are true";
         }
        
        ?>
    </body>
</html>