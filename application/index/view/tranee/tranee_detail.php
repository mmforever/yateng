<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>


<body>   
{include file="public/commen";}
<div id="biaoti"><h1>学员详细信息查看</h1></div>
<div class="main">
<div id="caozuo">
  <!--<li><a href="<?php echo url('Tranee/tranee_add'); ?>"><div id="add"></div>添加</a></li>
  <li><a href="<?php echo url('Tranee/tranee_update'); ?>"><div id="alter"></div>修改</a></li>
  <li><a href="<?php echo url('Tranee/tranee_delete'); ?>"><div id="delete"></div>删除</a></li>

</div>-->
   <table>
     <thead>
       <td>选项</td>
       <td>ID</td>
       <td>姓名</td>
       <td>性别</td>
       <td>籍贯</td>
       <td>专业</td>
       <td>费用</td>
       <td>QQ号</td>
       <td>电话</td>
       <td>所读大学</td>
       <td>入学时间</td>
       <td>现就职企业</td>
     </thead>
     <tbody>
	   <?php echo $str; ?>
     </tbody>
     
       <?php /*?><?php foreach($rs as $row){?>
       <tr>
            <td><?php echo $row["name"];?></td>
       </tr>
       <?php }?><?php */?></table>
     
</div>
</body>
</html>