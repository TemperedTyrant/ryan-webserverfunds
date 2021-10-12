<!DOCTYPE html>
<!-- PHP response page for Midterm 10/12/2021 -->
<html>
    <head>
        <title>PHP Response</title> <!-- Simple title -->
    </head>
    <body>
        <!-- Display results of the form as requested in midterm instructions -->
        <p>You have requested <?=$_POST["Quantity"];?> <?=$_POST["product_name"];?>.<br></p>       
        <!-- Add ways to return to previous pages -->
        <p>Return to main page <a href="index.html">here.</a></p>
        <p>Return to form page <a href="index.html">here.</a></p>
    </body>
</html>