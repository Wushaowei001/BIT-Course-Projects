<?php if (!defined('THINK_PATH')) exit();?>  <!--  袁路非 2015.4.16 我的人脉界面-->
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我的人脉</title>
    <link href="/apply/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/apply/Public/js/jquery-2.1.3.js"></script>
    <script src="/apply/Public/js/bootstrap.min.js"></script>
    <style>

	.navimg1{
			width:30PX;
			height:35px;
			margin-top:-5px;
		}
	.navimg2{
		width:30PX;
			height:20px;
			margin-right:10px;
			}
			.nav-search{
			width:200px;
			position:absolute;
			top:10px;
			left:65px;
		}	
	body{
			padding-top: 70px;
		}
		
		img1_xy{/*完善经历的图片*/
width:70px;
}

.jingli_add{/*整块"完善经历"*/
border:3px solid;
border-color:#FFF;
width:98%;
margin-top:15px;
padding:0;

}
.jingli_label{/*"经历的标签"样式设置*/
font-size:20px;
margin-bottom:15px;
margin-right:5px;
float:left;
}
.modul_school{/*学校名称模块*/
	width:70%;
	border-color:#FFF;
	margin-left:14px;
	padding-left:0px;
}
.school_list{/*学校名称列表*/
border:3px solid;
border-color:#FFF;
overflow-y:scroll;
list-style:none;
width:90%;
padding-left:5px;/*文字左边距*/
margin-left:15px;/*滚动列表左边距*/
height:150px;
}
.jingli_button{/*添加教育经历按钮*/
margin-left:10px;
margin-top:10px;
margin-bottom:20px;
}
		
		
		
		.tinyFace{
			width:65PX;
			height:65px;
		}
		.ren {
			padding-top:30px;
			overflow:hidden;
			list-style:none;
		}
		.ren-title{
			background-color:#CCC;
			text-align:center;
		}
	.ren-img{
		float:left;	
	}
	.ren-1{
		float:left;
		
	}
    .ren-name{
		float:left;
		font-weight: bold;
		font-size: 130%;
		
	}
	.ren-location{
		
		padding-left:100px;
	}
	.ren-edu{
		float:left;
		color:#999;
		font-size: 80%;
	}
	.ren-xueli{
		float:left;
		color:#999;
		font-size: 80%;
		padding-left:5px;
	}
	.ren-school{
		color:#999;
		font-size: 80%;
		padding-left:5px;
		margin-left:5px;
	}
	.ren-company{
		float:left;
		font-size: 80%;
		color:#999;
	}
	.ren-zhiwei{	
		color:#999;
		font-size: 80%;
		padding-left:5px;
		margin-left:5px;
	}
		
	.ren-2{	
		font-size: 80%;
	}
	
	.comp{
		padding-top:30px;
	  overflow:hidden;
	  list-style:none;
	}
	.comp-name{
		font-size:150%;
		color:#09C;
		padding-left:30px;
	}
	.comp-img{
		margin-left:10px;
	}
	.comp-image{
		width:170px;
		height:80px;
	}
	.comp-prof{
	padding-left:30px;
	}
	.comp-type{
		padding-left:30px;
	}
	.comp-btn{
		
		margin-left:50px;
	}
	</style>
  </head>
  <body>
<nav class="navbar  navbar-fixed-top navbar-inverse " role="navigation">
  <div class="container">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="<?php echo U('WebShow/indi_Home');?>"><img class="navimg1" alt="Brand" src="/apply/Public/image/我的人脉/u42.png"></a>
      <div class="visible-xs nav-search">  
              <input type="text" class="form-control" placeholder="请输入职位关键字">          
             </div>  <!-- ./nav-search--> 
    </div>
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
  	
        <li><a href="<?php echo U('WebShow/indi_Home');?>">首页 <span class="sr-only">(current)</span></a></li>
      
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">找职位<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo U('WebShow/indi_search');?>">搜寻职位</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo U('WebShow/indi_jobmanaging');?>">职位管理</a></li>
           
          </ul>
          </li><!-- dropdown ！-->
          
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">人脉圈<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo U('WebShow/indi_myfriends');?>">海外校友</a></li>
            <li class="divider"></li>
            <li><a href="#">人脉圈</a></li>
            
           </ul>
           </li><!-- dropdown ！-->
            
            <li><a href="<?php echo U('WebShow/indi_famous');?>">知名企业</a></li>
              <li><a href="#">视频面试</a></li>
                <li><a href="#">海归路上</a></li>
               
               
             <!--    
               <form class="navbar-form navbar-left" role="search">
             <div class="form-group">  
              <input type="text" class="form-control" placeholder="Search">
            </div>
             </form>
             !-->
          
      </ul>
     <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo U('WebShow/indi_webNews_show_all');?>"><img class="navimg2" alt="Brand" src="/apply/Public/image/我的人脉/1_u297.png"></a></li>
          <li><a href="<?php echo U('WebShow/indi_personalfront');?>"><img class="navimg2" alt="Brand" src="/apply/Public/image/我的人脉/2_u299.png"></a></li>
          <li><a href="#">加入收藏</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>


