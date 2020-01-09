<?php
$file = fopen("while.php", 'r') or exit();
while (!feof($file)) {
    echo fgets($file) . '<br>';
}
fclose($file);
?>

<?php
$fh = fopen("a.csv", "r");//这里我们只是读取数据，所以采用只读打开文件流
$arr = fgetcsv($fh);//这个函数就是读取CSV文件的函数，他把文本读入后转为数组存储在$arr中
fclose($fh);
foreach ($arr as $key => $value) {
    echo $value;
}//循环输出所有的值

//中文
$fpath = iconv('UTF-8', 'GB2312', "题库.csv");
$file = fopen($fpath, "r") or exit("无法打开文件!");
//此处省略相关操作
fclose($file);
?>
