<!DOCTYPE html>
<!--PHP resposne page for Midterm 10/12/2021-->
<html>
    <head>
        <title>PHP Response</title>
    </head>
    <body>
        <p>To return to the main page, <a href="index.html">Click here!</a></p>
        <h2>Here are the results of your form!</h2>

        <p>You have requested <?=$_POST["Quantity"];?> <?=$_POST["product_name"];?><br>
        <div style=background-color:#D3D3D3>
            <ul>
                <li>Product: <?=$_POST["product_name"];?></li> 
                <li>Quantity: <?=$_POST["Quantity"];?></li>
            </ul>        
        </div>