<?php 

// header("content-type:text/html;charset=utf-8");
// mysql_connect('127.0.0.1','root','root');
// mysql_select_db('liuyan');
// mysql_set_charset('set name utf8');

// $sql = "select * from liuyan";
// $res = mysql_query($sql);

header("content-type:text/html;charset=utf-8");

include("function.php");

$res = $obj->select('liuyan');

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
	<table border="1">
	    <tr>
	        <td>编号</td>
	        <td>姓名</td>
	        <td>标题</td>
	        <td>留言内容</td>
	        <td>操作</td>
	    </tr>

	<?php foreach ($data as $key => $value): ?>
	    <tr>
	       	<td><?php echo $value['id']; ?></td>
	       	<td><?php echo $value['name']; ?></td>
	       	<td><?php echo $value['title']; ?></td>
	        <td><?php echo $value['content']; ?></td>
			<td><a href="del.php?id=<?php echo $value['id'] ?>">删除</a>|<a href="update.php?id=<?php echo $value['id'] ?>">修改</a></td>
	<?php endforeach ?>
	    </tr>
	</table>
</body>
</html>