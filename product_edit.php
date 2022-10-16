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
      include "navbar.php";
      
      $id = $_GET['id'];
      $sql = "SELECT * FROM tbl_products WHERE id='$id' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
    ?>
    <div class="container col-md-8">
        <h1 class="text-center">แก้ไขสินค้า</h1>
        <form action="product_update.php?id=<?php echo"$row[id]"; ?>" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-2">
                    ชื่อสินค้า
                </div>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" 
                     value="<?php echo"$row[title]"; ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    ราคา
                </div>
                <div class="col-md-10">
                    <input type="text" name="price" class="form-control" value="<?php echo"$row[price]"; ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    จำนวนในคลัง
                </div>
                <div class="col-md-10">
                    <input type="text" name="stock" class="form-control" value="<?php echo"$row[stock]"; ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    ประเภทสินค้า
                </div>
                <div class="col-md-10">
                    <input type="text" name="cat_name" class="form-control" value="<?php echo"$row[cat_name]"; ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    รายละเอียด
                </div>
                <div class="col-md-10">
                    <textarea rows=" 5" cols="50" name="description" class="form-control"> </textarea>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    แทรกรูป
                </div>
                <div class="col-md-10">
                    <input type="file" name="img" class="form-control"  />
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" value="บัณทึก" class="btn btn-primary" />
            </div>

        </form>
    </div>
</body>

</html>