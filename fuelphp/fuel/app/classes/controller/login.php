<?php

class Controller_Login extends Controller_Auth
{
	
	public function action_index() 
	{
		//create the view
        $view = View::forge('login/login');

        //assign variables for the view
        $view->username = 'Joe14';
        $view->title = 'login_index';

        //another way to assign variables for the view
        $view->set('username', 'Joe14');
        $view->set('title', 'login_index');

        //assign the view to browser output
        return $view;
	}

	 public function action_login($username = 'guest')
	 {
	 	$data = array(); //给视图存储变量

        $data['username'] = $username;
        $data['title'] = 'login';

        //给浏览器输出视图
        return View::forge('login/login', $data);
	 }

	 public function before()
	 {

	 }
}
