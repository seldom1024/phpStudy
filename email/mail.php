<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
function check($field)
{
    // filter_var() 过滤 e-mail
    // 使用 FILTER_SANITIZE_EMAIL
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() 过滤 e-mail
    // 使用 FILTER_VALIDATE_EMAIL
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_REQUEST['email'])) { // 如果接收到邮箱参数则发送邮件
    if (!check($_REQUEST['email'])) {
        echo '非法输入';
    } else {// 发送邮件
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        //仅限Windows）当PHP直接与SMTP服务器通信时，如果在行首发现句号，则会将其删除。要解决此问题，请用双点代替这些出现。
        $message = str_replace("\n.", "\n..", $_REQUEST['message']);
        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap($message, 70, "\r\n");
        if (mail("zhangqipaq@163.com", $subject, $message, "From:" . $email)) {
            echo "邮件发送成功";
        } else {
            echo '出错';
        }
    }
} else { // 如果没有邮箱参数则显示表单
    echo "<form method='post' action='mail.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
}
?>

</body>
</html>