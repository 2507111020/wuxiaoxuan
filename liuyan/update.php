<?php 

header("content-type:text/html;charset=utf-8");

include("function.php");

$id = $_REQUEST['id'];

$res = $obj->select('liuyan',"id=$id");

while($row = mysql_fetch_assoc($res)){

	$data[]=$row;
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

<script>
// 	function submitpost(){

// 		var name = document.getElementById("name").value;
//  		var title = document.getElementById("title").value;
//  		var content = document.getElementById("content").value;

// 		var ajax = new XMLHttpRequest();
// 		ajax.open('post',"./liuyan");
// 		ajax.send(null);
// 		ajax.onreadystatechange = function(){

// 			if(ajax.readyState==4&&ajax.status==200){

// 				if(ajax.responseText == 1){
// 					document.getElementById('info_sp_name').innerHTML = '已经存在,不能使用该商品名称';
// 					flag=0;
// 				}else{
// 					document.getElementById('info_sp_name').innerHTML = 'OK';
// 					flag=1;
// 				}
// 			}
// 		}
	
// 	}
</script>