<?php
return array(
	'_root_'  => 'auth/signin',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'welcome(/:name)?' => array('login/hello', 'name' => 'hello'),

);
