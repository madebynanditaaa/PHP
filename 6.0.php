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
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname...">
            <br>
            <label for="lastname">Lastname?</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname...">
            <br><br>
            <label>What pet do you have?</label>
            <br>
            <input type="checkbox" id="petcat" name="petcat" value="Cat">
            <label for="petcat">Cat</label>
            <br>
            <input type="checkbox" id="petdog" name="petdog" value="Dog">
            <label for="petdog">Dog</label>
            <br>
            <input type="checkbox" id="petbird" name="petbird" value="Bird">
            <label for="petbird">Bird</label>
            <br>
            <input type="checkbox" id="petnone" name="petnone" value="None">
            <label for="petnone">None</label>
        </form>
    </main>
</body>
</html>