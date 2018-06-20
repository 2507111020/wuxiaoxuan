<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="index.php/<?php echo url('user','doLogin','') ?>" method="post">
		<table border="1">
			<tr>
				<td>账号</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="登录"></td>
			</tr>
		</table>
	</form>
</body>
</html>