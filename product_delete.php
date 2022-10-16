<?php
include "connect.php";
$id = $_GET['id'];
$img = $_GET['img'];

if(file_exists($img)){
  unlink($img);
}else{
    echo"ไม่สามารถลบรูปได้";
}

$sql = "DELETE FROM tbl_products WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo"
       <script>
          alert('ลบข้อมูลเรียบร้อย');
          window.location.href='product.php';
       </script>
    ";
}else{
    echo"ลบไม่ได้ครับ";
    echo mysqli_error($conn);
}

?>