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

            $mode = htmlspecialchars ($_POST["Mode"]);
            $device = htmlspecialchars ($_POST["Device"]);

            //Create Connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            //Check Connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO finalexam (ipaddr, search) VALUES  ('{$_SERVER['REMOTE_ADDR']}', '{$Search}')";
            $result = mysqli_query($conn, $sql);
        
            mysqli_close($conn);
        ?>

        <?php
            echo $_SERVER['REMOTE_ADDR'];
        ?>