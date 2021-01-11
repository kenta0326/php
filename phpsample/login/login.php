<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ログインページ</title>
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<script>
function notEmptyCheck() {
	  let code = document.getElementById('code').value;
	  let password = document.getElementById('password').value;
	  if (!code && !password) {
	    alert('必須項目がすべて未入力です');
	    return false;
	  } else if (!code) {
	    alert('社員コードが未入力です');
	    return false;
	  } else if (!password) {
	    alert('パスワードが未入力です');
	    return false;
	  } else {
	    return true;
	  }
}
</script>
<div class="mb-5">
	<h1 class="bg-info">学習用システム</h1>
</div>
<div class="container-fluid">
	<form action="login_check.php" method="post">
	<div class="row text-center">
		<div class="col-xs-12 offset-lg-2 col-lg-4">
			<h2><span class="text-danger">*</span>社員コード</h2>
		</div>
		<div class="col-xs-12  col-lg-4">
			<input type="text" name="code" id="code" class="form-control" maxlength="20">
		</div>
	</div>
	<div class="row mt-4 text-center">
		<div class="col-xs-12 offset-lg-2 col-lg-4">
			<h2><span class="text-danger">*</span>パスワード</h2>
		</div>
		<div class="col-xs-12  col-lg-4">
			<input type="password" name="password" class="form-control" maxlength="20" id='password'>
		</div>
	</div>
	<div class="row mt-4 text-center">
		<div class="col-xs-12  col-lg-12">
			<button class="btn btn-success text-center" name="login" onClick="return notEmptyCheck()">ログイン</button>
		</div>
	</div>
	<br>
	</form>
</div>
<div>
	<hr class="mt-4">
	<p class="offset-5 col-sm-2">Created by Kenta Kihara</p>
</div>
</body>
</html>