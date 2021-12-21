<!DOCTYPE html>
<html>
    <head>
        <title>Page for Exam</title>
    </head>
    <body>
        <?php 
            $servername = "localhost";
            $username = "ryan";
            $password = "Class!23";
            $dbname = "ryan_info";

            $url = "https://www.google.ca/search?q=";

            $search = htmlspecialchars ($_POST["Search"]);

            //Create Connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            //Check Connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO finalexam (ipaddr, search) VALUES  ('{$_SERVER['REMOTE_ADDR']}', '{$search}')";
            $result = mysqli_query($conn, $sql);

            header("location: $url $search");
             //. $url, $search);
        
            mysqli_close($conn);
        ?>
        </body>
</html?