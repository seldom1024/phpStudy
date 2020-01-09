<?php
session_start();
/**
 * 如果没有session就创建，否则自增如果您希望删除某些 session 数据，
 * 可以使用unset() 或 session_destroy()
 * 函数。unset() 函数用于释放指定的 session 变量：
 */
if (isset($_SESSION['views'])) {
    $_SESSION['views']++;
} else{
    $_SESSION['views'] = 1;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：" . $_SESSION['views'];
?>

</body>
</html>