<div class="container">
<div class="row">
<div class="jumbotron col-md-3">
<ul class="nav nav-tabs nav-stacked" role="tablist" id="myTab">
   <li>人脉圈子</li>
  <li role="presentation"><a href="#expand" aria-controls="expand" role="tab" data-toggle="tab">扩展更多人脉机会</a></li> 
  <li role="presentation"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">我的好友</a></li>
  <li role="presentation"><a href="#concerned" aria-controls="concerned" role="tab" data-toggle="tab">我的关注</a></li>
   <li role="presentation"><a href="#fans" aria-controls="fans" role="tab" data-toggle="tab">我的粉丝</a></li>
  <li>公司圈子</li>
  <li role="presentation"><a href="#concernedcomp" aria-controls="concernedcomp" role="tab" data-toggle="tab">我关注的公司</a></li>
  <li role="presentation"><a href="#follow" aria-controls="follow" role="tab" data-toggle="tab">相互关注</a></li>
</ul>
</div><!-- ./junbotorn-->


<div class="tab-content col-md-9">

  <div role="tabpanel" class="tab-pane fade in active" id="expand">  
   <div class="panel panel-default">
   <div class="panel-body ren-title">
   <p>嗨，赶紧添加过往留学经历，找到老同学，为简历加分啊~</p>
    </div><!-- /.panel-body -->
    
    <div class="container">
    <div class="row">
<!--完善经历-->
  <div class="col-md-8 col-sm-7">
   <div class="jumbotron text-left">
   
   <div class="container">   
   <div class="row">
   
   <div class="jingli_label">
    <span class="label label-info" name="xueli">硕士</span></div>
   <div class="jingli_label">
    <span class="label label-info" name="diqu1">美国</span></div>
   <div class="jingli_label">
    <span class="label label-info" name="diqu2">加利福尼亚州</span></div>  
   <div class="jingli_label">
    <span class="label label-info" name="xuexiao">斯坦福大学</span></div   
   ><div class="jingli_label">
    <span class="label label-info" name="zhuanye">工程学院</span></div>
   <div class="jingli_label">
    <span class="label label-info" name="xueli_time">2012/05/01-2014/12/05</span></div>   
    </div><!--.row-->
    </div><!--container-->
<!--经历添加-->   
    <div class="jingli_add">
 <form class="navbar-form navbar-left" role="search">
<!--下拉选择学历-->
<label type="text" class="btn">学历:
<select type="text" class="text1" name="xueli">
<option></option>
<option>博士后</option>
<option>博士</option>
<option>硕士</option>
<option>MBA/EMBA</option>
<option>本科</option>
<option>其它</option>
</select>
</label>
<!--下拉选择学校地点-->
<label type="text" class="btn">学校地点:
   <select type="text" class="text1" name="guojia">
<option></option>
<option>美国</option>
<option>澳洲</option>
<option>英国</option>
<option>日本</option>
<option>中国</option>
</select>
<span></span>
<select type="text" class="text1" name="zhou">
<option></option>
<option>呵呵哈哈呵呵州</option>
<option>上海</option>
<option>广州</option>
<option>深圳</option>
<option>海外</option>
</select>
</label>
</form>

