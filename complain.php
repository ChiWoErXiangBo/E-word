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
	#title{
		font-size: 25px;
		font-weight: 30px;
		text-align: center;
	}
	#Form
	{
		width: 800px;
		height: 500px;
		background: #EEE;
	    margin: 0 auto;
	    position: relative;
	    top: 50px;
	}
	#forms{
		font-size: 15px;
	}
	.a{
		text-align: center;
	}
</style>
</head>
    <body>
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
    			<div id = 'body2'>
    				<div id="Form">
    				<p id='title'>为了我们产品的提高与完善，请留下您的宝贵意见！</p>
    				<br /><br />
    				<form  id = "forms"action="">
                    <p class='a'>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:<input type="text" /></p>
                    <br />
                    <p class='a'>联系方式：<input type="text" /></p>
                    <br />
                    <p class='a'>您的意见:</p><p class='a'><textarea name="" id="" cols="50" class='a' rows="10"></textarea></p><br /><br />
    					<p class="a"><input type="submit" value="提交意见"/></p>
    				</form>
    				</div>
    			 </div>	
    		</div>
    </body>
</html>