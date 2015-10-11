<?php
/*
*Author：金威强
*Function：个人显示功能
*date:2015.4.10
*/
namespace Home\Controller;
use Think\Controller;
class WebShowController extends Controller{
	public function indi_resumeNum_interNum_show(){
		session('indiId','3');  //设置session
		if(isset($_SESSION['indiId']))
		{
			$indiId = session('indiId');
			$M = M('applicant_info applicant_info,resume_info resume_info,education education,resume_work resume_work');
			$sql = 'resume_info.applicantId='.$indiId.' 
			and applicant_info.applicantId='.$indiId.'
			and education.applicantId='.$indiId.'
			and resume_work.resumeId=resume_info.resumeId';
			$result=$M->where($sql)->find();
			if($result['educationdegree'] == '0'){
				$result['educationdegree']='无';
			}
			if($result['educationdegree'] == '1'){
				$result['educationdegree']='高中毕业';
			}
			if($result['educationdegree'] == '2'){
				$result['educationdegree']='本科';
			}
			if($result['educationdegree'] == '3'){
				$result['educationdegree']='硕士';
			}
			if($result['educationdegree'] == '3'){
				$result['educationdegree']='博士及以上';
			}
			$this->assign('applicant',$result);
		}
		else{
			$this->display('HOME');
		}
	}//个人_投递数_面试数显示

	// public function indi_resumeBeScanedNum_show(){
	// 	session('indiId','3');  //设置session
	// 	if(isset($_SESSION['indiId']))
	// 	{
	// 		$indiId = session('indiId');
	// 		$M = M('applicant_info applicant_info,resume_info resume_info,education education,resume_work resume_work');
	// 		$sql = 'resume_info.applicantId='.$indiId.' 
	// 		and applicant_info.applicantId='.$indiId.'
	// 		and education.applicantId='.$indiId.'
	// 		and resume_work.resumeId=resume_info.resumeId';
	// 		$result=$M->where($sql)->find();
	// 		$this->assign('applicant2',$result);
	// 		$this->display('Personal');
	// 	}
	// 	//else
	// 		//$this->redirect('登陆界面.html');
	// }//个人-简历被浏览数显示

	public function indi_resumeDeliverNum_show(){
		session('indiId','3');  //设置session
		if(isset($_SESSION['indiId']))
		{
			$indiId = session('indiId');
			$M = M('resume_info resume_info,interview interview');
			$sql = 'resume_info.applicantId='.$indiId.' 
			and resume_info.resumeId=interview.resumeId
			and TO_DAYS(interview.interviewDeliverTime) = TO_DAYS(now())';
			$count=$M->where($sql)->count();
			$this->assign('deliverNum',$count);
		}
		else{
			$this->display('HOME');
		}
	}//个人-简历当日投递数

	// public function indi_resumeCompletedper_show(){
	// 	session('indiId','1');  //设置session
	// 	if(isset($_SESSION['indiId']))
	// 	{
	// 		$indiId = session('indiId');
	// 		$result=M('resume_info')->where(array('applicantId' => $indiId))->select();
	// 		// p($result);
	// 		// echo($result[0]['resumeprogress']);
	// 		// die;
	// 		$this->assign('resumeProgress',$result[0]['resumeprogress']);
	// 	}
	// 	// else
	// 	// 	$this->redirect('登陆界面.html');

	// }//个人-简历完成度显示

	// public function indi_recommandJob_show(){
	// 	session('indiId','1');  //设置session
	// 	if(isset($_SESSION['indiId']))
	// 	{
	// 		$indiId = session('indiId');
	// 		$condition['indiId']=$indiId;
	// 		$condition['interview.resumeId']=$condition['resume_info.resumeId'];
	// 		$condition['resume_info.applicantId']=$condition['applicant_info.applicantId'];
	// 		$condition['interviewStatus']='1';
	// 		$condition['_logic'] = 'AND';//select语句的判断封装

