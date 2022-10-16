<?php
  include "connect.php";
  $title = $_POST['title'];

  $sql = "UPDATE tbl_products SET 
          title='$_POST[title]',
          price = '$_POST[price]',
          stock = '$_POST[stock]',
          description = '$_POST[description]'
          WHERE id = '$_GET[id]'
         ";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo "แก้ไขเรียบร้อย";
  }else{
    echo"ไม่สามารถแก้ไขได้";
  }

?>