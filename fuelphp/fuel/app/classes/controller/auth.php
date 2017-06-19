<?php

class Controller_Auth extends Controller_Base
{
	public function before()
    {
        parent::before();

        $stringURI = \Uri::string();
        var_dump($stringURI);

        if ($stringURI != 'auth/signin')
        {
	        $getUserName = \Session::get('username');
	        var_dump($getUserName);

	        if (!$getUserName)
	        {
                \Response::redirect(\Uri::create('auth/signin'));
	        }
        }

         \Debug::dump($this->settings);

        
    }


    public function action_signin()
    {
        
        echo \Date::time_ago(time() - 600);   //Date::time()  = time()

    	//echo \Date::forge(1294176140, "Europe/London")->get_timezone();

    	//echo \Crypt::encode('Connie');  //Salt
    }

    public function action_signup()
    {


    }

    public function action_forgot()
    {


    }


}
