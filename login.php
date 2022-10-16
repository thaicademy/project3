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
    <div class="container col-md-6">
        <h1 class="text-center"> Login </h1>
        <form action="login.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-2">Email :</div>
                <div class="col-md-10">
                    <input type="text" name="email" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"> Password :</div>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control" />
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success" />
            </div>
        </form>
    </div>
</body>

</html>