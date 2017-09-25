<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>

<body>
{include file="public/commen";}
<div id="biaoti"><h1>管理员信息录入</h1></div>
<div class="main">

      <div class="add">
            <form action="<?php echo url('Admin/admin_updatesave?id='.$id); ?>" method="post">
              <ul>
                 <li>用户名：<input name="name" type="text" value="<?php echo $name; ?>" /></li>
                 <li>&nbsp;&nbsp;&nbsp;密码：<input name="password" type="text" value="<?php echo $password;  ?>"/></li>
                 <li><input type="submit"  class="btn" style=" float:left; margin-left:100px;"/></li>
              
              </ul>
            </form>
      </div>
      
</div>
</body>
</html>