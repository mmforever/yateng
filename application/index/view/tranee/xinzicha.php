<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
<script src="/js/jq/jquery-1.8.3.min.js"></script>
<script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

</head>
<body>
<div id="divprint">
{include file="public/commen";}

<div class="main">
<form action="<?php echo url('Tranee/xinzicha');?>" method="post">
<div id="analyse">年份：
     <select name="year">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>    
     </select>
     <input type="submit" value="查询" style="width:50px;"/>
  </div>
</form>

<a href="javascript:printme()" target="_self">打印</a>
<div id="container" style="max-width:800px;height:400px;  margin-top:30px;"></div>
  
 <script type="text/javascript">
			var global_Html = "";
			function printme() {
				global_Html = document.body.innerHTML;
				document.body.innerHTML = document.getElementById('divprint').innerHTML;　　　　　　　　　　　　　　
				window.print();
				window.setTimeout(function() {
					document.body.innerHTML = global_Html;
				}, 1500);
			}
</script>
<!--<script>

 $.ajax({	 
	 url:'index/Tranee/xinzicha',
	 post:'post',
	 data:{
		 },
	
	 success:function(data)
	 {
		 alert(data);
		 
		 }
	 
	 
	 })
</script>--> 
              

<script> 
    var chart= new Highcharts.Chart('container', {          
        chart: {
            type: 'column'
        },
        title: {
            text: '雅腾学员薪资情况分析'
        },
        xAxis: {
            categories:
            
             [
             <?php 
                $arr="";
               foreach ($namearr as $name) {
                $arr.="'".$name["traneename"]."'".",";   
               }
               echo($arr);
             ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '薪资 (元)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} 元</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [

            <?php
            echo($list);
         ?>
			]
    });

</script>

</div>
</div>
</body>
</html>