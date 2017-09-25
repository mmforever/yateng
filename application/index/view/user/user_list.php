<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>


<body>   
{include file="public/commen";}
<div id="biaoti"><h1>客户信息查看</h1></div>
<div class="main">
<form action="<?php echo url('User/user_action'); ?>" method="post">
<div id="caozuo">
  <li><a href="<?php echo url('User/user_add'); ?>"><div id="add"></div>添加</a></li>
  <li><div id="alter"></div><input type="submit" class="btn" value="修改" style="border:none; margin-top:-35px; font-size:16px; color:#09F; background:none;" name="submit"/></li>
  <li><div id="delete"></div><input type="submit"class="btn" value="删除" style="border:none; margin-top:-35px; font-size:16px; color:#09F; background:none;" name="submit"/></li>
</div>
  {$page_guan} 
   <table>
     <thead>
       <td>选项</td>
       <td>公司名称</td>
       <td>联系人</td>
       <td>联系电话</td>
       <td>网站域名</td>
       <td>域名费用</td>
       <td>域名到期时间</td>
       <td>空间到期时间</td>
     </thead>
     <tbody>  
        
       <?php foreach($list_guan as $row){?>
        <tr> 
            <td>
                <input type="checkbox" name="ids[]" id="chose"  value="<?php echo $row["id"];?>"/>
           </td>
           
            <td><?php echo $row["companyname"];?></td>
            <td><?php echo $row["username"];?></td>            
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["domain"];?></td>
            <td><?php echo $row["domain_fee"];?></td>
            <td><?php echo $row["domain_due"];?></td>
            <td><?php echo $row["room_due"];?></td>
       </tr>
       <?php }?>     
     </tbody>
</table> 
</form>
<form>
{$page_wei}
<table>
     <thead>
       <td>选项</td>
       <td>公司名称</td>
       <td>联系人</td>
       <td>联系电话</td>
       <td>公众号名</td>
       <td>公众号费用</td>
       <td>公众号开发时间</td>
     </thead>
     <tbody> 
     <?php foreach($list_wei as $row){?>
        <tr> 
            <td>
                <input type="checkbox" name="ids[]" id="chose"  value="<?php echo $row["id"];?>"/>
           </td>
           
            <td><?php echo $row["companyname"];?></td>
            <td><?php echo $row["username"];?></td>            
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["public_number"];?></td>
            <td><?php echo $row["number_fee"];?></td>
            <td><?php echo $row["deve_time"];?></td>
       </tr>
       <?php }?>     
     </tbody> 
</table> 

</form>   
</div>
</body>
</html>