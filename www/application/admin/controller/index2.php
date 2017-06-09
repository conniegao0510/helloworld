<?php
namespace app\admin\controller;
use think\controller;
use think\Request;
use think\Db;

class Index2 extends Controller
{
    public function index($name = 'zhangsan')
    {
    	//print_r($this->request->param());
    	$data = Db::name('User')->find();
    	//print_r($data);
    	
    }

    public function index2($name = '张三')
    {
    	return "index2";
    }
}
