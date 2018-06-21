<?php 
header("content-type:text/html;charset=utf-8");

$arr = $_POST;

include("../../Model/DB.php");
$obj = new DB();
$res = $this->pdo->add('liuyan',$arr);
if($res){

 	echo "<script>alert('发送留言成功');location.href='liuyanlist.php'</script>";
 }else{

 	echo "<script>alert('发送留言失败');window.location.href='liuyan.php'</script>";
 }

?>