
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/cjinitial.css" rel="stylesheet" type="text/css">
<link href="/css/commen.css" rel="stylesheet" type="text/css">
<script src="/js/jq/jquery-1.8.3.min.js"></script>
<script>
$(function(){		
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();//隐藏该元素
		}else{
			$(this).next('ul').slideDown();//显示该元素
		}
	});
})	
</script>
</head>


<body>

   
  <!-- head start-->
<div id="top">
    <div id="loginlogo" >
      <a href="" target="_self" ><img src="/images/loginlogo.png" alt="雅腾信息管理系统"/></a>
    </div>
    <ul id="topaction">
        <li><input type="button" class="action" value="返回" onClick="goback()"/></li>
        <li><input type="button" class="action" value="刷新" onClick="shuaxin()"/></li>
        <li><a href="<?php echo url('Index/about'); ?>" class="action">关于</a></li>
        <li><a href="<?php echo url('Index/loginout'); ?>" class="action">退出</a></li>
    
    </ul>
</div>
   <!--head end-->

    <!--left start-->
<div id="long">
    <div id="lefttop"><span></span>通讯录</div>
</div>


<dl id="leftmenu">
    <dd>
       <div class="title"><span></span></span><a href="<?php echo url('Index/index'); ?>" style=" color:#000;">系统首页</a></div>
    </dd>
    
    <dd>
       <div class="title"><span></span></span>学员管理</div>
         <ul class="menuson">
           <li><a href="<?php echo url('Tranee/tranee_list'); ?>"><span></span>学员列表</a></li>
           <li><a href="<?php echo url('Tranee/pay_analyse');?>"><span></span>薪资分析</a></li>
           <li><a href="<?php echo url('Tranee/tranee_add'); ?>"><span></span>学员添加</a></li>
         </ul>
    
    </dd>
    <dd>
     <div class="title"><span></span>客户管理</div>
       <ul class="menuson">
           <li><a href="<?php echo url('User/user_list'); ?>"><span></span>客户列表</a></li>
           <li><a href="<?php echo url('User/user_analyse');?>"><span></span>收入分析</a></li>
           <li><a href="<?php echo url('User/user_add');?>"><span></span>客户添加</a></li>
       </ul>
       
  </dd>
  <dd><div class="title"><span></span>管理员管理</div>
      <ul class="menuson">
               <li><a href="<?php echo url('Admin/admin_list'); ?>"><span></span>管理员列表</a></li>
               <li><a href="<?php echo url('Admin/admin_add'); ?>"><span></span>管理员添加</a></li>
      </ul>
  </dd>

</dl>
  <!-- left end-->
</body>
<script type="text/javascript"> 

  function goback()
  {
	  window.history.go(-1);
	  }
  function shuaxin()
  {
	 window.location.reload(); 
	  
	  }
 
</script>

</jscript>
</html>