<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>

<html lang="en">

<head>

<title>龙子网</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/Public/Admin/css/bootstrap.min.css" />

<link rel="stylesheet" href="/Public/Admin/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="/Public/Admin/css/colorpicker.css" />

<link rel="stylesheet" href="/Public/Admin/css/datepicker.css" />

<link rel="stylesheet" href="/Public/Admin/css/uniform.css" />

<link rel="stylesheet" href="/Public/Admin/css/select2.css" />

<link rel="stylesheet" href="/Public/Admin/css/matrix-style.css" />

<link rel="stylesheet" href="/Public/Admin/css/matrix-media.css" />

<link rel="stylesheet" href="/Public/Admin/css/bootstrap-wysihtml5.css" />

<link href="/Public/Admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="/Public/Admin/js/jquery.min.js"></script> 

</head>

<body>



<!--Header-part-->

<div id="header">

  <h1><a href="dashboard.html">龙子网</a></h1>

</div>

<!--close-Header-part--> 



<!--top-Header-menu-->





<!--start-top-serch-->

<!--sidebar-menu-->



<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>

  <ul>

    <li><a href="/index.php/Admin/Index/index"><i class="icon icon-home"></i> <span>后台首页</span></a> </li>



    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>用户管理</span> <span class="label label-important"></span></a>

      <ul>

        <?php if($_SESSION['statu'] == 1): ?><li><a href="/index.php/Admin/User/userManager">管理员</a></li>
            <li><a href="/index.php/Admin/User/userManagerAdd">添加管理员</a></li>
            <li><a href="/index.php/Admin/User/userList">网站用户</a></li>

        <?php else: endif; ?>

        <li><a href="/index.php/Admin/User/userinfo">个人信息</a></li>

      </ul>

    </li>


    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>助学金</span> <span class="label label-important"></span></a>
        <ul>
            <li><a href="/index.php/Admin/Grants/index">助学金申请</a></li>
        </ul>
    </li> 



  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>提现</span> <span class="label label-important"></span></a>
      <ul>
          <!-- <li><a href="/index.php/Admin/shipin/add">添加视频</a></li> -->
          <li><a href="/index.php/Admin/Deposit/index">提现申请</a></li>
          
      </ul>
  </li>
    

  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>企业</span> <span class="label label-important"></span></a>
      <ul>
        <!-- <li><a href="/index.php/Admin/Company/add">添加企业</a></li> -->
        <li><a href="/index.php/Admin/Company/index">企业信息</a></li>
        <!-- <li><a href="/index.php/Admin/Lvyfenlei/add">添加分类</a></li> -->
        <!-- <li><a href="/index.php/Admin/Lvyfenlei/index">分类管理</a></li> -->
        <!-- <li><a href="/index.php/Admin/lvyou/addglue">添加攻略游记</a></li> -->
        <!-- <li><a href="/index.php/Admin/lvyou/glueindex">攻略游记信息</a></li> -->
      </ul>

  </li>





  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>资源</span> <span class="label label-important"></span></a>
      <ul>
        <!-- <li><a href="/index.php/Admin/shijian/add">发布实践</a></li> -->
        <li><a href="/index.php/Admin/Release/index">资源信息</a></li>
        <!-- <li><a href="/index.php/Admin/ershou/add">发布二手</a></li> -->
        <!-- <li><a href="/index.php/Admin/ershou/index">二手信息</a></li> -->
        <!-- <li><a href="/index.php/Admin/yule/add">发布娱乐</a></li> -->
        <!-- <li><a href="/index.php/Admin/yule/index">娱乐信息</a></li> -->
        <!-- <li><a href="/index.php/Admin/zufang/add">发布租房</a></li> -->
        <!-- <li><a href="/index.php/Admin/zufang/index">租房信息</a></li> -->
      </ul>
  </li>


   <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>消息</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Info/index">官方消息</a></li>
      </ul>
  </li>


  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>分类</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Fenlei/index">分类</a></li>
        <!-- <li><a href="/index.php/Admin/Fenlei/add">添加分类</a></li> -->
      </ul>
    </li>
    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>新闻</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Xinwen/index">新闻管理</a></li>
        <!-- <li><a href="/index.php/Admin/Xinwen/add">添加新闻</a></li> -->
        <li><a href="/index.php/Admin/Xinwen/select">未审核</a></li>
        <li><a href="/index.php/Admin/Xinwen/hnnew">马拉松</a></li>
      </ul>
    </li>
    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>体育</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Tiyu/index">体育新闻管理</a></li>
        <!-- <li><a href="/index.php/Admin/Tiyu/add">添加体育新闻</a></li> -->
        <li><a href="/index.php/Admin/Ball/index">足球频道</a></li>
        <!-- <li><a href="/index.php/Admin/Ball/add">添加足球信息</a></li> -->
        <li><a href="/index.php/Admin/Mingshi/index">查看名师</a></li>
        <!-- <li><a href="/index.php/Admin/Mingshi/add">添加名师</a></li> -->
        <li><a href="/index.php/Admin/Star/index">查看明星</a></li>
        <!-- <li><a href="/index.php/Admin/Star/add">添加明星</a></li> -->
        <li><a href="/index.php/Admin/Saishi/index">赛事公告</a></li>
        <!-- <li><a href="/index.php/Admin/Saishi/add">添加公告</a></li> -->
        <li><a href="/index.php/Admin/Zhishi/index">体育知识</a></li>
        <!-- <li><a href="/index.php/Admin/Zhishi/add">添加知识</a></li> -->
      </ul>
    </li>
    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>文学</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Wenxue/index">文学管理</a></li>
        <!-- <li><a href="/index.php/Admin/Wenxue/add">添加文章</a></li> -->
        <li><a href="/index.php/Admin/Shetuan/index">社团管理</a></li>
        <li><a href="/index.php/Admin/Wenxue/select">未审核</a></li>
        <!-- <li><a href="/index.php/Admin/Shetuan/add">添加社团</a></li> -->
        <li><a href="/index.php/Admin/Writer/index">作家管理</a></li>
        <!-- <li><a href="/index.php/Admin/Writer/add">添加作家</a></li> -->
      </ul>
    </li>

    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>图册</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Tuce/index">图册管理</a></li>
        <li><a href="/index.php/Admin/Tuce/add">添加图册</a></li>
      </ul>
    </li>

    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>教育培训</span> <span class="label label-important"></span></a>
        <ul>
            <!-- <li><a href="/index.php/Admin/pxjigou/add">添加培训机构</a></li> -->
            <li><a href="/index.php/Admin/pxjigou/index">培训机构信息</a></li>

           <!--  <li><a href="/index.php/Admin/peixun/add">添加培训</a></li>
            <li><a href="/index.php/Admin/peixun/index">培训信息</a></li> -->

            <!-- <li><a href="/index.php/Admin/pxfenlei/add">添加分类</a></li> -->
            <li><a href="/index.php/Admin/pxfenlei/index">分类管理</a></li>
        </ul>
    </li> 




