<meta charset="UTF-8"/>
<body>
<div id="div_1"></div>
<input type="button" id="stop" name="stop" value="暂停"/>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    var t;
    $(function () {
        getMyTime()
    });

    function getMyTime() {
        $.ajax({
            url: "mytime.php",
            success: function (result) {
                $("#div_1").html(result);
                console.log(result);
            }
        });
        t = setTimeout(getMyTime, 1000)
    }

    $("#stop").click(function () {
        clearTimeout(t)
    })
</script>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/4/8
 * Time: 10:35
 */