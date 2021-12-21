<!DOCTYPE html>
<!--My first PHP Page!-->
<html>
    <head>
        <title>Welcome to my first PHP Webpage for Fundamentals of Web Servers!</title>
    </head>
    <body>
        <ul>
            <li>Search Term: <?=htmlspecialchars($_POST["Search"]);?></li>  
        </ul>        
        </div>

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

        <?php
            echo $_SERVER['REMOTE_ADDR'];
        ?>
        <?php
            $val = array (
            'weather' => 'Sunny',
            'time' => '1:30 pm',
            );
            if(file_put_contents('file.txt', print_r($day, true))){
                header("location: message.php");
            }
        ?>