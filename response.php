<!DOCTYPE html>
<!--PHP resposne page for Midterm 10/12/2021-->
<html>
    <head>
        <title>PHP Response</title>
    </head>
    <body>
        <p>You have requested <?=$_POST["Quantity"];?> <?=$_POST["product_name"];?>.<br></p>       
        <p>Return to main page <a href="index.html">here.</a></p>
        <p>Return to form page <a href="index.html">here.</a></p>
    </body>
</html>