<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($q)) {
    $sites = array(
        'RUNOOB' => '菜鸟教程: http://www.runoob.com',
        'GOOGLE' => 'Google 搜索: http://www.google.com',
        'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach ($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    }

} else {
    ?>
    <form action="" method="post">
        <label>
            <input type="checkbox" name="q[]" value="RUNOOB">
        </label> Runoob<br>
        <label>
            <input type="checkbox" name="q[]" value="GOOGLE">
        </label> Google<br>
        <label>
            <input type="checkbox" name="q[]" value="TAOBAO">
        </label> Taobao<br>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>