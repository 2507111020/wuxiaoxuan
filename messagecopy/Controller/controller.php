<?php  
namespace Controller;
class Controller
{
	public $assign;

	public function display($filePath){

		// print_r($this->assign);die;
		// extract($this->assign);
    	include '/View/'.$filePath.'.php';
    }

    public function assign($key,$value){

    	$this->assign[$key] = $value;
    }
}