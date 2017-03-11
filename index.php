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

</head>
    <body align="center">
    	<div id = "container">
    		<div id = "head">
            <img src="./images/logo32_.png" alt="" id="logo" />
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
            <div id ='body'>
                <img src="./images/sights_banner.jpg" alt="" />
    		<div id = 'main'>
                <div class="subtitle">
                    <img src="./images/circle.gif" alt="#">
                    <h1>产品介绍</h1>
                </div>
    			<div class = "imgArea">

    				<img src="./images/手环图1.1.png" alt="0" />
    			</div>
                <div id="text">
                    <p class="comment">优雅轻便的手环，让你获得高效快捷的背单词体验</p>
                    <p class="comment">Easy,esay to remember your word!</p>
                </div>
    		</div>
            <div id = 'main2'>
                <div class="subtitle">
                    <img src="./images/circle.gif" alt="#">
                    <h1>内容导航</h1>
            </div>
             <ul id = "art">
              <li><a href="./introduction.html">手环简介</a></li>
              <li><a href="./buypage.html">现在购买</a></li>
              <li><a href="">使用说明</a></li>
              <li><a href="">产品特点</a></li>
              <li><a href="">关于我们</a></li>
                </ul>
                <div id = "contact">
            <div class="subtitle" id="lan">
              
            <img src="./images/circle.gif" alt="#">
                  <h1>开启你的手环之旅</h1>
                    <a href="">more</a> 
              </div> 

                    <p id="zhengwen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;英语作为一门国际化语言，在我国的受重视程度也越来越高，而词汇作为语言学习的基础则更应该用恰当的方式进行系统性学习。经过初步调查，如今市场上还未存在类似E-word智能手环的产品，因此该产品具有极大市场竞争力，根据当今形式，这款能随时随地记忆英语单词的手环也尤其适应强大的市场需求。该手环轻便，便于携带同时其新颖、休闲的款式也能满足新一代年轻人审美需求。而未来随着技术的成熟手环也会逐渐更新词库，同时增加新的功能，做到与时俱进。</p>
            </div>


            </div>

            <div id="footer">
            </div>
    	</div>

    </body>
</html>