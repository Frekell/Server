<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type"text/css" media="screen" href="resources/styles.css"/>
</head>
<body>
    <div class="block" id="header">
        <h1>Hier kommt mal ein Header hin</h1>
    </div>
    <div class="wrapper">
    <div class="block" id="livingroom">
        <div class="boxheader">
            <p>Header Wohnzimmer</p>
        </div>
        <div class="boxData">
            <p>Datenblat Wohnzimmer</p>
           <?php
            $servername = "localhost"; 
            $username = "frekkel"; 
            $password = "Essen1997"; 
            $dbname = "wetterstation"; 

            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "SELECT TOP 3 degree, room FROM temp_test WHERE room ='wohnzimmer'" ;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table><tr><th>Room</th><th>ID</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["room"]."</td><td>".$row["degree"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();

           ?>
        </div>
        <div class="boxDataChart">
            <p>Diagramm Wohnzimmer</p>
        </div>
    </div>
    <div class="block" id="workroom">
        <div class="boxheader">
            <p>Header Arbeitszimmer</p>
        </div>
        <div class="boxData">
            <p>Datenblat Arbeitszimmer</p>
        </div>
        <div class="boxDataChart">
            <p>Diagramm Arbeitszimmer</p>
        </div>
    </div>
    <div class="block" id="kitchen">
        <div class="boxheader">
            <p>Header Küche</p>
        </div>
        <div class="boxData">
            <p>Datenblat Küche</p>
        </div>
        <div class="boxDataChart">
            <p>Diagramm Küche</p>
        </div>
    </div>
    <div class="block" id="bedroom">
        <div class="boxheader">
            <p>Header Schlafzimmer</p>
        </div>
        <div class="boxData">
            <p>Datenblat Schlafzimmer</p>
        </div>
        <div class="boxDataChart">
            <p>Diagramm Schlafzimmer</p>
        </div>
    </div>
    <div class="block" id="outside">
        <div class="boxheader">
            <p>Header Draußen</p>
        </div>
        <div class="boxData">
            <p>Datenblat Draußen</p>
        </div>
        <div class="boxDataChart">
            <p>Diagramm Draußen</p>
        </div>
    </div>
    </div>
    
</body>
</html>