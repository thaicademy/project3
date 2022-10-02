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
    <h1> Register </h1>

    <form action="reg_insert.php" method="post" enctype="multipart/form-data">
        First Name <input type="text" name="firstname" /> <br/>
        Last Name <input type="text" name="lastname" /> <br/>
        E-mail <input type="email" name="email" /> <br/>
        Password <input type="password" name="password" /> <br/>
        Address <textarea rows="5" cols="50" name="address"></textarea> <br/>
        <input type="submit" value="ลงทะเบียน" />
    </form>
    
</body>
</html>


