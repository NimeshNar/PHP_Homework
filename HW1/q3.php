<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name:
        <input type="text" name="name"><br><br>
        Phone Number:
        <input type="number" name="phone"><br><br>
        Brand:
        <select type="text" name="brand">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Tata">Tata</option>
            <option value="Honda">Honda</option>
            <option value="Maruti">Maruti</option>
        </select><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>




<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $brand=$_POST["brand"];

    echo "Hello, $name. Your phone number is $phone and your preferred car brand is $brand.";
}
?>