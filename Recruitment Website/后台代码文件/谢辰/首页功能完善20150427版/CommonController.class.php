<?php
/*
**Author: 谢辰
**function: 自动运行函数
**        : 接收客户验证邮件的链接点击，确定邮箱验证
**        : 验证码获取与验证
**AlterTime: 2015/04/05
**         : 2015/04/09
**         : 2015/04/19
**         : 2015/05/25
*/
    namespace Home\Controller;
	use Think\Controller;
Class CommonController extends Controller{
	protected function _initialize(){
			//session('userId', '1');
			//session('userName', '1224504957@qq.com');
			//session('userType', 'HR');
			//dump($_SESSION);
			//echo isset($_SESSION['uid']);
			//echo isset($_SESSION['username']);
		//检测是否已经登录，防止限制级网页在未登录情况下被访问
		if (!isset($_SESSION['userId']) || !isset($_SESSION['userName'])){
			//echo T('未登陆（首页）');die;
			//$this->display();die;
			//echo U($this);die;
			//dump($this);
			$this->redirect('UserLog/home');
		}
	}
	//接收客户验证邮件的链接点击，确定邮箱验证

}
?>