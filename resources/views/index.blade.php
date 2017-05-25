<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="lib/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="lib/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="lib/js/bootstrap.js" type="text/javascript"></script>
    <link href="lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="lib/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="row" style="margin-top: 30px">
    <div class="col-sm-12">
        <div class="col-sm-3 col-lg-3">
        </div>
        <div class="col-sm-6 col-lg-6" style="border-radius: 3px; border: solid 2px">
            <center><label class="text-danger text-center">THÔNG TIN DĂNG NHẬP</label></center><br>
            <form action="dang-ky" method="post">
                <label>User Name</label><br>
                <input class="form-control" name="userName" type="text" placeholder="UserName">
                <br>
                <label>PassWord</label>
                <br>
                <input class="form-control"  name="password" placeholder="Password">
                <br>
                <input type="submit" value="Login" class="btn btn-success">
            </form>
        </div>
        <div class="col-sm-3 col-lg-3">
        </div>
    </div>
</div>

</body>
</html>
