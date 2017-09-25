<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
</head>

<body>
{include file="public/commen" /}
<div id="biaoti"><h1>学员信息录入</h1><div></div>
<div  class="add">
    <form action="tranee_addsave"  method="post"  enctype="multipart/form-data">
        <div class="tranee_infor">
            <li>姓名：<input type="text" name="name" /></li>
            <li>性别：<input  type="radio" name="sex"  style="width:60px;" value="男" checked/>男<input type="radio" name="sex" style="width:60px;"  value="女"/>女</li>
            <li>籍贯：<input type="text" name="address"/></li>
            <li>专业：<input type="text" name="major"/></li>
            <li>学费：<input type="text" name="fee"/></li>
        </div>
        <div class="tranee_infor">
        <li>状态：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="state" style="height:30px; width:70px; border:#09F 1px solid; font-size:14px; font-family:'微软雅黑';">
          <option value="培训中">培训中</option>
          <option value="已毕业">已毕业</option>
        </select></li>
        <li>QQ号：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="qq"/></li>
        <li>联系电话：<input type="text" name="phone"/></li>
        
        <li>所读学校：<input type="text" name="school"/></li>
        
        <li>入学时间：<input type="text" name="intake"/></li>
        
        <li>就职企业：<input type="text" name="company"/></li>
        </div>
        <input type="file" name="image" style="width:70px; height:20px;" onchange="preview(this)"/>
        
        <li><div id="preview" ></div> </div></li>
        <li><div  class="wbt"><input type="submit" value="提交"  class="btn"/></div></li>    
    </form>
</div>
</body>
<script type="text/javascript">    
 function preview(file)  
 {  
	 var prevDiv = document.getElementById('preview');  
	 if (file.files && file.files[0])  
	 {  	 
	 var reader = new FileReader();  
	 reader.onload = function(evt){  
	 prevDiv.innerHTML = '<img src="' + evt.srcElement.result + '" id="imgs" />';  
	}    
	 reader.readAsDataURL(file.files[0]);  
	}  
	 
 }  
 </script>  

</html>