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
        <h1>Signup</h1>
        <form action="includes/formhandler.inc.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="Username">
            <br><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" placeholder="Password">
            <br><br>
            <label for="Email">E-mail</label><br>
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <button>Signup</button>
        </form>
    </body>
</html>