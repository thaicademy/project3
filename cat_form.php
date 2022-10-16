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
      include "navbar.php";
    ?>

    <div class="container col-md-8">
        <form action="cat_insert.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-2">
                    ประเภทสินค้า
                </div>
                <div class="col-md-10">
                    <input type="text" name="cat_name" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    แทรกรูป
                </div>
                <div class="col-md-10">
                    <input type="file" name="photo"  class="form-control" />
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" value="บึกทึกข้อมูล" class="btn btn-primary" />
            </div>
        </form>
    </div>

</body>

</html>