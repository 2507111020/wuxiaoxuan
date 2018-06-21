<?php  
namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
class AdminController extends Controller
{
	public function index(){

		$this->display("admin/index");
	}

	public function liuyan(){

		$this->display("admin/liuyan");
	}

	public function liuyanto(){

		$data = $_POST;
		$obj = new DB();
		$res = $obj->add('liuyan',$data);
		if($res){

	 		echo "<script>alert('发送留言成功');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyanlist'</script>";
		}else{

	 		echo "<script>alert('发送留言失败');window.location.href='liuyan.php'</script>";
	 	}
	}

	public function liuyanlist(){

		$obj = new DB();
		$res = $obj->select('liuyan');
		foreach ($res as $key => $value) {
	
			$data[$key]['id'] = $value['id'];		
			$data[$key]['name'] = $value['name'];
			$data[$key]['title'] = $value['title'];
			$data[$key]['content'] = $value['content'];
		}
		$this->assign("data",$data);
		$this->display("admin/liuyanlist");
	}

	public function del(){

		$id = $_GET['id'];
		$obj = new DB();
		$res = $obj->delete('liuyan',"id=$id");
		if($res){

			echo "<script>alert('删除成功');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyanlist'</script>";
		}else{

			echo "<script>alert('删除失败');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyanlist'</script>";
		}
	}

	public function upd(){

		$obj = new DB();
		$id = $_GET['id'];
		$res = $obj->select('liuyan',"id=$id");

		foreach ($res as $key => $value) {
			
			$data[$key]['id'] = $value['id'];		
			$data[$key]['name'] = $value['name'];
			$data[$key]['title'] = $value['title'];
			$data[$key]['content'] = $value['content'];
		}

		$this->assign("data",$data);
		$this->display("admin/updto");
	}

	public function updto(){

		$arr = $_POST;
		$obj = new DB();
		$res = $obj->update('liuyan',$arr);
		if($res){

		 	echo "<script>alert('修改成功');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyanlist'</script>";
		 }else{

		 	echo "<script>alert('修改失败');window.location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyanlist'</script>";
		 }
	}

	public function loginto()
	{

		// $user = [

		// 	'id'=>1,
		// 	'name'=>'张三'
		// ];
		// $this->assign('user',$user);
		// $this->assign('is_rich','不是');
		
		// $db = new DB();
		$this->display('admin/loginto');
	}

	public function logindo($table,$username,$password)
	{	
		$db = new DB();
		$sql = "select * from $table where username='$username' and password='$password'";
    	$res = $db->pdo->query($sql);
    	return $res;
	}

	public function doLogin()
	{

		$usernme = $_POST['username'];
		$password = $_POST['password'];
		$res = $this->logindo('login',$usernme,$password);
		foreach ($res as $key => $value) {
			
			$data[$key]['username'] = $value['username'];
			$data[$key]['password'] = $value['password'];
		}
		if($data){

			echo "<script>alert('登录成功');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyan'</script>";
		}else{

			echo "<script>alert('登录失败');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=liuyan'</script>";
		}

	}

	public function zhuce()
	{
		$obj = new DB();
		$arr = $_POST;
		$res = $obj->add('login',$arr);

		if($res){

			echo "<script>alert('注册成功');location.href='http://127.0.0.1/messagecopy/index.php?c=AdminController&a=loginto';</script>;";
		}else{

			echo "<script>alert('注册失败');</script>;";
		}
	}
}