<?php
	include'config.php';
	if (isset($_GET["ID"])){
		$ID = $_GET["ID"];
	}else {
		echo "lỗi kết nối";
	}
?>
<?php
	$qr = "delete  from hocsinh
	where ID='$ID'";
	$qry = mysqli_query($connect, $qr);
	header("location: index.php");
?>