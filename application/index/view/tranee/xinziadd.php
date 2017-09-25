<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>
<body>
{include file="public/commen" /}
<div class="add" style=" width:400px; margin:100px auto;">
  <form method="post" action="<?php echo url('Tranee/xinziaddsave?id='.$id);?>">
    <li>姓名：<input type="text" name="traneename"/></li>
    <li>年份：<input type="text" name="year"/></li>
    <li>薪资：<input type="text" name="pay" /></li>
    <li><input type="submit" value="提交" class="btn" style=" position:relative; left:-240px;"/></li>
  </form>
</div>
</body>
</html>