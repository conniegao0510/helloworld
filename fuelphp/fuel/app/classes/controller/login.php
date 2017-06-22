<?php

class Controller_Login extends Controller_Auth
{
	
	// public function action_index() 
	// {
	// 	echo "hello World";
	// 	echo "<br>";
	// 	//echo phpinfo();
	// }

	 public function action_login($name = 'guest')
	 {
	 	$arrayData = array();

	 	$arrayData['name'] = $name;

	 	print_r(this->request-param());
	 	\Debug::dump($this->settings);

	 	//return View::forge('login/login', $arrayData);
	 }

	 public function before()
	 {

	 }
}
