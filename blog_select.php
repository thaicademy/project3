<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดง Blog</title>
</head>

<body>
    <div class="container">
<div class="row row-cols-4 g-2">
<?php
   include "connect.php";
   $sql = "SELECT * FROM tbl_blogs";    //ดึงข้อมูลทั้งหมด tbl_blogs
   $result = mysqli_query( $conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
?>
<div class="col">
    <div class="card">
        <img src="<?php echo"$row[img]"; ?>" class="card-img-top" />
        <div class="card-body">
            <h2><?php echo"$row[title]"; ?></h2>
            <p class="card-text"><?php echo"$row[detail]"; ?> </p>
        </div>
    </div>
</div>
<?php
   }
?>
</div>
</div>
</body>

</html>