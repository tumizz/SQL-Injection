<?
	@session_start();
	header("Content-Type: text/html; charset=UTF-8;");

	if(empty($_SESSION["id"])){
		echo "<script>alert('로그인 후 접근이 가능합니다.');location.herf='login.php';</script>";
		exit();

	}
?>

<h3>회원 전용 페이지 입니다.</h3>
<p><?=$_SESSION["id"]?>님 반갑습니다.<p>
<input type="button" onclick="location.href='logout.php'" value="logout">