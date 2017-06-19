<?php

class Controller_Hi extends Controller_Base
{
	
	public function action_index() 
	{
		echo "hello World";
		echo "<br>";
		//echo phpinfo();
	}
	 public function action_connie($name = 'cc')
	 {
	 	$arrayData = array();

	 	$arrayData['name'] = $name;

	 	return View::forge('hello/hello', $arrayData);
	 }

}
