<?php if (!defined('THINK_PATH')) exit();?>  <!--  袁路非 2015.4.3 -->
  <!DOCTYPE html>
  <html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>站内信</title>
    <link href="/apply/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/apply/Public/js/jquery-2.1.3.js"></script>
    <script src="/apply/Public/js/bootstrap.min.js"></script>
    <script src="/apply/Public/js/message.js"></script>
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
 #sixin2-all{
   width:60%;
 }
 .sixin2-fanhui{
   margin-bottom:10px;
 }
 .sixin2-input{
   width:75%;
   height:80px;
   margin-top:5px;

 }
 .sixin2-write{
   margin-left:70%;
   margin-top:10px;
 }

 .sixin2-ul {

   overflow:hidden;
   list-style:none;
 }
 .sixin2-img{
   width:55PX;
   height:55px;
   margin-right:5px;
 }

 .sixin2-face{
   width:50PX;
   height:50px;
 }
 .sixin2-who{
   float:left;
   font-weight: bold;
   font-size: 100%;
 }
 .sixin2-detail{
   font-weight: bold;
   font-size: 100%;
 }
 .sixin2-time{
   font-size:90%;
   color:#666;
   margin-top:10px;
 }
 .copyright{
   padding-top:20px;
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
    <a class="navbar-brand" href="<?php echo U('WebShow/indi_Home');?>"><img class="navimg1" alt="Brand" src="/apply/Public/image/站内信2/u42.png"></a>
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
            <li class="active"><a href="<?php echo U('WebShow/indi_webNews_show_all');?>"><img class="navimg2" alt="Brand" src="/apply/Public/image/站内信2/1_u297.png"></a></li>
            <li><a href="<?php echo U('WebShow/indi_personalfront');?>"><img class="navimg2" alt="Brand" src="/apply/Public/image/站内信2/2_u299.png"></a></li>
            <li><a href="#">加入收藏</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>


    <div class="container" id="sixin2-all"> 

      <div class="sixin2-fanhui">
        <a href="<?php echo U('WebShow/indi_webNews_show_all');?>">« 返回</a>
      </div>

      <div>
        <span class="">发私信给 </span>
        <span class=""><?php echo ($hisname); ?></span>：
      </div>

      <textarea class="sixin2-input" style="font-weight:normal"></textarea>

      <div class="sixin2-write">
        <button type="button"  class="btn btn-sm btn-primary">发送</button>
      </div>

<table>
      <?php if(is_array($list)): foreach($list as $key=>$item): ?><hr>
        <div class="sixin2-duihua">
         <ul class="sixin2-ul">
          <div class="row">  
            <li class="col-md-2 sixin2-img">   
              <div class="img"><img class="sixin2-face" src="/apply/Public/image/我的人脉/u231.jpg" /></div>
            </li>

            <li class="col-md-8 sixin-1">
              <!-- <div  class="sixin2-who"><a></a>:</div> -->
              <div class="sixin2-who"><a>
              <?php
 if($item['messagefromid']==$_SESSION['indiId']){ echo htmlentities("我"); } else { echo htmlentities("$hisname"); } ?></a>:</div>
              <!-- <div  class="sixin2-who"><a><?php echo ($myname); ?></a>:</div> -->
              <div class="sixin2-details"><?php echo ($item["messagecontent"]); ?></div>
              <div class="row">      
                <span  class="sixin2-time col-md-3" ><?php echo ($item["messagesendtime"]); ?></span>  
                <div class="col-md-4">
                </div>         
                <div class="col-md-5">
                 <a  href="#">回复</a>
                 <span>|</span>
                 <a  href="#">举报</a>
                 <span>|</span>
                 <a>删除</a> 
               </div>
             </div>                                 
           </li>                                     
         </div><!--./row --> 
       </ul>
       <hr>      
     </div><!-- ./sixin2-duihua--><?php endforeach; endif; ?>
</table>
<?php echo ($page); ?>






   
 </div><!-- ./ sixin2-all -->  

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