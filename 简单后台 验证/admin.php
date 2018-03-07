</script>
<?php
session_start();

if(!empty($_SESSION['username'])){
    /*防止别有用心的人知道了session的名字，假冒登录*/
    if(($_SESSION['username1']==$_SESSION['username1'])&&($_SESSION['password1']==$_SESSION['password'])){
        if(!empty($_GET['del'])=="yes"){
            echo '<script type="text/javascript">alert("您已经成功的退出，即将返回登录界面");</script>';
            unset($_SESSION['username']);
            echo '<script type="text/javascript">window.location.href="index.php"</script>';
        }
    }else{
            echo '<script type="text/javascript">alert("非法操作");</script>';
            echo '<script type="text/javascript">window.location.href="index.php"</script>';
    }
}else{
        echo '<script type="text/javascript">alert("非法操作");</script>';
        echo '<script type="text/javascript">window.location.href="index.php"</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <style type="text/css">
        h2 {
            font-size: 40px;
            text-align: center;
            margin:150px auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>欢迎<?php echo $_SESSION['username'] ?>来到管理后台，这是你第一次登录</h2>
    <h2 id="out">退出登录</h2>
</body>
</html>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

$('#out').click(function(){
/*    $.ajax({
        url:"admin.php",
        data:"del=yes",
    })*/
    window.location.href="admin.php?del=yes";

    console.log(1);
})
</script>

<script type="text/javascript">
out.onclick=function(){
    window.location.href="index.php";
}




