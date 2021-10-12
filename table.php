<!DOCTYPE html>
<html>
    <head>
        <title>Results from ryan_db</title>
    </head>
    <body>
    <h2>Here are the results from table 'requests' in database 'ryan_info'</h2>                            
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
    <p><br><br>To return home, <a href="index.html">Click Here!</a></p>
    </body>
</html>