<?php  
namespace Controller\Home;
use Controller\Controller;
use Model\DB;
class User extends Controller
{

	public function login()
	{

		// $user = [

		// 	'id'=>1,
		// 	'name'=>'张三'
		// ];
		// $this->assign('user',$user);
		// $this->assign('is_rich','不是');
		
		// $db = new DB();
		$this->display('user/user');
	}

	public function loginto($table,$username,$password)
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
		$res = $this->loginto('login',$usernme,$password);
		foreach ($res as $key => $value) {
			
			$data[$key]['username'] = $value['username'];
			$data[$key]['password'] = $value['password'];
		}
		if($data){

			echo "<script>alert('登陆成功');</script>";
			header('location:http://127.0.0.1/messagecopy/View/liuyan/liuyan.php');
		}else{

			echo "<script>alert('登陆失败');</script>;";
			header('location:http://127.0.0.1/messagecopy/index.php');
		}

	}

	public function register()
	{
		include("user/regin.php");
	}

	public function doRegister()
	{
		$obj = new DB();
		$obj->pdo();

		$arr = $_POST;

		$res = $obj->add('login',$arr);

		if($res){

			echo "<script>alert('注册成功');location.href='user/user.php';</script>;";
		}else{

			echo "<script>alert('注册失败');</script>;";
		}
	}
}

// $act = isset($_GET['act'])?$_GET['act']:'login';
// $user = new User();
// $user->$act();