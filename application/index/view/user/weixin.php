<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/jeDate/jedate.js"></script>
</head>

<body>
{include file="public/commen"/}
<div id="biaoti"><h1 style="font-size:30px; font-weight:bold;">微信开发</h1></div>
<div  class="add">
<form action="<?php echo url('User/weixin_addsave'); ?>" method="post">
  <div class="tranee_infor">
    <li>公司名称：<input type="text" name="companyname"/></li>
    <li>&nbsp;&nbsp;&nbsp;&nbsp;联系人：<input type="text" name="username"/></li>
    <li>联系电话：<input type="text" name="phone" /></li>
    
  </div>
  <div class="tranee_infor">
    <li>公众号名：<input type="text" name="public_number"/></li>
    <li>公众号费用：<input type="text"  name="number_fee"/></li>
    <li>微公众开发时间：<input type="text" id="dateinfo" name="deve_time"/></li>    
  </div>
  <li><div style="display:block; width:200px; margin:0 auto;"><input type="submit" value="提交"  class="btn" /></div></li> 
</form>
</div>
<script type="text/javascript">
   jeDate({
		dateCell:"#dateinfo",
		format:"YYYY年MM月DD日",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19",
		okfun:function(val){alert(val)}
	})
</script>
</body>
