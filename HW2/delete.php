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
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $pid=$_POST["pid"];

    $sql = $conn->prepare("delete from product where pid=?");
    $sql -> bind_param('i',$pid);

    if($sql->execute()){
        echo 'Product Deleted Successfully';
    }else{
        echo 'Product Not Deleted Successfully';
    }
}

?>