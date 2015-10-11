<?php if (!defined('THINK_PATH')) exit();?>  <!--  袁路非 2015.4.16  个人界面首页-->
  <!DOCTYPE html>
  <html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人界面首页</title>
    <link href="/apply/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/apply/Public/js/jquery-2.1.3.js"></script>
    <script src="/apply/Public/js/bootstrap.min.js"></script>
    <style>

    .navimg{
     width:30PX;
     height:30px;
   }
   body{
     padding-top: 70px;
   }
   #shouye-all{
     width:80%;
   }
   .jinli{
    overflow:hidden;
    list-style:none;
    background-color:#999;
  }
  .jinli-img{
    padding-top:80px;
    margin-left:-20px;
  }
  .wanchengdu{
    position:absolute;
    left:5px;
    top:100px;
    font-size:290%
  }

  .jingli_add{/*整块"完善经历"*/
  border:3px solid;
  border-color:#FFF;
  width:98%;
  margin-top:15px;
  padding:10px;

}

.modul_school{/*学校名称模块*/
  margin-top:10px;
  margin-bottom:10px;
}
.school_list{/*学校名称列表*/
  border:3px solid;
  border-color:#FFF;
  overflow-y:scroll;
  list-style:none;
  width:80%;
  padding-left:15px;/*文字左边距*/
  margin-left:20px;/*滚动列表左边距*/
  height:80px;
}
.jinli-lable{
 float:left; 
 display:inline;
 margin-left:15px;
}

.jinli-lable-zhuanye{
 float:left; 
 display:inline;
 margin-left:30px;
}
.jingli_button{/*添加教育经历按钮*/
  margin-left:150px;
  margin-top:10px;
  width:200%;
}
.jinli-btn{
	width:50px;
}
.carousel-img{
	width:800px;
	height:500px;
}
.jianli{
	border:black solid;
	border-width:5px;
	margin-bottom:20px;
}
.jianli-img{
 margin:10px;
 width:80px;
 height:80px;
 float:left;
}
.jianli-name{
 font-size:20px;
 font-weight:bold;
 margin-top:10px;
 margin-left:10px;
}
.jianli-zhuanye{
 margin-top:10px;
 margin-left:10px;
}
.jianli-xuewei{
 margin-bottom:20px;
 margin-left:10px;
}
.jianli-guojia{
 margin-left:30px;
 float:left;
}
.jianli-zhiwei{
 margin-left:10px;
 float:left;
 margin-right:10px;
}
.jianli-worktime{		
}
.jianli-recentlyjob{
 margin-left:30px;
 margin-bottom:10px;
}
.jianli-31{
 margin-left:30px;
 margin-right:10px;
 float:left;
}
.jianli-32{
 margin-left:10px;
 margin-right:10px;
 float:left;
}
.jianli-33{
  margin-left:10px;
  margin-right:10px;
  float:left;
}
.jianli-34{
 margin-left:10px;

}
.jianli-3-img{
 margin-left:10px;
 margin-right:10px;
 float:left;
}
.jianli-num{
 font-size:20px;
 color:#F00;
}

.geren-vedio{		
 margin-bottom:20px;					
}
.geren-xihan{
 margin-top:40px;
 border-top:black dashed;
 border-width:5px;	
}
.geren-deliver{
 margin-top:40px;
 border-top:black dashed;
 border-width:5px;	
}
.geren-num{
 margin-left:20px;
 margin-top:5px;
 width:40px;
 height:40px;
 font-size:20px;
 color:#F00;
 float:left;
}

.geren-title{
  margin-left:20px;
}
#geren-img1{
 width:330px;
 height:200px;
 margin-bottom:30px;
 margin-top:30px;
}
#geren-img2{
 width:160px;
 height:120px;
}
#geren-img3{
 width:160px;
 height:120px;
}


