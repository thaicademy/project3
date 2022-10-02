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
    <h1> Login </h1>

    <form action="login.php" method="post" enctype="multipart/form-data">
        Email :
        <input type="text" name="email" /> <br />
        Password :
        <input type="password" name="password" /> <br />
        <input type="submit" value="เข้าสู่ระบบ" />
    </form>

</body>

</html>