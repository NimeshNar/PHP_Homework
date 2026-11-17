<?php

include 'db.php';
$result = $conn->query("select * from product");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background: linear-gradient(
                to right,
                lightpink,
                lightyellow,
                lightblue
            );
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        th, td {
            border: 1px solid gray;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>pid</th>
            <th>pname</th>
            <th>pprice</th>
            <th>pcategory</th>
            <th>pquantity</th>
        </tr>

        <?php while($row=$result->fetch_assoc()){?>
        <tr>
        <td><?php echo $row["pid"]?></td>
        <td><?php echo $row["pname"]?></td>
        <td><?php echo $row["pprice"]?></td>
        <td><?php echo $row["pcategory"]?></td>
        <td><?php echo $row["pquantity"]?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>