<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>


<body>   
{include file="public/commen";}
<div id="biaoti"><h1>管理员信息查看</h1></div>
<div class="main">
<form action="<?php echo url('Admin/admin_delete'); ?>" method="post">
<div id="caozuo">
  <li><a href="<?php echo url('Admin/admin_add'); ?>"><div id="add"></div>添加</a></li>
  <li><div id="delete"></div><input type="submit" class="btn" value="删除" style="  border:none; margin-top:-35px; font-size:16px; color:#09F; background:none;"/></li>
</div>
  {$page} 
   <table>
     <thead>
       <td>选项</td>
       <td>ID</td>
       <td>姓名</td>
       <td>密码</td> 
       <td>操作</td>   
     </thead>
     <tbody>  
        
       <?php foreach($list as $row){?>
        <tr> 
            <td>
                <input type="checkbox" name="ids[]" id="chose"  value="<?php echo $row["id"];?>"/>
           </td>
           
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>            
            <td><?php echo $row["password"];?></td>
            <td><a href="<?php echo url('Admin/admin_update?id='.$row["id"]);?>">修改信息</a></td></tr>
       <?php }?>     
     </tbody>
</table>  
</form>   
</div>
</body>
</html>