</ul>

</div>



<!--sidebar-menu-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="#" class="tip-bottom" data-original-title="回到后台"><i class="icon-home"></i> 企业详情</a> <a href="#" class="tip-bottom">企业详情</a> <a href="#" class="current">企业详情</a> </div>
  <h1>企业详情</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <a href="/index.php/Admin/Company/index"><h4>返回上一级</h4></a>
        </div>
        <div class="widget-content nopadding">
          <form action ="/index.php/Admin/Good/xinq/id/<?php echo ($list[0][id]); ?>" method="post" class="form-horizontal" enctype="multipart/form-data" >
            <div class="control-group">
              <label class="control-label">企业名称</label>
              <div class="controls controls-row">
                <input type="text" placeholder="" name="name" value="<?php echo ($list[0][title]); ?>">
              </div>
            </div>
            

            <div class="control-group">
              <label class="control-label">类型</label>
              <div class="controls controls-row">
                <input type="text" name="price" value="<?php echo ($list[0][classify]); ?>">  
              </div>
            </div>

              <div class="control-group">
                <label class="control-label">工资</label>
                <div class="controls controls-row">
                  <input type="text" name="acttime" value="<?php echo ($list[0][wage]); ?>"> 
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">地址</label>
                <div class="controls controls-row">
                  <input type="text" name="deadline" value="<?php echo ($list[0][town]); echo ($list[0][address]); ?>"> 
                </div>
              </div>

            <div class="control-group">
              <label class="control-label">招聘人数</label>
              <div class="controls controls-row">
                <input type="text" name="address" value="<?php echo ($list[0][total]); ?>"> 
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">联系电话</label>
              <div class="controls controls-row">
                <input type="text" name="zanzhushang" value="<?php echo ($list[0][tel]); ?>">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">QQ</label>
              <div class="controls controls-row">
                <input type="text" name="total" value="<?php echo ($list[0][qq]); ?>">
              </div>
            </div>


       <!--  <div class="control-group">
          <label class="control-label"><h4>企业介绍</h4></label>
          <div class="row-fluid" style="width:968px;  margin:0px 20px 0px 100px;" >
          <div class="widget-box">
            <div class="widget-title" style="margin:0px 0px 0px 0px;"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>企业介绍</h5>
            </div>
                <script id="container3">3<?php echo ($list[0][content3]); ?></script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.all.js"></script>
                <script type="text/javascript">
                    var ue3 = UE.getEditor('container3');
                </script>
          </div>
          </div> 
        </div>

        <div class="control-group">
          <label class="control-label"><h4>其他说明</h4></label>
          <div class="row-fluid" style="width:968px;  margin:0px 20px 0px 100px;" >
          <div class="widget-box">
            <div class="widget-title" style="margin:0px 0px 0px 0px;"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>其他说明</h5>
            </div>
                <script id="container4">4<?php echo ($list[0][content4]); ?></script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.all.js"></script>
                <script type="text/javascript">
                    var ue4 = UE.getEditor('container4');
                </script>
          </div>
          </div> 
        </div>

        <div class="control-group">
          <label class="control-label"><h4>招聘岗位</h4></label>
          <div class="row-fluid" style="width:968px;  margin:0px 20px 0px 100px;" >
          <div class="widget-box">
            <div class="widget-title" style="margin:0px 0px 0px 0px;"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>招聘岗位</h5>
            </div>
                <script id="container5" >5<?php echo ($list[0][content5]); ?></script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>             
                <script type="text/javascript" src="/Public/ueditor/ueditor.all.js"></script>             
                <script type="text/javascript">
                    var ue5 = UE.getEditor('container5');
                </script>
          </div>
          </div> 
        </div>  -->
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div></div>






