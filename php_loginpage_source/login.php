<?
	@session_start();
	header("Content-Type: text/html; charset=UTF-8");

?>
<h3>로그인 페이지</h3>
<form action="loginAction.php" method="POST">
<li>ID : <input type="text" name="id"></li>
<li>PW : <input type="password" name="pw"></li>
<input type="submit" value="login">
</form>