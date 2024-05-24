<?php
session_start();
$_SESSION["username"]="Krossing";
//unset ($_SESSION["username"]);//deleting 1 session data
//session_unset();//deleting all session data
session_destroy();//destroys this session in all other pages except this one.
?>

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
        echo $_SESSION["username"];
       ?>
    </body>
</html>