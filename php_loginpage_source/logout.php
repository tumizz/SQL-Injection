<?
	@session_start();
	unset($_SESSION["id"]); //unset는 세션값 삭제
	session_destroy(); //destroy는 세션 폐기

	echo "<script>location.href='login.php'</script>";

?>