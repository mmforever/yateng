<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾管理系统登陆界面</title>
<link href="/css/cjinitial.css" rel="stylesheet" type="text/css">
<link href="/css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="login">
<div style="float: left;"><img src="/images/logo.jpg" style="width: 281px; height: 293px;  margin-top: 7px;" /></div>
<form  action="<?php echo url('Login/loginsave');?>" method="post">
<ul>
    <li>用户名：<input type="text" name="name" class="shuru"/></li>
    <li>&nbsp; &nbsp;密码：<input type="password" name="password" class="shuru"/></li>
    <li><input type="text" name="captcha" style=" width:90px; float:left; margin-right:20px;"/><div>{:captcha_img()}</div></li>
    <li><input id="btn" type="submit" name="btn" value="登陆"/></li>
</ul>
</form>
</div>
</body>

</html>
