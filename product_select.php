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
   ?>
    <div class="row row-cols-4 g-2">
   <?php
     $sql = "SELECT * FROM tbl_products";
     $result = mysqli_query($conn , $sql);
     while($row=mysqli_fetch_assoc($result)){
   ?>
        <div class="col">
            <div class="card">
                <img src="<?php echo"$row[img]"; ?>" class="card-img-top" />
                <div class="card-body">
                    <h2 class="card-title"><?php echo"$row[title]"; ?></h2>
                    <p class="card-text">ราคา <?php echo"$row[price]"; ?></p>
                    <p class="card-text">จำนวน <?php echo"$row[stock]"; ?></p>
                    <p class="card-text"><?php echo"$row[description]"; ?></p>
                    <a href="product_delete.php?id=<?php echo"$row[id]";?> && img=<?php echo"$row[img]"; ?> " class="btn btn-danger" >Delete</a>
                    <a href="product_edit.php?id=<?php echo"$row[id]";?>" class="btn btn-info" >Edit</a>
                </div>
            </div>
        </div>
   <?php
     }
   ?>
    </div>

</body>

</html>