	// 		$interResumeNum=M('resume_info,interview,applicant_info')->where($condition)->count();
	// 		import('ORG.Util.Page');//引入分页类
	// 		$count =$interResumeNum;
	// 		$page = new \Think\Page($count, 10);
	// 		$limit = $page->firstRow . ',' . $page->listRows;
	// 		$interResumeInfo=M('resume_info,interview,applicant_info')->where($condition)->order('createTime DESC')->limit($limit)->select();
	// 		$this->interResumeInfo = $interResumeInfo;
	// 		$this->page = $page->show();//将页码分配给前端的page变量
	// 		$this->display();//显示与所在方法同名的html文件
	// 	}
	// 	// else
	// 	// 	$this->redirect('登陆界面.html');
	// }//个人-推荐职位显示

	public function indi_chosenJob_show(){
		session('indiId','3');  //设置session
		if(isset($_SESSION['indiId']))
		{
			$isactive=array('deliver'=>'active','collect'=>'','book'=>'');
			$this->assign('isactive',$isactive);

			$indiId = session('indiId');
			$M = M('interview interview,resume_info resume_info,job_info job_info,company_info company_info');
			$sql = 'resume_info.applicantId='.$indiId.' 
			and interview.resumeId = resume_info.resumeId         
			and interview.jobId = job_info.jobId
			and interview.hrId = company_info.hrId';
			//$result = $M->where($sql)->select();
			$count = $M->where($sql)->count();
			$page = new\Think\Page($count,1);
			$show = $page->show();
			$list = $M->where($sql)->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('deliverlist',$list);
			$this->assign('deliverpage',$show);
		}
		else{
			$this->display('HOME');
		}
	}//个人-投递职位显示

	public function indi_collectedJobComp_show(){
		session('indiId','3');  //设置session
		if(isset($_SESSION['indiId']))
		{
			$isactive=array('deliver'=>'','collect'=>'active','book'=>'');
			$this->assign('isactive',$isactive);

			$indiId = session('indiId');
			$M = M('collect collect,resume_info resume_info,job_info job_info,company_info company_info');
			$sql = 'resume_info.applicantId='.$indiId.' 
			and collect.resumeId = resume_info.resumeId
			and collect.collectType = 1
			and collect.jobId = job_info.jobId
		    and company_info.hrId = collect.hrId';

			$count = $M->where($sql)->count();
			$page = new\Think\Page($count,1);
			$show = $page->show();
			$list = $M->where($sql)->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('collectlist',$list);
			$this->assign('collectpage',$show);
		}
		else{
			$this->display('HOME');
		}
	}//个人-收藏的职位/公司显示

	// public function indi_subscribe_show(){
	// 	session('indiId','3');  //设置session
	// 	if(isset($_SESSION['indiId']))
	// 	{
	// 		$indiId = session('indiId');
	// 		$M = M('collect collect,resume_info resume_info,job_info job_info,company_info company_info');
	// 		$sql = 'resume_info.applicantId='.$indiId.' 
	// 		and collect.resumeId = resume_info.resumeId
	// 		and collect.collectType = 1
	// 		and collect.jobId = job_info.jobId
	// 		// and company_info.hrId = collect.hrId';
	// 		// $result = $M->where($sql)->select();
	// 		// p($result);
	// 		$count = $M->where($sql)->count();
	// 		$page = new\Think\Page($count,1);
	// 		$show = $page->show();
	// 		$list = $M->where($sql)->limit($page->firstRow.','.$page->listRows)->select();
	// 		$isactive=array('deliver'=>'','collect'=>'','book'=>'');
	// 		$this->assign('isactive',$isactive);
	// 		$this->assign('list2',$list);
	// 		$this->assign('page2',$show);
	// 		$this->display('Index_index');
	// 	}
	// 	// else
	// 	// 	$this->redirect('登陆界面.html');
	// }//个人-订阅显示

	public function indi_subscribe(){
		session('indiId','3');
		if(isset($_SESSION['indiId'])){
			$indiId = session('indiId');
			$name = I('subscribeName');
			echo($indiId);
			echo($name);

		}

	}//个人订阅功能

