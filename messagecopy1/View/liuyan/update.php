<?php 

header("content-type:text/html;charset=utf-8");

include("..../Model/DB.php");
$obj = new DB();
$obj->pdo();

$id = $_REQUEST['id'];

$res = $obj->select('liuyan',"id=$id");

foreach ($res as $key => $value) {
	
	$data[$key]['id'] = $value['id'];		
	$data[$key]['name'] = $value['name'];
	$data[$key]['title'] = $value['title'];
	$data[$key]['content'] = $value['content'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php foreach ($data as $key => $value): ?>
	<form action="updateto.php" method="post">
		<table border="1">
			<tr>
				<input type="hidden" value="<?php echo $value['id'] ?>" name="id">
				<td>姓名</td>
				<td><input type="text" name="name" id="name" value="<?php echo $value['name'] ?>"></td>
			</tr>
			
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" id="title" value="<?php echo $value['title'] ?>"></td>
			</tr>

			<tr>
				<td>内容</td>
				<td><textarea name="content" id="content" cols="30" rows="10"><?php echo $value['content'] ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="确认" onclick="submitpost()"></td>
			</tr>
		</table>
	</form>
<?php endforeach ?>
</body>
</html>