<!DOCTYPE html>
<!--My first PHP Page!-->
<html>
    <head>
        <title>Welcome to my first PHP Webpage for Fundamentals of Web Servers!</title>
    </head>
    <body>
        <p>To return to the main page, <a href="index.html">Click here!</a></p>
        <p><?= var_dump($_SERVER) ?></p>
        <h1>User-Agent String:</h1>
        <p>Your User-Agent string is: <?= $_SERVER["HTTP_USER_AGENT"] ?><p>
</html>
