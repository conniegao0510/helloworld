<?php

class Controller_Login extends Controller_Auth
{
	
	public function action_index() 
	{
		echo "hello World";
		echo "<br>";
		//echo phpinfo();
	}

	 public function action_conniebaby($name = 'cc')
	 {
	 	$arrayData = array();

	 	$arrayData['name'] = $name;


	 	\Debug::dump($this->settings);

	 	return View::forge('hello/hello', $arrayData);
	 }

	 public function before()
	 {

	 }
}
