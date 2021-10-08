<!DOCTYPE html>
<!--My first PHP Page!-->
<html>
    <head>
        <title>Welcome to my first PHP Webpage for Fundamentals of Web Servers!</title>
    </head>
    <body>
        <p>To return to the main page, <a href="index.html">Click here!</a></p>
        <h1>Dump of $_GET</h1>
        <p><?= var_dump($_GET) ?></p>
        <h1>Dump of $_POST</h1>
        <p><?= var_dump($_POST) ?></p>
        <!--Make user friendly-->
        <h2>Here are the results of your form!</h2>
        <div style=background-color:#D3D3D3>
            <ul>
                <li>Mode: <?=$_POST["Mode"];?></li> 
                <li>Tutorial Type: <?php
                                    if(isset($_POST["Software"])){
                                        echo "Software ";
                                    }
                                    if(isset($_POST["Hardware"])){
                                        echo "Hardware ";
                                    }
                                    if(isset($_POST["Gameplay"])){
                                        echo "Gameplay ";
                                    }
                                    ?></li>  
                <li>Playstyle: <?=$_POST["Device"];?></li>
                <li>Additional Details: <?=$_POST["Request"];?></li>
                <li>Link: <?=$_POST["Software_link"];?></li>
            </ul>        
        </div>
        <p>Here are the results from table requests in database ryan_info</p>                            
        <?php 
        $servername = "localhost";
        $username = "ryan";
        $password = "Class!23";
        $dbname = "ryan_info";
        //Create Connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        //Check Connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT request_id, type, mode, device FROM requests";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["request_id"]. " - Type: " . $row["type"]. " - Mode: " . $row["mode"]. " - Device: " . $row["device"]. "<br>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </body>
</html>