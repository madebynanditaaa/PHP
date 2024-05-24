<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $firstname=htmlspecialchars ($_POST["firstname"]);
    $lastname=htmlspecialchars ($_POST["lastname"]);
    $favoritepet=htmlspecialchars ($_POST["favoritepet"]);  
    //htmlentities() similar to html specialcharacters
    echo "These are the data, that the user submitted";
    echo "<br>";
    echo "$firstname";
    echo "<br>";
    echo "$lastname";
    echo "<br>";
    echo "$favoritepet";
    //header("Location: ../index.php");
}