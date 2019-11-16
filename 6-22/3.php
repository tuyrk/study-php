<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        window.onload = function () {
            document.getElementById("name").value = localStorage.name;
            console.log(localStorage.name);
        };

        function save() {
            localStorage.name = document.getElementById("name").value;
        }
    </script>
</head>
<body>
<form>
    姓名：<label for="name"></label><input type="text" id="name"/>
    <input type="button" id="ok" onclick="save()" value="提交"/>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/22
 * Time: 10:46
 */