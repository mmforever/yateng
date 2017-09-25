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
 
 
 
  
<script> 

    var chart= new Highchas.Chart('container', {          
        chart: {
            type: 'column'
        },
        title: {
            text: '雅腾学员薪资情况分析'
        },
        xAxis: {
            categories: [
                '郭佳栋',
                '陈娟',
                '肖建华',
                '湛慧平',
                '夏芳',
                '刘红青',
                '杨雪晋',
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
		    {
            name: '2016',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6]
            }, 
		{
            name: '2017',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0]
        }, {
            name: '2018',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0]
        }, {
            name: '2019',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4]
        },{
			name: '2020',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6]
			}]
    });

</script>
</div>
</div>
</body>
</html>