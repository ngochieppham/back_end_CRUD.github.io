<?php
include'config.php';
	$query = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Danh sách</title>
</head>
<body>
	<div class = "title">
		<p>Danh sách học sinh</p>
	</div>
	<div class = "button" >
		<a href = "them.php">
			<button>THÊM MỚI</button>
		</a>
	</div>
	<div class = "danhsach">
		<div class = "list">
			<table>
				<tr>
					<th>ID</th>
					<th>Tên</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Chức năng</th>
				</tr>
				<?php
					while($row = mysqli_fetch_assoc($query)){
				?>
				<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['Address']; ?></td>
					<td><a href = "sua.php?ID=<?php echo $row['ID'];?>">Sửa</a>|<a href = "xoa.php?ID=<?php echo $row['ID'];?>">Xóa</a></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</body>
</html>