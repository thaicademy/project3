<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     include "connect.php";

     $sql = "SELECT * FROM tbl_products";
     $result = mysqli_query($conn , $sql);
     while($row=mysqli_fetch_assoc($result)){
        echo "ชื่อสินค้า $row[title] <br/>";
        echo "ราคา $row[price] บาท <br/>";
        echo "จำนวนสินค้าในคลัง $row[stock] <br/>";
        echo "<img src=$row[img] width='200px' />  <br/>";
        echo "$row[description]  <br/>";
        echo "$row[cat_name]  <br/>";
        echo "<hr/>";
     }


   ?>

    
</body>
</html>