#geren-img2-follow{
 width:160px;
 height:80px;
 background-image:url(image/u602.png);
 color:#FFF;
 font-size:13px;
 padding:5px;	
 float:left;	
}
#geren-img3-follow{
 width:160px;
 height:80px;
 background-image:url(image/u600.png);	
 color:#FFF;
 font-size:13px;
 padding:5px;
 float:left;
 margin-left:4px;	
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
    <a class="navbar-brand" href="#"><img class="navimg" alt="Brand" src="/apply/Public/image/u42.png"></a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav ">

      <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">找职位<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">搜寻职位</a></li>
          <li class="divider"></li>
          <li><a href="#">我投递的职位</a></li>
          <li class="divider"></li>
          <li><a href="#">我收藏的职位</a></li>
          <li class="divider"></li>
          <li><a href="#">职位订阅</a></li>
        </ul>
      </li><!-- dropdown ！-->

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">人脉圈<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">海外校友</a></li>
          <li class="divider"></li>
          <li><a href="#">人脉圈</a></li>

        </ul>
      </li><!-- dropdown ！-->

      <li><a href="#">知名企业</a></li>
      <li><a href="#">视频面试</a></li>
      <li><a href="#">海归路上</a></li>

             <!--    
               <form class="navbar-form navbar-left" role="search">
             <div class="form-group">  
              <input type="text" class="form-control" placeholder="Search">
            </div>
             </form>
                
                <li><a href="#"><img class="navimg" alt="Brand" src="home/1_u297.png"></a></li>
                 <li><a href="#"><img class="navimg" alt="Brand" src="home/2_u299.png"></a></li>
                 !-->

               </ul>
               <ul class="nav navbar-nav navbar-right">
                <li><a href="#">加入收藏</a></li>
              </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container 标签页 -->
        </nav>



        <div class="container" id="shouye-all">
         <div class="row">
           <div class="col-md-8">

            <!--完善经历-->

            <div class="jumbotron text-left jinli">

              <div class="row">   

               <div class="col-md-2">
                 <div class="jinli-img">
                  <img class="jinli-img1" src="/apply/Public/image/u304.png" alt="Brand">      
                  <div class="wanchengdu"><a><?php echo ($applicant["resumeprogress"]); ?>%</a></div>

                  <div>抓紧完善，暂时还不会被HR看到哦！</div>
                </div>
              </div><!--./col-md-4-->

              <!--经历添加-->   
              <div class="col-md-10">
                <div class="jingli_add">

                  <!--下拉选择学历-->
                  <label type="text" class="jinli-lable">学历:
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
                  <label type="text" class="jinli-lable">学校地点:
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


                <!--学校名称-->
                <div class="modul_school">
                  <label type="text" class="jinli-lable">学校名称：</label> 
                  <ul class="school_list">
                    <li>哈佛大学</li>
                    <li>哈佛大学</li>
                    <li>哈佛大学</li>
                    <li>哈佛大学</li>
                    <li>哈佛大学</li>
                    <li>哈佛大学</li>
                  </ul>
                </div><!--.modul_school-->

                <form>
                  <div class="row">   
                   <label type="text" class="jinli-lable-zhuanye">专业名称：</label>
                   <div class="col-md-7"> 
                     <input type="text" class="form-control" name="zhuanye">
                   </div> 
                 </div>
               </form> 

               <br>

               <div class="row"> 
                 <div class="col-md-10 col-sm-12">
                   <form>
                     <label type="text" class="jinli-lable">就读时间：</label>

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


             <div class="jingli_button">
              <button type="submit" class="btn  btn-warning jinli-btn">提交</button>
            </div>

          </div><!--.jingli_add-->
        </div><!-- ./col-md-8 -->
      </div><!-- ./row-->


    </div><!--.jumbotron-->


    <div class="panel panel-default">
      <div class="panel-body">

       <div class="form-group">
        <label  class="col-lg-5 control-label">推荐职位</label>

      </div><!-- form -->

    </div><!-- /.panel-body -->

    
    <div class="table-responsive">
      <table class="table table-striped table-hover">

        <tr>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td>2015.4.7</td>
          <td>月薪8K-10K</td>
        </tr>

        <tr>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td>2015.4.7</td>
          <td>月薪8K-10K</td>
        </tr>

        <tr>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td>2015.4.7</td>
          <td>月薪8K-10K</td>
        </tr>

      </table>
    </div> <!-- ./table-responsive-->

    <nav>
      <div class="container">
        <center>
          <div class="row">

            <div class="col-md-3">
            </div>

            <div class="col-md-3">
              <ul class="pagination ">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>   
              </ul>
            </div><!-- ./col-md-3 -->

          </div><!-- /.row!-->
        </center>
      </div><!--./container -->
    </nav>

  </div><!-- /.panel-->
  
  
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/apply/Public/image/u460.jpg" alt="blank" class="carousel-img">
        <div class="carousel-caption">
          支付宝"花呗"上线，会受到广大消费者青睐吗？
        </div>
      </div>

      <div class="item">
        <img src="/apply/Public/image/u462.png" alt="blank" class="carousel-img">
        <div class="carousel-caption">
         教育部发布《2014中国留学回国就业蓝皮书》！
       </div>
     </div>

     <div class="item">
      <img src="/apply/Public/image/u464.jpg" alt="blank" class="carousel-img">
      <div class="carousel-caption">
        回顾自己的2014
      </div>
    </div>
    
    <div class="item">
      <img src="/apply/Public/image/u466.png" alt="blank" class="carousel-img">
      <div class="carousel-caption">
       畅想自己的2015
     </div>
   </div>

 </div><!-- ./carousel-inner-->

 <!-- Controls -->
 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>


