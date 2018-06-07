<?php 

header("content-type:text/html;charset=utf-8");

include("function.php");

// $obj = new Obj();
// $obj->connect();

$username = $_POST['username'];
$password = $_POST['password'];

$res = $obj->login('login',$username,$password);

while($row = mysql_fetch_assoc($res)){

	$data[]=$row;
}

if($data){

	echo "<script>alert('登陆成功');location.href='liuyan.php';</script>";
}else{

	echo "<script>alert('登陆失败');location.href='login.php';</script>";
}

?>