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
                    header("Content-Type:text/html;charset=utf-8"); 
    				require("gongyong.php");
                    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting"); 
                    mysql_query("set names 'utf8'"); 
                    mysql_select_db($mysql_database) or die('Can\'t use foo : ' . mysql_error());
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $name = $_POST['name'];
                    $number = $_POST['number'];
                    $position = $_POST['position'];
                    $s_province = $_POST['s_province'];
                    $s_city = $_POST['s_city'];
                    $s_county = $_POST['s_county'];
                     $sql1="SELECT  `name` FROM `admins` where 1";
                    $result = mysql_query($sql1);
                    while($row = mysql_fetch_row($result)){
                      if ($user == $row[0]){
                        $a =1;
                      }
                    }
                             if(isset($a)){
                              echo "注册失败，用户名已存在！";
                             }
                    if(isset($a)==false){
                        $sql= "INSERT INTO `admins`(`id`, `name`, `password`, `realname`, `number`, `s_province`, `s_city`, `s_country`, `positon`) VALUES (null, '$user', '$password','$name','$number','$s_province','$s_city','$s_county','$position')";
                        mysql_query($sql); 
                        echo "h";      
                        mysql_close(); //关闭MySQL连接
                        echo $user;
                        echo $name;
                        echo $password;
                        echo $number;
                        echo $s_province;
                        echo $s_city;
                        echo $s_county;
                        echo $position;
                    }

    				?>
    			 </div>	
    		</div>
    </body>
</html>