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
            <br>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname...">
            <br><br>
            <label for="lastname">Lastname?</label>
            <br>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname...">
            <br><br>
            <label for="favoritepet">Favorite Pet?</label>
            <br>
            <select name="favoritepet" id="favorite">
                <option value="none">None</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>