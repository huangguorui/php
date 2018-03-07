
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <title>用户登录</title>
<style type="text/css">
            textarea {
           resize:none;
           width: 300px;
           height: 100px;
        }
        .form1 {
            width: 400px;
            height: auto;
            /*background: red;*/
            position: absolute;
            left:50%;
            top: 50%;
            padding:20px;
            margin-left:-220px;
            overflow:hidden;
            border-radius:5px;
            box-shadow: 0 0 1px 1px black;
        }

        #sub-btn {
            display: block;
            margin:20px auto;
        }
</style>
</head>
<body>

<form class="form1" action="" method="get" autocomplete="off" >
    <h3 style="text-align:center">用户登录</h3>
    <div class="form-group">
        <label for="user">用户名：</label>
        <input type="text" class="form-control" id="user" name="username" placeholder="输入一个用户名吧" required="required" autocomplete="off" >
    </div>
    <div class="form-group">
        <label for="tel">密码：</label>
        <input type="password" class="form-control" id="password" placeholder="请输入密码"  required="required" name="password" autocomplete="off" >

    </div>
  <input type="submit" class="btn  btn-primary"  id="sub-btn" value="点击登陆">
</form>
</body>
</html>
<script type="text/javascript">
    $('form').css("margin-top",(-$('form').height()/2-40));

window.onresize=function(){
    $('form').css("margin-top",(-$('form').height()/2-40));
}
</script>
<?php

session_start();
//$str="aaa.txt";
//获取文件扩展名
//echo substr(strrchr($str,'.'),1);
/*
 接收值
 */

/*判断条件是否成立*/
$flag = 0;

if (!empty($_GET['username'])) {
	$username = $_GET['username'];
	$password = $_GET['password'];
	$user = array("$username" => "$password");
	$bottom = array_keys($user);
	//print_r($user);

	$arr = array("admin" => "111111", "home" => "123456","1"=>"1");

	foreach ($arr as $value => $abc) {
		//end() 函数将数组内部指针指向最后一个元素，并返回该元素的值（如果成功）因为只有一个，所以返回的就是他。
		if ($user["$username"] == $abc && $value == end($bottom)) {
			$flag = 1;
            /*将当前匹配上的数字全部存入session中，进行比对*/
            $_SESSION['username1']=$value;
            $_SESSION['username']=end($bottom);

            $_SESSION['password1']=$abc;
            $_SESSION['password']=$user["$username"];

            $_SESSION['flag']=1;
           // echo $_SESSION['username'];
		}
	}
	if ($flag == 1) {
		header('Location:admin.php');
		$flag = 0;
	} else {
		echo '<script type="text/javascript">alert("输入有误，请重新输入");</script>';
	}

}
?>