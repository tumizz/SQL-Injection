<?
	@session_start();
	header("Content-Type: text/html; charset=UTF-8;");

	$db_conn = new mysqli("localhost", "root", "gh1015", "login_example"); #host, db id, db pw, db name

	$id = $_POST["id"]; # $_GET, $_POST, $_REQUEST
	$pw = md5($_POST["pw"]);

	$query = "select * from member where id='{$id}' and pw='{$pw}'"; #php는 ""안에 중괄호로 변수를 입력할 수 있음 
	$tmp = $db_conn->query($query);
	$cnt = $tmp->num_rows;
	$user = $tmp->fetch_assoc();

	if($cnt==0) {
		echo "<script>alert('id or pw가 잘못되었습니다.');history.back(-1);</script>";
	}

	$_SESSION["id"] = $user["id"];

	echo "<script>location.href='index.php';</script>";
?>