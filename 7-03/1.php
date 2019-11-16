<html>
<head>
    <meta charset="UTF-8">
    <title>使用AJAX技术无刷新提交数据到服务器</title>
    <script src="http://123.207.88.27/public_libs/jquery.js"></script>
    <script>
        $(function () {
            
            $('#b_1').click(function () {
                $.ajax({
                    type: "get",
                    url: "http://123.207.88.27:58030/server_ajax_check_name_1.php",
                    data: {name: $('#name').val()},
                    function(result) {
						$('#div_result').html(result);
						console.log(result);
					}
                })
            });
        })
    </script>
</head>
<body>
<form id="form_1">
    姓名：<label for="name"></label><input type="text" id="name" name="name"/><br>
    <input type="button" id="b_1" value="提交">
    <div id="div_result"></div>
</form>
</body>
</html>