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