<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_COOKIE['user'])) {
    echo '欢迎' . $_COOKIE['user'];
} else {
    echo '欢迎新手';
}
?>

</body>
</html>
