<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>

<body>
    <?php
      include "navbar.php";
    ?>

    <form action="product_insert.php" method="post" enctype="multipart/form-data"><br />
        ชื่อสินค้า <input type="text" name="title" /><br />
        ราคา <input type="text" name="price" /> <br />
        จำนวนในคลัง <input type="text" name="stock" /> <br />
        ประเภทสินค้า <input type="text" name="cat_name" /> <br />
        รายละเอียด <textarea rows=" 5" cols="50" name="description"> </textarea><br />
        แทรกรูป <input type="file" name="img" /> <br />
        <input type="submit" value="บัณทึก" /> <br />
    </form>

</body>

</html>