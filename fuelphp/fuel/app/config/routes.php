<?php
return array(
	'_root_'  => 'login/index',  // The default route
	'_404_'   => 'login/404',    // The main 404 route
	
	'welcome(/:name)?' => array('login/hello', 'name' => 'hello'),
);
