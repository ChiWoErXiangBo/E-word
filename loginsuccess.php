<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="布尔教育 http://www.itbool.com" />
<link rel="stylesheet" type="text/css" href="./images/reset.css">
<link rel="stylesheet" type="text/css" href="./images/new.css">
</head>
    <body>
    	<body align="center">
    	<div id = "container">
    		<div id = "head">
            <img src="./images/logo32_.png" alt="" />  	
		    		<ul id ="nav">
		    			<p id = "first">
		    			<li><a href="./index.php">首&nbsp;&nbsp;页</a></li>
		    			</p>

		    			<li><a href="./introduction.html">手环简介</a></li>
		    			<li><a href="./buypage.html">现在购买</a></li>
		    			<li><a href="">使用说明</a></li>
		    			<li><a href="">产品特点</a></li>
		    			<li><a href="">关于我们</a></li>
		    			<li><a href="./complain.html">意见反馈</a></li>

		    		</ul>
    			</div>
    			<div id = 'body2'>
    				<?php
    				$user = $_POST['userId'];
    				$password = $_POST['password'];
    				require("gongyong.php");
                    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting"); 
                    mysql_query("set names 'utf8'"); 
                    mysql_select_db($mysql_database) or die('Can\'t use foo : ' . mysql_error());
                    $sql = "SELECT `password` FROM `admins` WHERE `name` = '$user' ";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_row($result);
                    if ($result==''){
                        echo '您输入的用户名或密码不正确，请重新输入';
                        header("refresh:2;url=index.php");
                    }
                    else if($password==$row[0]){
                        echo "您已成功登陆，正在为您跳转";
                       header("refresh:2;url=index.php?dir=$user");
                    }
                    else{
                        echo "您输入的用户名或密码不正确，请重新输入";
                    }
    		
    				?>
    			 </div>	
    		</div>
    </body>
</html>
