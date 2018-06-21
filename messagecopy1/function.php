<?php 

function C($key){

	global $config;
	return $config[$key];
}

function __autoload($className){
	
	include './'.$className.'.php';
}

function url($controller,$action,$param=array()){

	$url = APP_HOST.'/index.php?c='.$controller.'&a='.$action;
	
	if(!empty($url)){

		foreach ($param as $key => $value) {
			
			$url.='&'.$key.'='.$value;
		}
	}

	return $url;
}

function redirect($url){


}

function getImg($imgSrc){

	return APP_HOST.'/public/img/'.$imgSrc;
}

function getJs($jsSrc){

	
}

function getCss($cssSrc){

	
}

 ?>