<?php  
namespace Controller;
class Message extends Controller
{
	public function add($table,$arr)
	{

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

	public function select($table,$where=1)
	{

		$sql = "select * from $table where $where";
		$res = mysql_query($sql);
		return $res;
	}

	public function delete($table,$where=1)
	{

		$sql = "delete from $table where $where";
		$res = mysql_query($sql);
		return $res;
	}

	public function update($table,$arr)
	{
        $str_one = "";
        foreach($arr as $key =>$value){
            $str_one.= $key.'='."'$value'".',';
        }
        $str_one = rtrim($str_one,',');
        $sql = "update $table set $str_one where id =".$arr['id'];
        $res = mysql_query($sql);
        return $res;
    }
    
}