<!--
第一题 Div+CSS编程
    要求如下：
        各div的id如图所示。
        所有的div相对定位，左浮动，border都为实线,1px,红色。
        所有的div的外边距为10px，内边距为10px。
        main的宽为400px，高为270px;
        top的宽为358px,高为20px。
        foot的宽为358px，高为15px。
        left的宽为100px，高为110px。
        right的高为110px。
        div内的文字不为判分条件，有即可。
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Div+CSS编程</title>
    <style>
        div {
            position: relative;
            float: left;
            border: solid 1px #ff0000;
            padding: 10px;
            margin: 10px;
        }

        #main {
            width: 400px;
            height: 270px;
        }

        #top {
            width: 358px;
            height: 20px;
        }

        #foot {
            width: 358px;
            height: 15px;
        }

        #left {
            width: 100px;
            height: 110px;
        }

        #right {
            width: 216px;
            height: 110px;
        }
    </style>
</head>
<body>
<div id="main">
    <div id="top">人民医院网站</div>
    <div id="left">
        <ul>
            <li>内科</li>
            <li>外科</li>
            <li>妇产科</li>
            <li>精神科</li>
        </ul>
    </div>
    <div id="right">
        <ul>
            <li>张医生 坐诊时间 周一</li>
            <li>李医生 坐诊时间 周二</li>
            <li>王医生 坐诊时间 周三</li>
            <li>陈医生 坐诊时间 周四</li>
        </ul>
    </div>
    <div id="foot">版权所有&copy;软件公司</div>
</div>
</body>
</html>