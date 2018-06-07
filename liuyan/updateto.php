<?php 

// header("content-type:text/html;charset=utf-8");
// mysql_connect('127.0.0.1','root','root');
// mysql_select_db('liuyan');
// mysql_set_charset('set name utf8');

// $name = $_POST['name'];
// $title = $_POST['title'];
// $content = $_POST['content'];

// $sql = "insert into liuyan(name,title,content) values('$name','$title','$content')";
// $res = mysql_query($sql);
// if($res){

// 	echo "<script>alert('发送留言成功');window.location.href='liuyanlist.php'</script>";
// }else{

// 	echo "<script>alert('发送留言失败');window.location.href='liuyan.php'</script>";
// }

header("content-type:text/html;charset=utf-8");

$arr = $_POST;

include("function.php");

$res = $obj->save('liuyan',$arr);
if($res){

 	echo "<script>alert('修改成功');location.href='liuyanlist.php'</script>";
 }else{

 	echo "<script>alert('修改失败');window.location.href='update.php'</script>";
 }

?>