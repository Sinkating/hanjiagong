<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/css/style.css" rel="stylesheet">
    <link href="/Public/css/index.css" rel="stylesheet">
    <link href="/Public/css/walletmx.css" rel="stylesheet">   
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
 我要提现
    <a href="javascript:;" class="menu right"><img src="/Public/images/XQY-gd.png"/></a>
</div>
<!--菜单页-->
<div class="menu_list">
    
    <div class="list_l">
        <ul class="clear">
            <li>
                <a href="/index.php/Home/Index/index">                    
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Company/company">                    
                    <span>企业</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Release/resource">                    
                    <span>资源圈</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/News/news">                   
                    <span>消息</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Person/person">                    
                    <span>我的</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</div>
<!--我要提现-->
<div class="wallettx">
	<div class="mytx_zt">
		<span>认证状态</span>
		<span>已认证</span>
	</div>
	<div class="mytx_name">
		<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
		<input type="text" name="name"  value="<?php echo ($list['name']); ?>">
	</div>
	<div class="tx_line"></div>
	<div class="mytx_zh">
		<span>提现账号</span>
		<input type="text" name="phone" >
	</div>
	<!--<div class="mytx_gq">		
		<span>工期状态</span>
		<input type="radio" name="sex" value="工期中" /> 工期中
        <input type="radio" name="sex" value="已结束" /> 已结束	
	</div>-->
	<div class="tx_money">
		<div class="tx_money1">
			提现金额
		</div>
		<div class="tx_money2">
			￥<input type="text" value="<?php echo ($list['money']); ?>" name="money" readonly="readonly">元
		</div>
		<div class="ktx_line"></div>
		<div class="ktx_money">
			<span>可提现金额：</span><span><?php echo ($list['money']); ?></span><span>元</span>
		</div>
	</div>
	
	<div class="zhuyi">
		<p>*请填写真实的个人信息，如若不符，提现申请会被驳回</p>
	</div>
	<div class="sq_go">
		<p>信息无误，确认提交</p>
	</div>
	
	<div class="wrz" style="display:none">
		<span>认证状态</span>
		<span>您还未认证，赶快去<a href="#">认证</a>吧！</span>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
	var mytx_name = $("input[name='name']").val();
	var mytx_zh = $("input[name='phone']").val();
	var tx_money2 = $("input[name='money']").val();
	$('.sq_go p').click(function(event) {
        if($(".mytx_zh input").val() == ""){
            alert("请填写账号");
            return false
        }else if($(".tx_money2 input").val() == ""){
            alert("请输入提现金额");
            return false
        }else{
		$.ajax({
                url : "updatetx",
                type : 'post',
                data : {
                    mytx_name:$("input[name='name']").val(),
                    mytx_zh:$("input[name='phone']").val(),
                    tx_money2:$("input[name='money']").val()
                },
                success : function(data){
                   console.log(data)
                   if (data == 1) {
                       alert("提交成功")
                       location.href='/index.php/Home/Person/commision'
                   }else if(data == 0){
                      location.href='/index.php/Home/Person/commision'
                   }else if(data == 3){
                       alert("正在审核，请稍后")
                        location.href='/index.php/Home/Person/commision'
                   };
                }
            });
        }
	});
</script>
</body>
</html>