<!--学校名称-->
<div class="modul_school">
<form>
<label type="text" class="btn">学校名称：</label> 
 <ul class="school_list">
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
  <li>哈佛大学</li>
 </ul>
 </form>
 </div><!--.modul_school-->
 <div class="container">
  <div class="row">
   <div class="col-md-5 col-sm-6">
   <form> 
   <label type="text" class="btn">学院名称：</label>
   <input type="text" class="form-control" name="xueyuan">
   </form>
   </div>
   <div class="col-md-5 col-sm-6">
   <form> 
   <label type="text" class="btn">专业名称：</label>
   <input type="text" class="form-control" name="zhuanye">
   </form>
   </div>
   </div>
   <div class="row"> 
   <div class="col-md-10 col-sm-12">
   <form>
   <label type="text" class="text-left btn">就读时间：</label>
   
   <select type="text" class="text1" name="year">
     <option></option>
     <option>2010</option>
     <option>2011</option>
     <option>2012</option>
     <option>2013</option>
     <option>2014</option>
     <option>2015</option>
   </select>
   
   <select type="text" class="text1" name="month">
    <option></option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
     <option>11</option>
     <option>12</option>
   </select> 
   <label>—</label>
   <select type="text" class="text1" name="year">
     <option></option>
     <option>2010</option>
     <option>2011</option>
     <option>2012</option>
     <option>2013</option>
     <option>2014</option>
     <option>2015</option>
     <option>2016</option>
     <option>2017</option>
     <option>2018</option>
   </select>  
   <select type="text" class="text1" name="month">
     <option></option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
     <option>11</option>
     <option>12</option>
   </select>
   </form>
   </div>
  </div><!--row-->
  </div><!--container-->
  
  <div class="container">
    <div class="jingli_button">
  <button type="submit" class="btn btn-success btn-sm">+添加教育经历</button>
    </div>
  </div>
    </div><!--.jingli_add-->
  </div><!--.jumbotron-->
 </div><!--.col-->

    </div><!-- ./row-->

    </div><!--./container-->
    
</div> <!-- panel -->  
  </div><!--expand-->
 
  <div role="tabpanel" class="tab-pane fade in" id="friends">

  <div class="panel panel-default">
   <div class="panel-body ren-title">
 <p>成为好友，可以免费发私信哦~</p>
  </div><!-- /.panel-body -->
     
  <ul class="ren">
      <div class="row">  
          <li class="col-md-2 ren-img">   
              <div class="img"><img class="tinyFace" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
         </li>
          <li class="col-md-6 ren-1">
                <div  class="ren-name">娇娇</div>
                 <div class="ren-location">北京 海淀区</div>
                 <br>
        
              <div  class="ren-edu">教育背景：生物医药专业</div>
              <div  class="ren-xueli">|博士后|&nbsp &nbsp </div>
              <div  class="ren-school">英国曼彻斯特大学、英国剑桥大学</div>
              <div  class="ren-company">曾就职于 英国曼彻斯特大学&nbsp </div>
              <div  class="ren-zhiwei">博士后研究员</div>
         </li>
          <li  class="col-md-3 ren-3">              
                  <button type="button"  class="btn btn-light">发私信</button>
                     
                  <br>
                            	<a title="取消关注"  href="#">取消关注</a>
                                <a>|</a>
                                <a title="加入黑名单">加入黑名单</a> 
                                          
          </li>
         </div><!--./row --> 
        </ul>
        
        <ul class="ren">
      <div class="row">  
          <li class="col-md-2 ren-img">   
              <div class="img"><img class="tinyFace" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
         </li>
          <li class="col-md-6 ren-1">
                <div  class="ren-name">娇娇</div>
                 <div class="ren-location">北京 海淀区</div>
                 <br>
        
              <div  class="ren-edu">教育背景：生物医药专业</div>
              <div  class="ren-xueli">|博士后|&nbsp &nbsp </div>
              <div  class="ren-school">英国曼彻斯特大学、英国剑桥大学</div>
              <div  class="ren-company">曾就职于 英国曼彻斯特大学&nbsp </div>
              <div  class="ren-zhiwei">博士后研究员</div>
         </li>
          <li  class="col-md-3 ren-3">              
                  <button type="button"  class="btn btn-light">发私信</button>
                     
                  <br>
                            	<a title="取消关注"  href="#">取消关注</a>
                                <a>|</a>
                                <a title="加入黑名单">加入黑名单</a> 
                                          
          </li>
         </div><!--./row --> 
        </ul>