</div><!-- ./col-md-8-->

<div class="col-md-4">

  <div class="jianli">
    <img  src="/apply/Public/image/u231.png" alt="..." class="jianli-img">

    <div class="jianli-1">
      <div class="jianli-name"><?php echo ($applicant["applicantname"]); ?></div>
      <div class="jianli-zhuanye"><?php echo ($applicant["educationmajor"]); ?></div>
      <div class="jianli-xuewei"><?php echo ($applicant["educationschoolname"]); ?> <?php echo ($applicant["educationdegree"]); ?></div>
    </div>

    <div class="jianli-2">
      <div class="jianli-guojia">美国(暂空)</div>
      <div class="jianli-zhiwei"><?php echo ($applicant["workjob"]); ?></div>
      <div class="jianli-worktime"><?php echo ($applicant["worktime"]); ?></div>
      <div class="jianli-recentlyjob">最近的公司:<?php echo ($applicant["workcompany"]); ?></div>
    </div>

    <div class="jianli-3">

      <div class="jianli-31">
        <div class="jianli-num"><?php echo ($applicant["applicantdelievernum"]); ?></div>
        投递
      </div><!--./jianli-31-->
      <img src="/apply/Public/image/u247_line.png" class="jianli-3-img">


      <div class="jianli-32">
        <div class="jianli-num"><?php echo ($applicant["applicantinterviewnum"]); ?></div>
        面试
      </div><!--./jianli-32-->
      <img src="/apply/Public/image/u247_line.png" class="jianli-3-img">


      <div class="jianli-33">
        <div class="jianli-num">0</div>
        好友
      </div><!--./jianli-33-->
      <img src="/apply/Public/image/u247_line.png" class="jianli-3-img">


      <div class="jianli-34">
        <div class="jianli-num">0</div>
        发言
      </div><!--./jianli-34-->

    </div><!--./jianli-3 -->

  </div><!--./ jianli -->

  <div class="geren-vedio">
    <embed src="http://player.youku.com/player.php/sid/XMzI2NTc4NTMy/v.swf" width="330" height="275"
    type="application/x-shockwave-flash">
  </embed>
</div>



<div class="geren-xihan">
  <h3 class="geren-title"> | 谁稀罕我</h3>
  <div class="geren-num"><?php echo ($applicant["applicantchecknum"]); ?></div>
  <div><a><?php echo ($applicant["applicantchecknum"]); ?></a>个HR 查看过你的简历</div>
  <div>刷新简历能增加被查看概率</div> 
  <br>
  <div class="geren-num">0</div>
  <div><a>0</a>家企业发出了面试邀请</div>
  <div>完善简历能增加被邀请概率</div> 

</div>



<div class="geren-deliver">
  <h3 class="geren-title"> | 每日投递数量 </h3>
  <div class="geren-num"><?php echo ($deliverNum); ?></div>
  <div>今日已投递<a><?php echo ($deliverNum); ?></a>个职位</div>
  <div>每日最多可投递20个职位</div>
</div>



<div>
  <div>
    <img src="/apply/Public/image/u266.jpg" alt="blank" id="geren-img1">
  </div>

  <div>              
    <img src="/apply/Public/image/u610.png" alt="blank" id="geren-img2">
    <img src="/apply/Public/image/u606.jpg" alt="blank" id="geren-img3">      
  </div>

  <div class="geren-img-follow"> 
    <div id="geren-img2-follow">          
      您觉得大数据对于阿里而言，在电商圈有哪些发力点？
    </div>
    <div id="geren-img3-follow">  
      新东方坚持地面拓展，是给在线教育泼冷水吗？
    </div>

  </div><!-- ./geren-img-follow -->
</div>       
</div><!-- ./ col-md-4-->

</div><!-- ./row -->
</div><!--./container -->

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