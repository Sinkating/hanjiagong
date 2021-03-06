<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/css/style.css" rel="stylesheet">
	<link href="/Public/css/normalize3.0.2.min.css" rel="stylesheet"/>
	<link href="/Public/css/mobiscroll.css" rel="stylesheet"/>
	<link href="/Public/css/mobiscroll_date.css" rel="stylesheet"/>
	<link href="/Public/css/jquery-weui.min.css" rel="stylesheet"/>
	<link href="/Public/css/index.css" rel="stylesheet">
	<link href="/Public/css/walletmx.css" rel="stylesheet">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
	<script src="/Public/js/mobiscroll_date.js" charset="gb2312"></script>
	<script src="/Public/js/mobiscroll.js"></script>
	<script src="/Public/js/jquery-weui.min.js"></script>
	<script src="/Public/js/city-picker.min.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
     <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
发布职位
    <a style="opacity: 0;" href="/index.php/Home/Release/release_job" class="menu right"><img src="/Public/images/ZYQ-fabu.png"/></a>
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
<!--我的发布-->
<div class="release_job">
	<form>
		<div class="title">
			<span>标题</span>
			<input type="text" name="title" placeholder="请输入您要发布的职位标题">
		</div>
		<div class="begin_time">
			<span>开始时间</span>
			<input id="begin_time" name="begin_time" type="text" placeholder="请选择开始时间>">
		</div>
		<div class="end_time">
			<span>结束时间</span>
			<input id="end_time" name="end_time" type="text" placeholder="请选择结束时间>">
		</div>
		<div class="close_time">
			<span>截止时间</span>
			<input id="close_time" name="close_time" type="text" placeholder="请选择截止时间>">
		</div>
		<!--选择时间-->
		<script>
            var currYear = (new Date()).getFullYear();
            var opt={};
            opt.date = {preset : 'datetime'};
            opt.datetime = {preset : 'datetime'};
            opt.time = {preset : 'time'};
            opt.default = {
                theme: 'android-ics light', //皮肤样式
                display: 'bottom', //显示方式
                mode: 'scroller', //日期选择模式
                dateFormat: 'yyyy-mm-dd',
                lang: 'zh',
                showNow: false,
                nowText: "今天",
                startYear: currYear, //开始年份
                endYear: currYear + 10 //结束年份
            };
            $("#begin_time").mobiscroll($.extend(opt['date'], opt['default']));
            $("#end_time").mobiscroll($.extend(opt['date'], opt['default']));
            $("#close_time").mobiscroll($.extend(opt['date'], opt['default']));
		</script>
		<div class="people">
			<span>招聘人数</span>
			<input type="text" name="people_num" placeholder="请输入您要招聘的人数">
		</div>
		<div class="wages">
			<span>工资</span>
			<input type="text" name="money" placeholder="输入工资数">
			<select name="type" name="salary">
				<option selected="selected">元/天</option>
				<option>元/时</option>
				<option>元/次</option>
			</select>
		</div>
		<div class="js_tab">
			<span>结算方式</span>
			<select name="type">
				<option selected="selected">日结</option>
				<option>周结</option>
				<option>月结</option>
				<option>完工结</option>
			</select>
		</div>
		<div class="address">
			<span>工作地点</span>
			<input id="city" name="city" type="text" placeholder="请选择>>">
		</div>
		<!--工作地点-->
		<script>
            $("#city").cityPicker({
                title: "请选择工作地点"
            });
		</script>
		<div class="addressxx">
			<!--<span>工作地点</span>-->
			<input type="text" name="cityDetails" placeholder="请输入详细地址">
		</div>
		<div class="zpyq">		
			<textarea name="demand" placeholder="请尽可能详细的填写您对该职位的招聘要求"></textarea>
		</div>
		<div class="job_content">		
			<textarea name="treat" placeholder="请尽可能详细的填写该职位的工作内容、福利、待遇等"></textarea>
		</div>
		<div class="linkman">
			<span>联系人</span>
			<input type="text" name="contacts" placeholder="">
		</div>
		<div class="link_tab">
			<span>联系方式</span>
			<input type="text" name="tel" placeholder="">
		</div>
	</form>	
	
	<div class="xieyi">
		<input id="checkbox" type="checkbox"/>
		<span>我已同意<a href="#">《龙子人力资源岗位发布协议》</a></span>
	</div>
	<div class="go">
		<p>发布岗位</p>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<script>
	$(".go p").click(function () {
	    if($("input[name='title']").val() == ""){
	        alert("请填写标题");
			return
		}else if($("input[name='begin_time']").val() == ""){
	        alert("请选择开始时间");
            return
		}else if($("input[name='end_time']").val() == ""){
            alert("请选择结束时间");
            return
        }else if($("input[name='close_time']").val() == ""){
            alert("请选择截止时间");
            return
        }else if($("input[name='people_num']").val() == ""){
            alert("请填写招聘人数");
            return
        }else if($("input[name='money']").val() == ""){
            alert("请填写工资数");
            return
        }else if($("input[name='salary']").val() == ""){
            alert("请选择工资计算方式");
            return
        }else if($("input[name='type']").val() == ""){
            alert("请选择工资结算方式");
            return
        }else if($("input[name='city']").val() == ""){
            alert("请选择工作地点");
            return
        }else if($("input[name='cityDetails']").val() == ""){
            alert("请填写详细工作地点");
            return
        }else if($("input[name='demand']").val() == ""){
            alert("请填写工作要求");
            return
        }else if($("input[name='treat']").val() == ""){
            alert("请填写福利待遇");
            return
        }else if($("input[name='contacts']").val() == ""){
            alert("请填写联系人");
            return
        }else if($("input[name='tel']").val() == ""){
            alert("请填写联系方式");
            return
        }else if(!$('#checkbox').is(':checked')) {
            alert("未同意《龙子人力资源岗位发布协议》");
            return
        }else {
            function getFormData(selector) {
                var dataArray = $(selector).serializeArray();
                var formData = {};
                dataArray.forEach(function (value, index) {
                    formData[value.name] = value.value;
                    if (!formData[value.name]) {
                        formData[value.name] = value.value;
                    }
                });
                return formData;
            }
            var data = getFormData($("form"));
			$.ajax({
				url:"updateinfo",
				type:"POST",
				data:data,
				success:function (data) {
					console.log(data)
					if(data == 1){
					    alert("提交成功");
					    window.location.href="/index.php/Home/Release/resource"
					}
                }
			})
		}
    })
</script>
</body>
</html>