</div> <!-- panel -->  
 </div><!-- friends!-->
 
  
 <div role="tabpanel" class="tab-pane fade in" id="concerned">  
  <div class="panel panel-default">
   <div class="panel-body ren-title">
 <p>成为好友，可以免费发私信哦~</p>
  </div><!-- /.panel-body -->
     
  <ul class="ren">
      <div class="row">  
          <li class="col-md-2 ren-img">   
              <div class="img"><img class="tinyFace" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
         </li>
          <li class="col-md-6 ren-1">
                <div  class="ren-name">娇娇</div>
                 <div class="ren-location">北京 海淀区</div>
                 <br>
        
              <div  class="ren-edu">教育背景：生物医药专业</div>
              <div  class="ren-xueli">|博士后|&nbsp &nbsp </div>
              <div  class="ren-school">英国曼彻斯特大学、英国剑桥大学</div>
              <div  class="ren-company">曾就职于 英国曼彻斯特大学&nbsp </div>
              <div  class="ren-zhiwei">博士后研究员</div>
         </li>
          <li  class="col-md-3 ren-3">              
                  <button type="button"  class="btn btn-light">发私信</button>
                     
                  <br>
                            	<a title="取消关注"  href="#">取消关注</a>
                                <a>|</a>
                                <a title="加入黑名单">加入黑名单</a> 
                                          
          </li>
         </div><!--./row --> 
        </ul>
        
        <ul class="ren">
      <div class="row">  
          <li class="col-md-2 ren-img">   
              <div class="img"><img class="tinyFace" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
         </li>
          <li class="col-md-6 ren-1">
                <div  class="ren-name">娇娇</div>
                 <div class="ren-location">北京 海淀区</div>
                 <br>
        
              <div  class="ren-edu">教育背景：生物医药专业</div>
              <div  class="ren-xueli">|博士后|&nbsp &nbsp </div>
              <div  class="ren-school">英国曼彻斯特大学、英国剑桥大学</div>
              <div  class="ren-company">曾就职于 英国曼彻斯特大学&nbsp </div>
              <div  class="ren-zhiwei">博士后研究员</div>
         </li>
          <li  class="col-md-3 ren-3">              
                  <button type="button"  class="btn btn-light">发私信</button>
                     
                  <br>
                            	<a title="取消关注"  href="#">取消关注</a>
                                <a>|</a>
                                <a title="加入黑名单">加入黑名单</a> 
                                          
          </li>
         </div><!--./row --> 
        </ul>
     <ul class="ren">
      <div class="row">  
          <li class="col-md-2 ren-img">   
              <div class="img"><img class="tinyFace" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
         </li>
          <li class="col-md-6 ren-1">
                <div  class="ren-name">娇娇</div>
                 <div class="ren-location">北京 海淀区</div>
                 <br>
        
              <div  class="ren-edu">教育背景：生物医药专业</div>
              <div  class="ren-xueli">|博士后|&nbsp &nbsp </div>
              <div  class="ren-school">英国曼彻斯特大学、英国剑桥大学</div>
              <div  class="ren-company">曾就职于 英国曼彻斯特大学&nbsp </div>
              <div  class="ren-zhiwei">博士后研究员</div>
         </li>
          <li  class="col-md-3 ren-3">              
                  <button type="button"  class="btn btn-light">发私信</button>
                     
                  <br>
                            	<a title="取消关注"  href="#">取消关注</a>
                                <a>|</a>
                                <a title="加入黑名单">加入黑名单</a> 
                                          
          </li>
         </div><!--./row --> 
        </ul>
        
