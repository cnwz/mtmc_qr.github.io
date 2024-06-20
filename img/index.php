<?php
// 图片文件的路径

$path = $_GET['id'].".png";
if (file_exists($path)) {
    $imagePath=$path;
} else {
    $imagePath=$_GET['id'].".jpg";
}
 
// 确保图片文件存在
if (file_exists($imagePath)) {
    // 设置内容类型为图片
    header('Content-Type: image/jpeg');
 
    // 输出图片文件的内容
    readfile($imagePath);
    exit;
} else {
    // 图片不存在的错误处理
    header('HTTP/1.0 404 Not Found');
    echo 'Image not found!';
}
?>




