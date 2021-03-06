<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>微信支付</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript">
    $(function(){
    	var data = $.parseJSON($(".data").text())
		//调用微信JS api 支付
		function jsApiCall(){
			// var data=<?php echo ($jsApiParameters); ?>;
			WeixinJSBridge.invoke(
				'getBrandWCPayRequest', data,
				function(res){
					WeixinJSBridge.log(res.err_msg);
					// alert(res.err_code+res.err_desc+res.err_msg);
					if(res.err_msg == "get_brand_wcpay_request:ok"){
                       window.location.href="http://www.cusdc.cn";
                   }else{
                       //返回跳转到订单详情页面
                       alert(支付失败);
                       window.location.href="http://www.cusdc.cn";
                         
                   }
					
				}
			);
		}
		$(".getPayCode").click(function(){
			callpay()
		})
		function callpay(){
			if (typeof WeixinJSBridge == "undefined"){
			    if( document.addEventListener ){
			        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
			    }else if (document.attachEvent){
			        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
			        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
			    }
			}else{
			    jsApiCall();
			}
		}
    })
	</script>
	<script type="text/javascript">
	//获取共享地址
	function editAddress(){
		WeixinJSBridge.invoke(
			'editAddress',
			<?php echo $editAddress; ?>,
			function(res){
				var value1 = res.proviceFirstStageName;
				var value2 = res.addressCitySecondStageName;
				var value3 = res.addressCountiesThirdStageName;
				var value4 = res.addressDetailInfo;
				var tel = res.telNumber;
				
				alert(value1 + value2 + value3 + value4 + ":" + tel);
			}
		);
	}
	
	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', editAddress); 
		        document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
			editAddress();
		}
	};
	</script>
</head>
<body>
<div class="data" style="display:none;"><?php echo ($jsApiParameters); ?></div>
    <br/>
    <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px">100</span>元</b></font><br/><br/>
	<div align="center">
		<button class="getPayCode" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
	</div>
</body>
</html>