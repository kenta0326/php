<?php
if (empty($_POST)) {
    print 'アカウント追加画面から操作してください<br>';
    print '<a href="add.php">アカウント追加画面</a>';
} else {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $password1 = $_POST['password1'];
    $code = htmlspecialchars($code, ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $password1 = htmlspecialchars($password1, ENT_QUOTES, 'UTF-8');
    $password1 = md5($password1);
    try {
        $dsn = 'mysql:dbname=phpsample;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO users_new(id,name,password)VALUES(?,?,?)';
        $stmt = $dbh->prepare($sql);
        $data[] = $code;
        $data[] = $name;
        $data[] = $password1;
        $stmt->execute($data);
        $dbh = null;
        print 'アカウント追加が完了しました<br>';
        print '<a href="add.php">戻る</a>';
    } catch (Exception $e) {
        print '登録時にエラーが発生しました<br>';
        print '<a href="add.php">戻る</a>';
    }
}
?>