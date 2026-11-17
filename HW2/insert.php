<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Product Id:
        <input type="number" name="pid"><br>
        Product Name:
        <input type="text" name="pname"><br>
        Product Price:
        <input type="number" name="pprice"><br>
        Product Category:
        <input type="text" name="pcategory"><br>
        Product Quantity:
        <input type="number" name="pquantity"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>




<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $pid=$_POST["pid"];
    $pname=$_POST["pname"];
    $pprice=$_POST["pprice"];
    $pcategory=$_POST["pcategory"];
    $pquantity=$_POST["pquantity"];

    $sql = $conn->prepare("insert into product(pid,pname,pprice,pcategory,pquantity) values(?,?,?,?,?)");
    $sql -> bind_param('isisi',$pid,$pname,$pprice,$pcategory,$pquantity);

    if($sql->execute()){
        echo "Product Inserted Successfully";
    }else{
        echo "Product Not Inserted Successfully";
    }
}
?>