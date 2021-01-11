<?php
if (empty($_POST)) {
    print 'ログイン画面から操作してください<br>';
    print '<a href="login.php">ログイン画面</a>';
}
else {
    try {
        $code = $_POST['code'];
        $password = $_POST['password'];
        $code = htmlspecialchars($code, ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
        $password = md5($password);

        $dsn = 'mysql:dbname=phpsample;host=localhost;charset=utf8';
        $user = 'root';
        $DBpassword = '';
        $dbh = new PDO($dsn, $user, $DBpassword);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT name FROM users_new WHERE id = ? and password = ?';
        $stmt = $dbh->prepare($sql);
        $data[] = $code;
        $data[] = $password;
        $stmt->execute($data);
        $dbh = null;
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result == null) {
            print '社員コードかパスワードが間違っています<br>';
            print '<a href="login.php">戻る</a>';
        } else {
            session_start();
            $_SESSION['login'] = 1;
            $_SESSION['code'] = $code;
            $_SESSION['name'] = $result['name'];
            header('Location:../top/top.php');
            exit();
        }
    } catch (Exception $e) {
        print 'ログイン時にエラーが発生しました<br>';
        print '<a href="login.php">戻る</a>';
        exit();
    }
}
?>
