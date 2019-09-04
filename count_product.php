<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="product_Description" placeholder="">
    <input type="text" name="list_Price" placeholder="">
    <input type="text" name="discount_Percent" placeholder="">
    <input type="submit" value="Caculate Discount">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $list_price = $_POST['list_Price'];
    $discount_percent = $_POST['discount_Percent'];
    $discount_amount = $list_price * $discount_percent * 0.1;
    echo $discount_amount;
}
?>
</body>
</html>
