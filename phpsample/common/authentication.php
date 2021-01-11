<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'セッションが切れています<br>';
    print 'ログイン画面からやりなおしてください<br>';
    print '<a href="../login/login.php">ログイン画面</a>';
    exit();
}
?>