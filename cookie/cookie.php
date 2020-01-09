<?php
//设置cookie一小时后过期
setcookie("user", "seldom", time() + 3600);
//echo $_COOKIE['user'];
//print_r($_COOKIE);