	public function indi_webNews_show_all(){
		session('indiId','3');  //设置session
		//session('theOther','2'); //设置消息互动另一方
		if(isset($_SESSION['indiId']))
		{
			$indiId = session('indiId');
			$theOther = session('theOther');
			$M = M('message message');

			$sql = 'message.messageFromId = '.$indiId.'
			or
			message.messageToId = '.$indiId.'';
			
			$result = $M->where($sql)->select();

			foreach ($variable as $key => $value) {
				# code...
			}

			$this->assign('result',$result);
			// p($result);
			// die;


		    // $count = $M->where($sql)->count(); 
			// $page = new\Think\Page($count,4);
			// $show = $page->show();
			// $list = $M->where($sql)->order('messageSendTime desc')->limit($page->firstRow.','.$page->listRows)->select();
			// $this->assign('list',$list);
			// $this->assign('page',$show);
			
			$this->display('mail-list');
		}
		else{
			$this->display('HOME');
		}
	}//个人-站内信，显示收到信息数和列表

	public function indi_webNews_show_detail(){
		session('indiId','1');  //设置session
		session('theOther','2'); //设置消息互动另一方
		if(isset($_SESSION['indiId'])&&isset($_SESSION['theOther']))
		{
			$indiId = session('indiId');
			$theOther = session('theOther');
			$M = M('message message');
			$NAME1 = M('hr_info hr_info');
			$NAME2 = M('applicant_info applicant_info');

		    $sql = '(message.messageFromId='.$indiId.' 
		    and message.messageToId='.$theOther.')
		    or 
		    (message.messageFromId='.$theOther.' 
		    and message.messageToId='.$indiId.') ';  //查询信息



		    $sqlname11 = 'hr_info.hrId = '.$indiId.'';
		    $sqlname12 = 'applicant_info.applicantId = '.$indiId.'';
		    $sqlname21 = 'hr_info.hrId = '.$theOther.'';
		    $sqlname22 = 'applicant_info.applicantId = '.$theOther.''; //查询姓名

			//$result = $M->where($sql)->select();

		    if($NAME1->where($sqlname11)->count()>0){

		    	$result11 = $NAME1->where($sqlname11)->find();
		    	$this->assign('myname',$result11['hrname']);
		    }
		    if($NAME2->where($sqlname12)->count()>0){
		    	$result12 = $NAME2->where($sqlname12)->find();
		    	$this->assign('myname',$result12['applicantname']);
		    }
		    if($NAME1->where($sqlname21)->count()>0){
		    	$result13 = $NAME1->where($sqlname21)->find();
		    	$this->assign('hisname',$result13['hrname']);
		    }
		    if($NAME2->where($sqlname22)->count()>0){
		    	$result14 = $NAME2->where($sqlname22)->find();
		    	$this->assign('hisname',$result14['applicantname']);
		    }

		    $count = $M->where($sql)->count();
			$page = new\Think\Page($count,4);
			$show = $page->show();
			$list = $M->where($sql)->order('messageSendTime desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);

			$this->display('mail-send');
		}
		else{
			$this->display('HOME');
		}
	}//个人-站内信，显示收到信息数和列表


	public function indi_personalfront(){
		R('WebShow/indi_resumeNum_interNum_show');
		R('WebShow/indi_resumeDeliverNum_show');
		$this->display('personal-front');
	}

	public function indi_famous(){
		$this->display('famous');
	}

	public function indi_BBS(){
		$this->display('BBS');
	}

	public function indi_myfriends(){
		$this->display('myfriends');
	}

	public function indi_search(){
		$this->display('search');
	}

	public function indi_jobmanaging(){
		R('WebShow/indi_chosenJob_show');
		R('WebShow/indi_collectedJobComp_show');
		$this->display('job-managing');
	}

	public function indi_Home(){
		// session('userId','1');  //设置session
		session_unset();
		session_destroy();
		if(isset($_SESSION['userId'])){
			R('WebShow/indi_index');
		}
		else{
			$this->display('HOME');
		}
	}
}
?>