</div> <!-- panel -->  
  </div><!-- ./concerned -->
  
  <div role="tabpanel" class="tab-pane fade in" id="fans">  
  <div class="panel panel-default">
   <div class="panel-body ren-title">
 <p>成为好友，可以免费发私信哦~</p>
  </div><!-- /.panel-body -->
     
  <ul class="ren">
      <div class="row">  
          <li class="col-md-2 ren-img">   
              <div class="img"><img class="tinyFace" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
         </li>
          <li class="col-md-6 ren-1">
                <div  class="ren-name">娇娇</div>
                 <div class="ren-location">北京 海淀区</div>
                 <br>
        
              <div  class="ren-edu">教育背景：生物医药专业</div>
              <div  class="ren-xueli">|博士后|&nbsp &nbsp </div>
              <div  class="ren-school">英国曼彻斯特大学、英国剑桥大学</div>
              <div  class="ren-company">曾就职于 英国曼彻斯特大学&nbsp </div>
              <div  class="ren-zhiwei">博士后研究员</div>
         </li>
          <li  class="col-md-3 ren-3">              
                  <button type="button"  class="btn btn-light">发私信</button>
                     
                  <br>
                            	<a title="取消关注"  href="#">取消关注</a>
                                <a>|</a>
                                <a title="加入黑名单">加入黑名单</a> 
                                          
          </li>
         </div><!--./row --> 
        </ul>
        </div><!-- ./panel -->
        </div><!--./fans-->
       
   <div role="tabpanel" class="tab-pane fade in" id="concernedcomp">  
  <div class="panel panel-default">
   <div class="panel-body ren-title">
 <p>关注公司，随时获取最新招聘动态</p>
  </div><!-- /.panel-body --> 

  <ul class="comp">
      <div class="row">  
          <li class="col-md-4 comp-img">   
              <div class="img"><img class="comp-image" src="/apply/Public/image/我的人脉/u567.png" /></div>
          </li>
          <li class="col-md-6 ren-1">
                <div  class="comp-name">阿里巴巴(中国)有限公司</div>            
              <div  class="comp-prof">全部行业</div>
              <div  class="comp-type">外商独资·外企办事处 </div>
               <button type="button"  class="btn btn-light btn-sm comp-btn">取消关注</button>
          </li>       
       </div><!--./row --> 
     </ul>

  <ul class="comp">
      <div class="row">  
          <li class="col-md-4 comp-img">   
              <div class="img"><img class="comp-image" src="/apply/Public/image/我的人脉/u565.png" /></div>
          </li>
          <li class="col-md-6 ren-1">
                <div  class="comp-name">百度在线网络技术(北京)有限公司</div>                      
              <div  class="comp-prof">互联网/移动互联网/电子商务,IT服务/系统集成,计算机软件</div>
              <div  class="comp-type">外商独资·外企办事处 </div>           
               <button type="button"  class="btn btn-light btn-sm comp-btn">取消关注</button>
          </li>        
      </div><!--./row --> 
   </ul>
   
   <ul class="comp">
      <div class="row">  
          <li class="col-md-4 comp-img">   
              <div class="img"><img class="comp-image" src="/apply/Public/image/我的人脉/u580.jpg" /></div>
          </li>
          <li class="col-md-6 ren-1">
                <div  class="comp-name">北京京东世纪贸易有限公司</div>                     
              <div  class="comp-prof">互联网/移动互联网/电子商务 算机软件</div>
              <div  class="comp-type">其他 10000人以上人规模</div>           
               <button type="button"  class="btn btn-light btn-sm comp-btn">取消关注</button>
          </li>        
      </div><!--./row --> 
   </ul>
   
 </div><!-- ./panel -->
        </div><!--./concernedcomp-->

<div role="tabpanel" class="tab-pane fade in" id="follow">  
  <div class="panel panel-default">
   <div class="panel-body ren-title">
 <p>关注公司，随时获取最新招聘动态</p>
  </div><!-- /.panel-body --> 

 <ul class="comp">
      <div class="row">  
          <li class="col-md-4 comp-img">   
              <div class="img"><img class="comp-image" src="/apply/Public/image/我的人脉/u565.png" /></div>
          </li>
          <li class="col-md-6 ren-1">
                <div  class="comp-name">百度在线网络技术(北京)有限公司</div>                      
              <div  class="comp-prof">互联网/移动互联网/电子商务,IT服务/系统集成,计算机软件</div>
              <div  class="comp-type">外商独资·外企办事处 </div>           
               <button type="button"  class="btn  btn-sm comp-btn">取消关注</button>
               <button type="button"  class="btn  btn-sm comp-btn">发私信</button>
          </li>        
      </div><!--./row --> 
   </ul>
   
  <ul class="comp">
      <div class="row">  
          <li class="col-md-4 comp-img">   
              <div class="img"><img class="comp-image" src="/apply/Public/image/我的人脉/u567.png" /></div>
          </li>
          <li class="col-md-6 ren-1">
                <div  class="comp-name">阿里巴巴(中国)有限公司</div>            
              <div  class="comp-prof">全部行业</div>
              <div  class="comp-type">外商独资·外企办事处 </div>
               <button type="button"  class="btn  btn-sm comp-btn">取消关注</button>
               <button type="button"  class="btn  btn-sm comp-btn">发私信</button>
          </li>       
       </div><!--./row --> 
     </ul>
     
     
 </div><!-- ./panel -->
        </div><!--./follow-->


</div><!--tab-content-->

    </div><!-- ./row-->
  </div><!-- ./container-->
    
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                     <center>
                    <span>京ICP09083200号</span>     
                    <span>京ICP证070419号</span>   
                     <span>人才服务许可证：RC0280</span>  
                    <span>京公网安备11010802012824</span> 
                     </center>
                </div>
                
                 <div class="col-sm-12">
                     <center>
                    <span>Copyright©2015 trading13.com All Rights Reserved</span>         
                     </center>
                </div>
            </div>
        </div>
    </div><!-- copyright!-->


    
  </body>
</html>