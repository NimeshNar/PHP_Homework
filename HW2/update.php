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
        Product Price:
        <input type="number" name="pprice"><br>
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
    $pprice=$_POST["pprice"];
    $pquantity=$_POST["pquantity"];

    $sql = $conn->prepare("update product set pprice=?,pquantity=? where pid=?");
    $sql -> bind_param('iii',$pprice,$pquantity,$pid);

    if($sql->execute()){
        echo "Product Updated Successfully";
    }else{
        echo "Product Not Updated Successfully";
    }
}
?>