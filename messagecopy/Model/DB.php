<?php  
namespace Model;

class DB
{

	public $pdo;

	public function __construct(){

		$db = C('db');

    	$this->pdo = new \PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'],$db['username'],$db['password']); 
		
    }

	public function add($table,$arr)
	{

		// $pdo = $this->pdo();
		$str1 = "";
		$str2 = "";
		foreach ($arr as $key => $value) {
			
			$str1.=$key.',';
			$str2.="'$value'".',';
		}

		$key_str = rtrim($str1,',');
		$value_str = rtrim($str2,',');

		$sql = "insert into $table($key_str) values($value_str)";
		$res = $this->pdo->exec($sql);
		return $res;
	}

	public function select($table,$where=1)
	{

		// $pdo = $this->pdo();
		$sql = "select * from $table where $where";
		$res = $this->pdo->query($sql);
		return $res;
	}

	public function delete($table,$where=1)
	{
		// $pdo = $this->pdo();
		$sql = "delete from $table where $where";
		$res = $this->pdo->exec($sql);
		return $res;
	}

	public function update($table,$arr)
	{
		// $pdo = $this->pdo();
        $str_one = "";
        foreach($arr as $key =>$value){
            $str_one.= $key.'='."'$value'".',';
        }
        $str_one = rtrim($str_one,',');
        $sql = "update $table set $str_one where id =".$arr['id'];
        $res = $this->pdo->exec($sql);
        return $res;
    }

    public function cha($sql)
	{
		$res = $this->pdo->query($sql);
		return $res->fetchAll();
    }

 //    public function login($table,$username,$password)
	// {
	// 	$pdo = $this->pdo();
	// 	$sql = "select * from $table where username='$username' and password='$password'";
 //    	$res = $pdo->query($sql);
 //    	return $res;
	// }
    
}