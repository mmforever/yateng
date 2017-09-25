<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>

<body>
{include file="public/commen"/}
<div id="biaoti"><h1>网站开发</h1></div>
<div  class="add">
<form action="<?php echo url('User/guanwang_addsave'); ?>" method="post">
  <div class="tranee_infor">
    <li>公司名称：<input type="text" name="companyname"/></li>
    <li>&nbsp;&nbsp;&nbsp;&nbsp;联系人：<input type="text" name="username"/></li>
    <li>联系电话：<input type="text" name="phone" /></li>
    <li>网站域名：<input type="text" name="domain"/></li>
  </div>
  <div class="tranee_infor">
    <li>所收域名费用：<input type="text" name="domain_fee"/></li>
    <li>域名到期时间：<input type="text" name="domain_due"/></li>
    <li>空间到期时间：<input type="text" name="room_due"/></li>
    <li><input type="submit" value="提交"  class="btn"/></li>    
  </div>
</form>
</div>
</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
</body>
</html>