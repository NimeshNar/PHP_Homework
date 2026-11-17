<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Username:
        <input type="text" name="name" id=""><br><br>
        Password:
        <input type="password" name="pass" id=""><br><br>
        Terms & Conditions
        <input type="checkbox" name="tandc" value="Yes" id=""><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>




<?php

if($_SERVER["REQUEST_METHOD"]==="GET"){

    $name = $_GET["name"];
    $pass = $_GET["pass"];
    $tandc = isset($_GET["tandc"])?"agreed":"not agreed";

    echo "Welcome, $name. You have $tandc to the terms and conditions.";
}
?>