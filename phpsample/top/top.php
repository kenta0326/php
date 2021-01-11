<?php
require_once '../common/authentication.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>トップページ</title>
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="mb-5">
	<h1 class="bg-info">学習用システム
</div>
<div class="container">
	<button class="btn btn-danger" onclick="location.href='../add/add.php'">アカウント追加画面</button>
	<button class="btn btn-danger" onclick="location.href='../login/login.php'">ログイン画面</button>
	<div class="row mt-4 text-center">
		<div class="col-lg-12 text-center">
			<hr>
			<button class="btn btn-danger" onclick="location.href='../common/logout.php'">ログアウト</button>
		</div>
	</div>
</div>
<div>
	<hr class="mt-4">
	<p class="offset-5 col-sm-2">Created by Kenta Kihara</p>
</div>
</body>
</html>