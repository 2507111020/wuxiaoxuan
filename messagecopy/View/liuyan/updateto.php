<?php 
header("content-type:text/html;charset=utf-8");

$arr = $_POST;

include("..../Model/DB.php");
$obj = new DB();
$obj->pdo();

$res = $obj->update('liuyan',$arr);
if($res){

 	echo "<script>alert('修改成功');location.href='liuyanlist.php'</script>";
 }else{

 	echo "<script>alert('修改失败');window.location.href='update.php'</script>";
 }

?>