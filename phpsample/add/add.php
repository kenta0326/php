<?php
require_once '../common/authentication.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>アカウント追加ページ</title>
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<script>
function notEmptyCheck() {
	  let code = document.getElementById('code').value;
	  let name = document.getElementById('name').value;
	  let password1 = document.getElementById('password1').value;
	  let password2 = document.getElementById('password2').value;
	  if (!code || !name || !password1 || !password2) {
	    alert('未入力の項目があります');
	    return false;
	  } else {
	    return passwordCheck();
	  }
}
function passwordCheck() {
	  let password1 = document.getElementById('password1').value;
	  let password2 = document.getElementById('password2').value;
	  let continueFlg = false;
	  if (password1 == password2) {
	    continueFlg = window.confirm('本当に登録しますか?');
	  } else {
	    alert('パスワードが一致しません');
	    return false;
	  }
	  if (!continueFlg) {
	    alert('キャンセルされました');
	    return false;
	  }
	  return true;
}
function codeCheck() {
	  let code = document.getElementById("code").value;
	  let pattern = '^[0-9a-zA-Z]*$';
	  if (code.match(pattern) == null) {
	    alert('社員コードは半角英数字で入力してください');
	    document.getElementById("code").value = "";
	  }
}
function password1Check() {
	  let password1 = document.getElementById("password1").value;
	  let pattern = '^[0-9a-zA-Z&?-]*$';
	  if (password1.match(pattern) == null) {
	    alert('パスワード制約を満たしていません');
	    document.getElementById("password1").value = "";
	  }
}
</script>
<div class="mb-5">
	<h1 class="bg-info">学習用システム
</div>
<div class="container">
	<form action="add_operation.php" method="post">

	<div class="row text-center">
		<div class="col-xs-12 offset-lg-2 col-lg-4">
			<h2><span class="text-danger">*</span>社員コード</h2>
		</div>
		<div class="col-xs-12  col-lg-4">
			<input type="text" name="code" id="code" class="form-control" maxlength="20" onChange="codeCheck();">
		</div>
	</div>
	<div class="row mt-4 text-center">
		<div class="col-xs-12 offset-lg-2 col-lg-4">
			<h2><span class="text-danger">*</span>社員名</h2>
		</div>
		<div class="col-xs-12  col-lg-4">
			<input type="text" name="name" id="name" class="form-control" maxlength="20">
		</div>
	</div>
	<div class="row mt-4 text-center">
		<div class="col-xs-12 offset-lg-2 col-lg-4">
			<h2><span class="text-danger">*</span>パスワード</h2>
		</div>
		<div class="col-xs-12  col-lg-4">
			<input type="password" name="password1" class="form-control" maxlength="20" id='password1' onChange="password1Check();">
		</div>
	</div>
	<div class="row mt-4 text-center">
		<div class="col-xs-12 offset-lg-2 col-lg-4">
			<h2><span class="text-danger">*</span>パスワード(確認用)</h2>
		</div>
		<div class="col-xs-12 col-lg-4">
			<input type="password" name="password2" class="form-control" maxlength="20" id='password2'>
		</div>
	</div>
	<div class="row mt-4 text-center">
		<div class="col-xs-12 col-lg-12 text-center">
			<button class="btn btn-success" name="register" onclick="return notEmptyCheck();">登録</button>
		</div>
	</div>
	<br>
	<div class="text-left offset-5">
		※パスワード制約<br>
		・20文字以内であること<br>
		・半角英数字 or 一部の記号(&,?,-)<br>
	</div>
	</form>
	<div class="row mt-4 text-center">
		<div class="col-lg-12 text-center">
			<hr>
			<button class="btn btn-danger" onclick="location.href='common/logout.php'">ログアウト</button>
		</div>
	</div>
</div>
<div>
	<hr class="mt-4">
	<p class="offset-5 col-sm-2">Created by Kenta Kihara</p>
</div>
</body>
</html>