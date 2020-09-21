<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form accept="my.php" method="POST">
	<table>
		<tr>
			<td>
			<LABEL>Firstname</LABEL>
		</td>
		<td>
			<input type="text" name="Firstname">
		</td>
		</tr>
		<tr>
			<td>
				<input type="Submit" value="Submit" name="">
				Your first name is: <?php echo $_POST['Firstname']; ?><br>
			</td>
		</tr>
	</table>
	</form>

</body>
</html>