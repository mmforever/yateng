<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{	
	public function login()
	{
		return $this->fetch();
		 		
		}
			
    public function loginsave()
	{
		$infor['name']=$this->request->param("name");
		$infor['password']=$this->request->param("password");	
		$captcha=$this->request->param("captcha");
		
		$result=Db::table('admin')->where($infor)->find();
		if($result)
		 { 
		    if(captcha_check($captcha))//验证验证码		
			{
				
				Session::set('name',$infor['name']);
				
				$this->redirect('Index/index');
			}
			else
			{    
			   $this->redirect('login'); 
			 }	 
		  }	
     }
	 
	
		
	  
	
}
