<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดง Blog</title>
</head>

<body>

<?php
   include "connect.php";
   $sql = "SELECT * FROM tbl_blogs";    //ดึงข้อมูลทั้งหมด tbl_blogs
   $result = mysqli_query( $conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
    echo "$row[title] <br/>";               //แสดงผลค่า
    echo "$row[detail] <br/>";
    echo "<img src='$row[img]' width='200px' />";
    echo "<hr/>";
   }

?>

</body>

</html>