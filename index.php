<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .login {
        height: 400px;
        width: 900px;
        margin: 300px;
        padding: 10px;
        border: 1px #CD214F solid ;
    }
    .login input{
        padding: 50px;
        margin: 50px
    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<form action="" method="post">
    <div  class="login"/>
    <h2>Từ  Điển Anh - Việt</h2>
<input type="text" name="name" size="50" placeholder="nhập từ cần tìm"/>
    <input type="submit" id="submit" value="tìm kiếm"/>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $dictionary = array("dog"=>"chó","cat"=>"mèo","bird"=>"chim","pig"=>"lợn");
    $flag = 1;
    foreach ($dictionary as $key=>$value){
        if($_POST["name"] == $key){
            echo "<br>".$key." = ".$value;
            $flag = 0;
        }
    }
    if ($flag == 1){
        echo $_POST["name"]." không có trong từ điển";
    }
}
?>