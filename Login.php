<html>
<head>
    <title>login</title>
    <style>
        #dog{
            text-align:center;
        }
    </style>
</head>
<body>
<div id="dog">
    <form method="POST" action="login.php">
        登录的admin<br>
        账号：<input type="username" name="username"><br>
        密码:<input type="password" name="upass"><br>
        <input type="submit" value="登录">
    </form>
</div>
<?php
//博主暂时没有学到SQL，所以使用元祖来暂时代替
$userpass=array('admin','123456'
);

//判断username和password是否为空
if(!$_POST['username']|| !$_POST['upass']){
    echo"请输入账号密码";
}else{
//不为空，判断密码是否正确
    $username=$_POST['username'];
    $password=$_POST['upass'];
    //if($userpass[$username]=='123456'){
        echo"$username,你好";
    //}

IF(1){}
    else{
        echo"账号密码不正确";
    }
}
?>
</body>
<html>