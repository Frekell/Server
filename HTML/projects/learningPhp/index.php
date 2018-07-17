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
        echo "<h1>$test</h1>"; 
        // Arrays
        $geschlechter = array("m", "f");
        echo "Ich bin " . $geschlechter[0];

        //if else Anweisung
        if($bool){
            echo "Test";
        } elseif{

        } else{
            echo "Anderer Test";
        }

        //switch-case-Statement
        switch ($x) {
            case '1':
                # code...
                break;
            case '2':
                # code...
                break;
            default:
                # code...
                break;
        }

        //while Schleifen

        while ($x <= 10) {
            echo "Test".$x += 1
        }

        //Do While 

        do {
            echo "test".$x += 1 
        } while ($x <= 10);

        //for Schleife
        for ($x=0; $x < 2; $x++) { 
            # code...
        }
        foreach ($variable as $key) {
            # code...
        }
    ?>
</body>
</html>