<?php
namespace app\admin\controller;
use think\controller;
use think\Request;
use think\Db;

class HelloWorld extends Controller
{
    public function index($name = 'zhangsan')
    {
    	//print_r($this->request->param());
    	$data = Db::name('Users')->find();
    	//print_r($data);
    	$this->assign('data',$data);
    	$this->assign('name',$name);
    	return $this->fetch();

    }

    public function index2($name = '张三')
    {
    	$data = Db::name('User')->find();
    	//print_r($data);
    	$this->assign('data',$data);
    	$this->assign('name',$name);
    	return $this->fetch();
    }
}
