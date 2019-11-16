<!--
第二题 使用AJAX技术无刷新提交数据到服务器
    要求如下：
        表单id为form_1，姓名输入框id为name，name为name。
        提交按钮类型为button，id为b_1，点击提交数据到服务器,提交方式post
        提交成功后，把服务器返回的数据显示在div中,div的id为div_1
        服务器处理程序的地址为"/public_libs/server_ajax_post_1.php"
        jquery的引入地址为"/public_libs/jquery.js"（注此项非强制）
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>使用AJAX技术无刷新提交数据到服务器</title>
    <script type="text/javascript" src="/public_libs/jquery.js"></script>
    <script>
        $(function () {
            $("#ok").click(function () {
                $.post(
                    "/public_libs/server_ajax_post_1.php",
                    {name: $("#name").val()},
                    function (result) {
                        $("#div_1").html(result);
                    }
                );
            });
        });
    </script>
</head>
<body>
<form id="form_1" method="post">
    姓名：<input id="name" name="name">
    <input type="button" id="ok" value="提交">
</form>
<div id="div_1"></div>
</body>
</html>