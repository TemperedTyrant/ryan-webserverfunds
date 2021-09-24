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
        <h2>Dump of $_POST</h2>
        <p><?= var_dump($_POST) ?></p>
    </body>
</html>