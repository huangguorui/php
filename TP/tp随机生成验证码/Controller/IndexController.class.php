<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {

		//$this->assign('data',$Verify);
		$this -> display();
	}

	function verifyIm() {

		$Verify = new \Think\Verify();
		$Verify -> fontSize = 30;
		$Verify -> length = 3;
		$Verify -> useNoise = false; ;
		$Verify -> entry();
	}

	function login() {
        //打印所有传输的post数据
		dump($_POST);
        //打印所有的session数据
		var_dump($_SESSION);
		//如果没有这个属性那么，就为空
		if (empty($_POST['Verify'])) {
			$this -> error("请输入验证码");
		}

		$Verify = new \Think\Verify();
		//如果查找verify没有的话
		if (!$Verify -> check($_POST['Verify'])) {
			$this -> error('验证码输入错误');
		}

		echo "用户登录成功";

	}

}
