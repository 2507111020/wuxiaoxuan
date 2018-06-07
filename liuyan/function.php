<?php 

header("content-type:text/html;charset=utf-8");

final class Obj{

	public $rand;
	private static $inst;

	public static function getIns(){
		if(self::$inst instanceof self){
			return self::$inst;
		}else{
			self::$inst = new self;
			return self::$inst;
		}
	}

	private function __clone(){


	}

	private function __construct(){

		mysql_connect('127.0.0.1','root','root');
		mysql_select_db('liuyan');
		mysql_query('set name utf8');
	}

	function insert($table,$arr){

		$str1 = "";
		$str2 = "";
		foreach ($arr as $key => $value) {
			
			$str1.=$key.',';
			$str2.="'$value'".',';
		}

		$key_str = rtrim($str1,',');
		$value_str = rtrim($str2,',');

		$sql = "insert into $table($key_str) values($value_str)";
		$res = mysql_query($sql);
		return $res;
	}

	function select($table,$where=1){

		$sql = "select * from $table where $where";
		$res = mysql_query($sql);
		return $res;
	}

	function delete($table,$where=1){

		$sql = "delete from $table where $where";
		$res = mysql_query($sql);
		return $res;
	}

	function upload($file){

		$path = "./image/".$file['name'];
		$result = move_uploaded_file($file['tmp_name'],$path);
		if($result){
			return $path;
		}
	}

	function save($table,$arr){    //修改
        $str_one = "";
        foreach($arr as $key =>$value){
            $str_one.= $key.'='."'$value'".',';
        }
        $str_one = rtrim($str_one,',');
        $sql = "update $table set $str_one where id =".$arr['id'];
        $res = mysql_query($sql);
        return $res;
    }

    function login($table,$username,$password){

    	$sql = "select username,password from $table where username='$username' and password='$password'";
    	$res = mysql_query($sql);
    	return $res;
    }
}

$obj = Obj::getIns();

?>