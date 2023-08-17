<?php
	require'config.php';
?>
<?php
	if (isset($_POST["them"])){
		$Name = $_POST["Name"];
		$Email = $_POST["Email"];
		$Address = $_POST["Address"];
		
		$qr = "insert into `hocsinh`(ID, Name, Email, Address)
		values (NULL, '$Name', '$Email', '$Address')";
		if($qry = mysqli_query($connect, $qr)){
			header ("location: index.php");
		}else {
			echo "thêm mới thất bại";
		}
	}
?>
<form method = "POST" action = "">
	
	<label>NHẬP TÊN</label>
	</br>
	<input type = "text" name = "Name">
	</br>
	<label>EMAIL</label>
	</br>
	<input type = "text" name = "Email">
	</br>
	<label>ĐỊA CHỈ</label>
	</br>
	<input type = "text" name = "Address">
	</br>

	<input name = "them" type = "submit" value = "them" />
<form>