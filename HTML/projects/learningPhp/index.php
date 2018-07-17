<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo "Hello World";
        $test = "Hello World"; //String
        $x = 2; //int
        $y = 3.4; //float oder double
        $bool = true; //boolean 
        // "." verbindet Strings miteinander
        echo "Test".$test;
        echo "<h1>$test</h1>"
    ?>
</body>
</html>