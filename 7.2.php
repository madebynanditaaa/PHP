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
          //Comparision Operators
          $a =2;
          $b = "2";
          $c = 3;
          if($a == $b)
          {
            echo "This statement is true";
          }//true
          //== used to check only equality of value
          // != and <> are same
          
          //=== Operator
          $a =2;
          $b = "2";
          if($a === $b)
          {
            echo "This statement is true";
          }//false
          //=== used to check equality of value + datatype.
        ?>
    </body>
</html>