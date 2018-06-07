<?php 

header("content-type:text/html;charset=utf-8");

$id = $_GET['id'];

include("function.php");

$res = $obj->delete('liuyan',"id=$id");
if($res){

	echo "<script>alert('删除成功');location.href='liuyanlist.php';</script>";
}else{

	echo "删除失败";
	header("location:liuyanlist.php");
}

 ?>