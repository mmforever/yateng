<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>雅腾信息管理系统</title>
<link href="/css/cjinitial.css" rel="stylesheet" type="text/css">
<link href="/css/xitong.css" rel="stylesheet" type="text/css">
<link href="/css/commen.css" rel="stylesheet" type="text/css">
<script src="https://img.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
<script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>
<script src="https://img.hcharts.cn/highcharts/modules/exporting.js"></script>
<script src="https://img.hcharts.cn/highcharts-plugins/highchars-zh_CN.js"></script>

</head>
<body>
<!-- {include file="public/commen";}-->
<ul style="margin:100px; width: 200px;height: 100px;  float: left;;">各部分收入：单位（元）
    <li>网站收入：<?php echo $sdmf; ?></li>
    <li>微信收入：<?php echo $snuf; ?></li>
    <li>培训收入：<?php echo $sf; ?></li>
    
</ul>
<div class="main">
<div id="pie" style="width:500px; height:500px; float: left;"></div>
</div>
<script type="text/javascript">

    $(function () {
    $('#pie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },

        title: {
            text: '雅腾教育各部分收入所占比重'
        },
        tooltip: {
            headerFormat: '{series.name}<br>',
            pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true
                },
                showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: '浏览器访问量占比',
            data: [
                ['网站收入',<?php echo $sdmf; ?>],
                ['微信收入',<?php echo $snuf; ?>],
                {
                    name: '培训收入',
                    y:<?php  echo $sf; ?>,
                    sliced: true,
                    selected: true
                },
                
            ]
        }]
    });
});
</script>
</body>
</html>

