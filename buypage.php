<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="布尔教育 http://www.itbool.com" />
<link rel="stylesheet" type="text/css" href="./images/reset.css">
<link rel="stylesheet" type="text/css" href="./images/new.css">
<style>
 #login{
        float: right;
        position: relative;
        font-size: 15px;
        top: -25px;
    }
    #regist{
        float: right;
        position: relative;
        left: -10px;
        top:-25px;
        font-size: 15px;

    }
	#welcome{
         float: right;
        position: relative;
        font-size: 15px;
        top: -25px;
    }
</style>
<script src="jquery-3.0.0.js">
	
</script>

</head>
    <body align="center">
    	<div id = "container">
    		<div id = "head">
            <img src="./images/logo32_.png" alt="" />
             <?php 
            /****
            布尔教育 高端PHP培训
            培  训: http://www.itbool.com
            论  坛: http://www.zixue.it
            ****/
            error_reporting(E_ALL^E_NOTICE^E_WARNING);
            $dir = $_GET['dir'];
            if($dir!=''){
                echo '<p id="welcome">欢迎您'.$_GET['dir'].'</p>';
            }
            else{
                echo '<p>
            <a href="./regist.html" id = "login">登录</a>
            <a href="./login.html" id = "regist">注册</a> 
            </p>';
            }
            echo '<p>
                    <ul id ="nav">
                        <p id = "first">
                        <li><a href="./index.php?dir='.$_GET["dir"].'">';
            echo '首&nbsp;&nbsp;页</a></li>
                        </p>

                        <li><a href="./introduction.php?dir='.$_GET["dir"].'">手环简介</a></li>
                        <li><a href="./buypage.php?dir='.$_GET["dir"].'"';
                        echo '>现在购买</a></li>
                        <li><a href="./instruction.php?dir='.$_GET["dir"].'">使用说明</a></li>
                        <li><a href="./characteristic.php?dir='.$_GET["dir"].'">产品特点</a></li>
                        <li><a href="./aboutus.php?dir='.$_GET["dir"].'">关于我们</a></li>
                        <li><a href="./complain.php?dir='.$_GET["dir"].'">意见反馈</a></li>


                    </ul>
            </p>';
            
            ?>  	
		    		
    			</div>
            <div id ='body2'>
            	<img id = "img1" src="./images/手环图1.1.png" alt="0" />
 
            	<form id = "form1" action="./success.html" method='post'>
            		<p><strong>*请选择颜色</strong>
            		  <br />
					  <label>
					  <input name ="howtosite" id ="red" type = "radio" value = "0"  />
					  <span style="color:red;">热情红&nbsp;&nbsp;</span>					  
					  </label>
					  <label>
					  <input name ="howtosite" id="blue" type = "radio" value = "1" checked="checked" />
					  <span style="color:blue;">天空蓝&nbsp;&nbsp;</span></label>
					  <label>
					  <input name ="howtosite" id="black"type = "radio" value = "2" />
					  <span style="color:black;">酷雅黑&nbsp;&nbsp;</span></label>
					  <label>
					  <input name ="howtosite" id="orange"type = "radio" value = "3" />
					  <span style="color:orange;">柠檬黄&nbsp;&nbsp;</span></label>
					  <label>
					  <input name = "howtosite" id="green"type = "radio" value = "4" />
					  <span style="color:green;">清新绿&nbsp;&nbsp;</span></label>

				  </p>
				  <br />
				  <p>
				  	<strong>*请选择购买的数量</strong>
				  	<input type="button" value="-" id="minus" />
				  	<input type="text" id = "amount"value = "1" style="width:20px;" />
				  	<input type="button" value="+" id="plus" />
				  	（现价：￥99/枚）
				  </p>
				  <br />

				 <p>
				 	<strong>*姓名&nbsp;</strong>
				 	<input type="text" />
				 </p>
				 <br />
				  <p>
				 	<strong>*联系电话&nbsp;</strong>
				 	<input type="text" />
				 </p>
				 <br />
				  <div class="info">
				  	<strong>*请选择收货地址</strong>
				<div>
					<select id="s_province" name="s_province"></select>  
				    <select id="s_city" name="s_city" ></select>  
				    <select id="s_county" name="s_county"></select>
				    <script class="resources library" src="./images/area.js" type="text/javascript"></script>
				    
				    <script type="text/javascript">_init_area();</script>
				    </div>
				    <div id="show"></div>
				</div>
				  <br />
				  <p><strong>*请选择快递方式</strong>
				  	<select name="" id="delivery" onchange="price()">
				  		<option value="0">EMS包邮（￥0）</option>
				  		<option value="1">顺丰快递（￥20）</option>
				  		<option value="2">申通快递（￥10）</option>
				  		<option value="3">圆通快递（￥10）</option>	
				  	</select>
				  </p>
				  <br />
				  <br />
				  <strong>您共需要支付：</strong>
				  <p id = 'totalPrice'>
				  	
				  </p>
				  <br />
				  <input type="submit" value="确定购买"/>


            		
            	</form>
    
    	</div>
    </div>

    </body>
   <script>
   var red = document.getElementById('red');
   var black = document.getElementById('black');
   var blue = document.getElementById('blue');
   var orange = document.getElementById('orange');
   var green = document.getElementById('green');
   var room = document.getElementById('img1');
   red.onclick = function Red(){
     room.src = "./images/手环图r.jpg"
   }
   black.onclick = function black(){
   	room.src = "./images/手环图b.jpg"
   }
    blue.onclick = function blue(){
   	room.src = "./images/手环图1.1.png"
   }
    orange.onclick = function orange(){
   	room.src = "./images/手环图y.jpg"
   }
    green.onclick = function green(){
   	room.src = "./images/手环图g.jpg"
   }


   

   var buttonMinus = document.getElementById('minus');
   var priceItem = 99;

	buttonMinus.onclick = function minus(){
		var amount = document.getElementById('amount').value;
		if(amount>1){
		amount--;
		
	}
		document.getElementById('amount').value = amount;
		price();
	}
	var buttonPlus = document.getElementById('plus');

	buttonPlus.onclick = function plus(){
		var amount = document.getElementById('amount').value;
		amount++;
		document.getElementById('amount').value = amount;
		price();
	}
var amountEvent = document.getElementById('amount');
amountEvent.oninput = price();
	function price(){
		var amount = document.getElementById('amount').value;
		var delivery = document.getElementById('delivery').value;
		var priceForItems = amount * priceItem;

		var priceForDelivery=0;
		if(delivery == 0){
			priceForDelivery = 0;
		}else
		if(delivery == 1){
			priceForDelivery =20;
		}
		else{
			priceForDelivery = 10;
		}
		var total = priceForDelivery +priceForItems;
		var content = document.getElementById('totalPrice');
		content.innerHTML ="<strong>￥" + total +"</strong>";
	}
   </script>
</html>