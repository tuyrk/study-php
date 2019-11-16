<html>
<head>
    <meta charset="UTF-8">
    <title>实现ACL功能</title>
    <script>
        function header() {
            var php = document.getElementById('php').value;
            var role = document.getElementById('role').value;
            if (php === '' || role === '') {
                alert('请选择页面或权限');
                return;
            }
            window.location.href = php + ".php?role=" + role;
        }
    </script>
</head>
<body>
<label for="php"></label><select id="php">
    <option value="">请选择页面</option>
    <option value="p_1">p_1</option>
    <option value="p_2">p_2</option>
    <option value="p_3">p_3</option>
</select>
<label for="role"></label><select id="role">
    <option value="">请选择权限</option>
    <option value="cto">cto</option>
    <option value="manager">manager</option>
    <option value="staff">staff</option>
</select>
<input type="button" value="ok" onclick="header()"/>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/20
 * Time: 23:13
 */