<!--Footer-part-->

<div class="row-fluid">

  <div id="footer" class="span12"> 2016 &copy; Today <a href="http://themedesigner.in/">我们要一步一步迈向巅峰</a> </div>

</div>

<!--end-Footer-part-->


<script src="/Public/Admin/js/jquery.ui.custom.js"></script> 

<script src="/Public/Admin/js/bootstrap.min.js"></script> 

<script src="/Public/Admin/js/bootstrap-colorpicker.js"></script> 

<script src="/Public/Admin/js/bootstrap-datepicker.js"></script> 

<!-- <script src="/Public/Admin/js/jquery.toggle.buttons.html"></script>  -->

<script src="/Public/Admin/js/masked.js"></script> 

<script src="/Public/Admin/js/jquery.uniform.js"></script> 

<!-- <script src="/Public/Admin/js/select2.min.js"></script>  -->

<script src="/Public/Admin/js/matrix.js"></script> 

<script src="/Public/Admin/js/matrix.form_common.js"></script> 

<!-- <script src="/Public/Admin/js/wysihtml5-0.3.0.js"></script>  -->

<script src="/Public/Admin/js/jquery.peity.min.js"></script> 

<!-- <script src="/Public/Admin/js/bootstrap-wysihtml5.js"></script>  -->

<script src="/Public/Admin/js/jquery.dataTables.min.js"></script> 

<script>

  // $('.textarea_editor').wysihtml5();

</script>

</body>

</html>