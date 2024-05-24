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


       class MyClass
       {
//variables declared inside the class can be used within the class // or class variable ka scope within the class hai

        public $classVar = "Hello World";
        public function myMethod()
        {
            echo $this->classVar; //Output: Hello World
        }
       }    
        $obj = new MyClass();
        $obj->myMethod();
       
        ?>
    </body>
</html>