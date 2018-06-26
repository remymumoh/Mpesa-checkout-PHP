<?php 
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mpesa Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <img src= "m.jpg"/>
    <form method="post" action="requestcheckout.php">
    Amount:<br>
    <input type="text" name="amount" >
    <br>
    Phonenumber:<br>
    <input type="text" name="number" placeholder="2547002000000">
    <br>
    Pay via Mpesa:<br>
    <button type="submit" name="checkout">Checkout with Mpesa</button>

    <p>NB:This sample uses a real paybill number it makes real transactions. Hence encouraged to test with the lowest amount 10/=</p>
</body>
</html>