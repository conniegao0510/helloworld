<?php

class Controller_Base extends Controller
{

	public $settings = NULL;

	public function before()
    {
        parent::before();

        $this->settings = "Connie's";
    }
}
