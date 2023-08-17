<?php
	include'config.php';
	if (isset($_GET["ID"])){
		$ID = $_GET["ID"];
	}else {
		echo "lỗi kết nối";
	}
?>
<?php
	if (isset($_POST["sua"])){
		$Name = $_POST["Name"];
		$Email = $_POST["Email"];
		$Address = $_POST["Address"];
		
		$qr = "update hocsinh set Name='$Name', Email='$Email', Address='$Address'
		where ID='$ID'";
		if($qry = mysqli_query($connect, $qr)){
			header ("location: index.php");
		}else {
			echo "sửa thất bại";
		}
	}
?>
<?php
	$sql  = "SELECT * FROM hocsinh WHERE ID = $ID";
	$qr = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($qr);
?>
<form method = "POST" action = "">
	
	<label>NHẬP TÊN</label>
	</br>
	<input type = "text" name = "Name" value  = "<?php echo $rows['Name']; ?>">
	</br>
	<label>EMAIL</label>
	</br>
	<input type = "text" name = "Email" value  = "<?php echo $rows['Email']; ?>">
	</br>
	<label>ĐỊA CHỈ</label>
	</br>
	<input type = "text" name = "Address" value  = "<?php echo $rows['Address']; ?>">
	</br>

	<input name = "sua" type = "submit" value = "sua" />
<form>
