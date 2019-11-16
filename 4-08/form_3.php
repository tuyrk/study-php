<meta charset="UTF-8"/>
<body>
<?php
if (isset($_POST['ok'])) {
    $file_name = $_FILES['myfile']['name'];
    $tmp_name = $_FILES['myfile']['tmp_name'];
    if (strpos($file_name, '.php') != 0) {
        echo "上传了非法文件<br/>";
        exit();
    }

    echo "<pre>";
    var_dump($_POST);
    var_dump($_FILES);//提交的文件信息是封装到这个全局变量中的。
    echo $file_name."<br/>";
    echo $tmp_name."<br/>";
    echo "</pre>";


    $dir = iconv("UTF-8", "GBK", "upload/img");
    //iconv方法是为了防止中文乱码，保证可以创建识别中文目录，不用iconv方法格式的话，将无法创建中文目录
    if (!file_exists($dir)) {
        mkdir($dir, 077, true);
        //mkdir方法的第一个参数是要创建的目录路径，第二个参数是指创建目录的权限，在windows系统下该参数会被忽略，第三个参数是指是否创建多级目录，默认为false
        echo "文件夹创建成功<br/>";
    }

    $file_name = "./upload/" . $file_name.uniqid();
    if (move_uploaded_file($tmp_name, $file_name)) {
        echo "上传成功<br/>";
    } else {
        echo "上传失败<br/>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" id="myfile" name="myfile" value=""/>
    <input type="submit" id="ok" name="ok" value="提交"/>
</form>
文件列表<br/>
<a href="<?php echo $file_name ?>"><?php echo $file_name ?></a>
</body>