<?php 

echo $keys= substr(md5(time()), 0, 16);
?>


<!DOCTYPE html>
<html>
<head>
	<title>AES 128</title>
</head>
<body>
<form action="enkrip.php" method="post" enctype="multipart/form-data">
	<table>
		
		<tr>
			<td>Upload Document</td>
			<td><input type="file" name="doc"><input type="hidden"  value="<?php echo $keys; ?>" name="kunci"></td>
		</tr>
		<tr>
			<td><button type="submit">Encrypt</button></td>
		</tr>
	</table>
</form>
</body>
</html>