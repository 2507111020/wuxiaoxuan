<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="liuyanto.php" method="post">
		<table border="1">
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" id="title"></td>
			</tr>

			<tr>
				<td>内容</td>
				<td><textarea name="content" id="content" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="确认" onclick="submitpost()"></td>
			</tr>
		</table>
	</form>
</body>
</html>