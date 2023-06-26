<?php
include('../../config.php');
session_start();
$user_check = $_SESSION['username'];
$ses_sql = mysql_query("select username from users where username='$user_check'", $mysqli);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['username'];
if (!isset($login_session)) {
    mysql_close($connection);
    header('Location: index.php');
}
