<?php if (!defined('THINK_PATH')) exit();?>  <!--  袁路非 2015.4.3 -->
  <!DOCTYPE html>
  <html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>找职位</title>
    <link href="/apply/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/apply/Public/js/areaselect.css" rel="stylesheet">
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
 #search .jumbotron{
   text-align:center;
   width:90%;
 }
 #result .panel{
   width:90%;}

   #page{
     width:20px;
     height:20px;	
   }
   #inputpage{
     margin-top:20px;
     margin-bottom:10px;
   }
   .table-hangye{
     overflow-x: hidden;
     overflow: scroll; 			 
     height:300px;
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
      <a class="navbar-brand" href="<?php echo U('WebShow/indi_Home');?>"><img class="navimg1" alt="Brand" src="/apply/Public/image/找职位/u42.png"></a>


      <div class="visible-xs nav-search">  
        <input type="text" class="form-control" placeholder="请输入职位关键字">          
      </div>  <!-- ./nav-search-->  
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">

        <li><a href="HOME.html">首页 <span class="sr-only">(current)</span></a></li>

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
            <li><a href="<?php echo U('WebShow/indi_webNews_show_all');?>"><img class="navimg2" alt="Brand" src="/apply/Public/image/找职位/1_u297.png"></a></li>
            <li><a href="<?php echo U('WebShow/indi_personalfront');?>"><img class="navimg2" alt="Brand" src="/apply/Public/image/找职位/2_u299.png"></a></li>
            <li><a href="#">加入收藏</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>


    <div class="container hidden-xs" id="search">
      <center>
        <div class="jumbotron">  
          <p>

            <form class="form-horizontal">

              <div class="form-group">
                <label for="关键词" class="col-md-2 control-label">关键词</label>
                <div class="col-md-2">
                  <select class="form-control">
                    <option>职位名</option>
                    <option>公司名</option>
                    <option>工作地点</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="inputPassword" placeholder="请输入公司名称给关键词">
                </div>
              </div>


              <div class="form-group">
                <label for="行业" class="col-md-2 control-label">行业</label>
                <div class="col-md-3">
                 <div class="input-group">
                  <input type="text" class="form-control" >
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#hangye1"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></button>
                  </span>
                </div><!-- /input-group -->

              </div>
            </div>


            <div class="form-group">
             <label for="地区" class="col-md-2 control-label">地区</label>
             <div class="col-md-9">
               <div class="demo-wrap">
                 <div class="col-md-3">
                  <input id="pr2" type="text" class=" form-control" placeholder="省份" />
                </div>
                <div class="col-md-3">
                  <input id="ci2" type="text" class=" form-control" placeholder="城市" />
                </div>
                <div class="col-md-3">
                  <input id="co2" type="text" class=" form-control" placeholder="县级" />
                </div>
              </div>
            </div>
            <!--引用jquery-->
            <script type="text/javascript" src="js/jquery.js"></script>
            <!--引用地区选择插件-->
            <script type="text/javascript" src="js/data.js"></script>
            <script type="text/javascript" src="js/areaselect.js"></script>
            <script type="text/javascript">
            new locationCard({
              ids: ['pr1', 'ci1', 'co1']
            }).init();
            new locationCard({
              ids: ['pr2', 'ci2', 'co2']
            }).init();
            </script>
          </div>     



          <div class="form-group">
            <label for="企业规模" class="col-md-2 control-label">企业规模</label>
            <div class="col-md-2">
              <select class="form-control">
                <option></option>
                <option>20人以下</option>
                <option>20-50人</option>
                <option>50-100人</option>
                <option>100-500人</option>
                <option>500-1000人</option>
                <option>1000人以上</option>
              </select>
            </div>

            <label for="企业性质" class="col-md-2 control-label">企业性质</label>
            <div class="col-md-2">
              <select class="form-control">
                <option></option>
                <option>国企</option>
                <option>民营</option>
                <option>外商独资</option>
                <option>合资</option>
                <option>事业单位</option>
                <option>国家机关</option>
                <option>其他</option>
              </select>
            </div>

          </div>

        </form>

      </p>
      <p><center><a class="btn btn-warning" href="<?php echo U('WebSearch/searchJob');?>" role="button">&nbsp&nbsp搜索&nbsp&nbsp </a> &nbsp&nbsp&nbsp&nbsp&nbsp 
      </center></p>
    </div><!-- /.junbotron -->
  </center>

</div><!-- /.container -->



<div class="container" id="result">
  <center>
    <div class="panel panel-default">
      <div class="panel-body hidden-xs">

       <div class="form-group">
        <label for="关键词" class="col-lg-5 control-label">共为您找到<a id="numofjob">10000+ </a>职位</label>

        <div class="col-md-2">
          <select class="form-control">
            <option>职位类型不限</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
            <option>一月内发布</option>
            <option>十五天内发布</option>
            <option>七天内发布</option>
            <option>当日发布</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
            <option>月薪范围不限</option>
            <option>30K以上</option>
            <option>20K-30K</option>
            <option>15K-20K</option>
            <option>10K-15K</option>
            <option>5K-10K</option>
            <option>3K-4K</option>
            <option>3k以下</option>
          </select>
        </div>

      </div><!-- form -->

    </div><!-- /.panel-body -->

    
    <div class="table-responsive">
      <table class="table table-striped table-hover">

        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u201.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u199.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u203.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u205.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u207.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u213.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u205.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u207.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
        <tr>
          <td> <a href="#"><img class="tableimg" alt="Brand" src="/apply/Public/image/找职位/u199.png"></a></td>
          <td>
            <p>海外市场产品经理</p>
            <p>北京百度网讯科技有限公司</p>
          </td>
          <td>北京</td>
          <td class="hidden-xs">2015.4.7</td>
          <td class="hidden-xs">月薪8K-10K</td>
        </tr>
      </table>
    </div> 

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

            </div><!-- col-md-3-->

            <div class="col-md-2" id="inputpage">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">跳转到</button>
                </span>
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">页</button>
                </span>
              </div><!-- /input-group -->







            </div><!--./ col-md-4 -->

          </div><!-- /.row!-->
        </center>
      </div>
    </nav>

  </div><!-- /.panel-->
</center>
</div><!-- /.container ! -->


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

<div class="modal fade" id="hangye1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">选择行业分类</h4>
      </div>
      <div class="modal-body">
        最多可以选择三项
        <div class="table-hangye">
          <table class="table table-bordered">
            <tr>
              <td></td>
              <td><div class="checkbox"><label><input type="checkbox">全部行业</label></div> 
              </td>
            </tr>
            <tr>
              <td>互联网·游戏·软件</td>
              <td> 
                <div class="checkbox"><label><input type="checkbox">互联网/移动互联网/电子商务</label></div>
                <div class="checkbox"><label><input type="checkbox">网络游戏</label></div>
                <div class="checkbox"><label><input type="checkbox">计算机软件</label></div>
                <div class="checkbox"><label><input type="checkbox">IT服务/系统集成</label></div>
              </td>
            </tr>
            <tr>
              <td>金融</td>
              <td> 
                <div class="checkbox"><label><input type="checkbox">银行</label></div>
                <div class="checkbox"><label><input type="checkbox">保险</label></div>
                <div class="checkbox"><label><input type="checkbox">基金/期货/证券/投资</label></div>
                <div class="checkbox"><label><input type="checkbox">会计/审计</label></div>
                <div class="checkbox"><label><input type="checkbox">信托/担保/拍卖/典当</label></div>
              </td>
            </tr>
            <tr>
              <td>房地产·建筑·物业</td>
              <td> 
                <div class="checkbox"><label><input type="checkbox">房地产开发/建筑/建材/工程</label></div>
                <div class="checkbox"><label><input type="checkbox">规划/设计/装潢</label></div>
                <div class="checkbox"><label><input type="checkbox">房地产服务（物业管理/地产经纪）</label></div>

              </td>
            </tr>
          </table>
        </div>
      </div><!--./ modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" id="zhineng">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">选择职能</h4>
      </div>
      <div class="modal-body">
        最多可以选择三项
        <div class="table-hangye">
          <table class="table table-bordered">
            <tr>
              <td></td>
              <td><div class="checkbox"><label><input type="checkbox">全部行业</label></div> 
              </td>
            </tr>
            <tr>
              <td>互联网·游戏·软件</td>
              <td> 
                <div class="checkbox"><label><input type="checkbox">互联网/移动互联网/电子商务</label></div>
                <div class="checkbox"><label><input type="checkbox">网络游戏</label></div>
                <div class="checkbox"><label><input type="checkbox">计算机软件</label></div>
                <div class="checkbox"><label><input type="checkbox">IT服务/系统集成</label></div>
              </td>
            </tr>
            <tr>
              <td>金融</td>
              <td> 
                <div class="checkbox"><label><input type="checkbox">银行</label></div>
                <div class="checkbox"><label><input type="checkbox">保险</label></div>
                <div class="checkbox"><label><input type="checkbox">基金/期货/证券/投资</label></div>
                <div class="checkbox"><label><input type="checkbox">会计/审计</label></div>
                <div class="checkbox"><label><input type="checkbox">信托/担保/拍卖/典当</label></div>
              </td>
            </tr>
            <tr>
              <td>房地产·建筑·物业</td>
              <td> 
                <div class="checkbox"><label><input type="checkbox">房地产开发/建筑/建材/工程</label></div>
                <div class="checkbox"><label><input type="checkbox">规划/设计/装潢</label></div>
                <div class="checkbox"><label><input type="checkbox">房地产服务（物业管理/地产经纪）</label></div>

              </td>
            </tr>
          </table>
        </div>
      </div><!--./ modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" id="diqu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">选择地区</h4>
      </div>
      <div class="modal-body">
        <div class="demo-wrap">
          <input id="pr1" type="text" placeholder="省份" />
          <input id="ci1" type="text" placeholder="城市" style="display: none" />
          <input id="co1" type="text" placeholder="县级" style="display: none" />
          <br /><br />
          <input id="pr2" type="text" placeholder="省份" />
          <input id="ci2" type="text" placeholder="城市" />
          <input id="co2" type="text" placeholder="县级" />
        </div>
        <!--引用jquery-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!--引用地区选择插件-->
        <script type="text/javascript" src="js/data.js"></script>
        <script type="text/javascript" src="js/areaselect.js"></script>
        <script type="text/javascript">
        new locationCard({
          ids: ['pr1', 'ci1', 'co1']
        }).init();
        new locationCard({
          ids: ['pr2', 'ci2', 'co2']
        }).init();
        </script>
      </div><!--./ modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



</body>
</html>