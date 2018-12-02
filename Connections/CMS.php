<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_CMS = "localhost";
$database_CMS = "crime";
$username_CMS = "admin";
$password_CMS = "imran007";
$CMS = mysqli_connect($hostname_CMS, $username_CMS, $password_CMS,$database_CMS) or trigger_error(mysql_error(), E_USER_ERROR);
?>