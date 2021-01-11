<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name() == true])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy();
print 'ログアウトしました<br>';
print '<a href="..login//login.php">ログイン画面</a>';
exit();
?>