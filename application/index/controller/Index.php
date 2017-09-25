<?php namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use think\Request;

class Index extends Controller
{
	public function _initialize()
	{
		if(!Session::has('name'))
		{
		  $this->redirect('Login/login');
		    }
		
		
		}
		
		
	public function index()
	{
		return $this->fetch();		
		}
	
	
	
	public function back()
	 {
		 
		 }
	 
	 public function about()
	 {
		return $this->fetch('Index/about');
		 
		 }
	
	public function loginout()
	{
		Session::clear();
		return $this->redirect('Login/login');
		
		}
	
	






}

?>