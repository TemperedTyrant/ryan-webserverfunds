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
                                    if(isset($_POST["Hardware"])){
                                    echo "Hardware";
                                    }
                                    if(isset($_POST["Software"])){
                                    echo "Software";
                                    }
                                    ?></li>  
                <li>Playstyle: <?=$_POST["Device"];?></li>
                <li>Additional Details: <?=$_POST["Request"];?></li>
                <li>Playstyle: <?=$_POST["Device"];?></li>
                <li>Link: <?=$_POST["Software_link"];?></li>
            </ul>        
        </div>
    </body>
</html>