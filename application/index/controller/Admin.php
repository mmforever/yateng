<?php 
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Admin extends Controller
{
	public function _initialize()
	{
		if(!Session::has('name'))
		{
		  $this->redirect('Login/login');
		    }
		
		
		}

	public function admin_add()
		  { 
			 return $this->fetch();
			  
			  }
			
		
	public function admin_addsave()
	{
		$name=$this->request->param("name");
		$password=$this->request->param("password");
		
		$data=['name'=>$name,'password'=>$password];
		$result=Db::table('admin')->insert($data);
		if($result)
		 {        
			$this->success('新增成功','index/Admin/admin_list',[],1);
			}
		else
		 {
			$this->error('新增失败');
			}
	  }
  
	public function admin_list()
	{
		$list=Db::table('admin')->paginate('5');
		$page=$list->render();
		$data=['list'=>$list,'page'=>$page];
		return $this->fetch('admin/admin_list',$data);
	   
		}
		
		
	public function admin_update()
	{
		$id=$this->request->param('id');
		$result=Db::table('admin')->where('id',$id)->find();
		
		$name=$result['name'];
		$password=$result['password'];
		
		$data=['id'=>$id,'name'=>$name,'password'=>$password];
		
		return $this->fetch('admin/admin_update',$data);	
		}
		
		
	public function admin_updatesave()
	{
		$id=$this->request->param('id');
		$name=$this->request->param('name');
		$password=$this->request->param('password');
		
		$data=['name'=>$name,'password'=>$password];
		$result=Db::table('admin')->where('id',$id)->update($data);
		if($result)
		{ 
		  return $this->redirect('Admin/admin_list');
		  }	
		}
		
		
	public function admin_delete()
	{
		$ids=$this->request->param('ids/a');
		foreach($ids as $id)
		{
			$result=Db::table('admin')->where('id',$id)->delete();
			
			}		
		if($result)
		{
			return $this->redirect('Admin/admin_list');
			
			}
		
	}
}
?>