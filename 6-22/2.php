<html>
<head>
    <meta charset="UTF-8">
    <title>表单编程</title>
    <script type="text/javascript">
        function checkPassword() {
            if (document.getElementById('password_1').value !== document.getElementById('password_2').value) {
                document.getElementById('div_1').innerHTML = 'error';
            } else {
                document.getElementById('div_1').innerHTML = '';
            }
        }
    </script>
</head>
<body>
<form id="form_1">
    用户注册
    错误提示区:
    <div id="div_1"></div>
    姓名：<label for="name"></label><input type="text" id="name" name="name" value=""/><br/>
    密码1：<label for="password_1"></label><input type="password" id="password_1" name="password_1" value=""/><br/>
    密码2：<label for="password_2"></label><input type="password" id="password_2" name="password_2" value="" onblur="checkPassword()"/><br/>
    <input type="submit" id="ok" name="ok" value="提交"/>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/22
 * Time: 10:30
 */