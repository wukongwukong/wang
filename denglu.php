
<?php
 if(empty($_POST['zhuce'])){
 	$rands=rand(1000,9999);
 	$rand= "输入验证码";
 	$yzm = '请输入你的短信验证码';
 	if(!empty($_POST['yzm'])){
 		$rand=$rands;

 	}
 }else{
 		if($_POST['yzm'] != $_POST['rand']){
 			$rand ="验证码不一致";
 		}else{
 			$rand= "验证码通过";
 		}
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4.26</title>
</head>
<style type="text/css">
*{
	padding: 0;
	margin: 0;
}
/*body{
	background: rgba(121,121,121,0.1);
}*/
.box{
	width: 100%;
	height: 70px;
	margin: 50px auto;
}
.box input{
	width:500px;
	height:50px;
	border:1px solid #0099e5;
	margin:10px auto;
	margin-right: 320px;
	position: absolute;

}
.box img{
	width: 350px;
	height: 60px;
	margin-top:5px;
	
}
.box span{
	float: right;
	font-size: 23px;
	color:gray;
	margin:25px;
}
.boc{
	width: 100%;
	height: 70px;
	background-color: #0099e5;
}
.boc a{
	color:white;
	font-size: 23px;
	margin:15px;
	margin-left: 150px;
	line-height: 70px;
	text-decoration: none;
}
.boc a:hover{
	background: blue;
	transition: all 0.4s;
}
.boa{
	height: 600px;
	width:450px;
	margin:auto;
	border-radius: 2px;
	margin-top:50px;
	
}
.bob{
	width:450px;
	height:60px;
	background: gray;
}
.bob1{
	width:222px;
	height:60px;
	display: inline-block;
}
.bob2{
	width:222px;
	height:60px;
	display: inline-block;
}
.bob a{
	text-decoration: none;
	color:white;
	font-size: 23px;
	line-height: 60px;
	margin-left: 50px;
	transition: all 0.4s;
}
.bob1:hover{
	background:#c4c6c8;
	transition: all 0.4s;
}
.bob2:hover{
	background:#c4c6c8;
	transition: all 0.4s;
}
.bog{
	width:450px;
	height:540px;
	overflow: hidden;
}
.bod{
	width:450px;
	height:540px;
	background: #14c63a;
}
.bod form{
	width:300px;
	height:420px;
	margin: 0px auto;
	position: relative;
	top: 90px;
	font-size: 20px;
}
.bof{
	width:450px;
	height:540px;
	background: #8ec614;
}
.bod input[type="text"] {
	width:250px;
	height:30px;
	border-radius: 6px;
	
}
.bod input[type="password"]{
	width:250px;
	height:30px;
	border-radius: 6px;	
}

.bod input[type="checkbox"]{
		top: 10px;
		left: 15px;
	}
.bod input[type="submit"]{
	width:250px;
	height:30px;
	background: #1aa6ff;
	border:none;
	color:white;	
}




.bof form{
	width:300px;
	height:420px;
	margin: 0px auto;
	position: relative;
	top: 90px;
	font-size: 20px;
}
.bof input[type="text"] {
	width:250px;
	height:30px;
	border-radius: 6px;
	
}
#tian{
	width:120px;
	height:30px;
	border-radius: 6px;
}
.bof button{
	width:120px;
	height:30px;
	border-radius: 6px;
	background:#1aa6ff;
}
.bof input[type="password"]{
	width:250px;
	height:30px;
	border-radius: 6px;	
}

.bof input[type="checkbox"]{
		top: 10px;
		left: 15px;
	}
.bof input[type="submit"]{
	width:250px;
	height:30px;
	background: #1aa6ff;
	border:none;
	color:white;
	margin-top:20px;	
}
#abb{
	width:120px;
	height:40px;
	position:absolute; 
	left: 45%;
	top:49%;
	border-radius: 6px;
	color:black;
}
</style>
<link rel="stylesheet" type="text/css" href="4.9.css">
<body>
	<div class="box">
		<img src="logo.png">
		<input type="text" name="biaoge" >
		<span>登陆</span>
			<span>注册</spanf>
	</div>
	<div class="boc">
		<a href="">班级管理</a>
		<a href="">课程体系</a>
		<a href="">教师专区</a>
	</div>
	<div class="boa">
		<div class="bob">
			<div class="bob1">
				<a href="#ab">账号登录</a>
			</div>
			<div class="bob2">
				<a href="#ad">账号注册</a>
			</div>
		</div >
		<div class="bog">
		<div class="bod" id="ab">
			<form>
				<h3>账号</h3>
				<input type="text" name="denglu" placeholder="账号/邮箱/手机号">
				<h3>密码</h3>
				<input type="password" name="mima" placeholder="密码"><br>
				<input type="checkbox" name="waqngji" ><span>忘记密码</span>
				<input type="submit" name="denglu" value="登录">

			</form>
		</div>
		<div class="bof" id="ad">
			<form  action="" method="post">
				<h3>手机号码</h3>
				<input type="text" name="phone" placeholder="账号/邮箱/手机号">
				<h3>用户名</h3>
				<input type="text" name="aaa" placeholder="账号/邮箱/手机号">
				<h3>密码</h3>
				<input type="password" name="password" placeholder="密码"><br>
				<h3>短信验证码</h3>
				<input type="text" name="yzm" placeholder="请输入你的短信验证码" id="tian" value="<?php echo $yzm?>">
				<!-- <button class="duanxi" >短信验证码</button> -->
				<input type="submit" name="yzm" value="<?php echo $rand ?>" id="abb">
				<input type="hidden" name="code" value="<?php echo $rand ?>">
				<input type="submit" name="zhuce" value="注册" value="<?php echo $zhuce ?>">

			</form>
<!-- 			<form action="" method="post" >
				
			</form> -->
		</div>
		</div>
	</div>
</body>
</html>
<!-- <script type="text/javascript">
	var dianj = function(){
		alert("aaa");
	}
</script> -->
<!-- onclick="dianj()" -->