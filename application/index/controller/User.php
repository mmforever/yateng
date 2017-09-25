<?php namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class User extends Controller
{
	public function _initialize()
	{
		if(!Session::has('name','think'))
		{
		  $this->redirect('Login/login');
		    }	
		}
	public function user_list()
	{
		$list_guan=Db::table('guanwang')->paginate('5');
		$page_guan=$list_guan->render();
		
		$list_wei=Db::table('weixin')->paginate('5');
		$page_wei=$list_wei->render();
		
		$data=['list_guan'=>$list_guan,'page_guan'=>$page_guan,'list_wei'=>$list_wei,'page_wei'=>$page_wei];
		return $this->fetch('User/user_list',$data);
		
		
		
		
		
		
		
		}
	
	public function user_action()
	{
		$ids=$this->request->param('ids/a');
		$btn=$this->request->param('submit');
		if($btn=="删除")
		{
			foreach($ids as $id)
			{
			$result=Db::table('guanwang')->where('id',$id)->delete();
				if($result)
				return $this->redirect('User/user_list');
				}
			}
		else{
		  $id=implode($ids);
		  $leng=strlen($id);
		  if($leng>1 and $leng==0)
		  { 
		    dump("对不起，一次能且只能修改一条记录");
		  }	
		  else{
			  //$id=int($id);
			  
			  $row=Db::table('guanwang')->where('id',$id)->find();
		
			  $id=$row['id'];
			  $companyname=$row['companyname'];
			  $username=$row['username'];
			  $phone=$row['phone'];
			  $domain=$row['domain'];
			  $domain_fee=$row['domain_fee'];
			  $domain_due=$row['domain_due'];
			  $room_due=$row['room_due'];
			  
			  
			  $data=[
			  'id'=>$id,
			  'companyname'=>$companyname,
			  'username'=>$username,
			  'phone'=>$phone,
			  'domain'=>$domain,
			  'domain_fee'=>$domain_fee,
			  'domain_due'=>$domain_due,
			  'room_due'=>$room_due];
			  
			  return $this->fetch('user/guanwang_update',$data);
			  
			  }	
			}
	}

	public function guanwang_updatesave()
	{
		$id=$this->request->param('id');
		$companyname=$this->request->param('companyname');
	    $username=$this->request->param('username');
		$phone=$this->request->param('phone');
		$domain=$this->request->param('domain');
		$domain_fee=$this->request->param('domain_fee');
		$domian_due=$this->request->param('domain_due');
		$room_due=$this->request->param('room_due');
		
		$data=[
		'companyname'=>$companyname,
		'username'=>$username,
		'phone'=>$phone,
		'domain'=>$domain,
		'domain_fee'=>$domain_fee,
		'domain_due'=>$domian_due,
		'room_due'=>$room_due];
		 
		 $result=Db::table('guanwang')->where('id',$id)->update($data);
		 if($result)
		 {
		   return $this->redirect('User/user_list');		 
		 }		
		
}
		
	public function user_analyse()
	{

		$sdmf=Db::table('guanwang')->sum('domain_fee');
		$snuf=Db::table('weixin')->sum('number_fee');
		$sf=Db::table('tranee')->sum('fee');

		$data=['sdmf'=>$sdmf,'snuf'=>$snuf,'sf'=>$sf];
		return $this->fetch('user/user_analyse',$data);		
		}
	
	
	
	public function user_add()
	{
		return $this->fetch('user/user_add');
		
		}	
		
	public function guanwang()
	{
		return $this->fetch('user/guanwang');
		
		}
		
		
	public function guanwang_addsave()
	{
		$companyname=$this->request->param('companyname');
	    $username=$this->request->param('username');
		$phone=$this->request->param('phone');
		$domain=$this->request->param('domain');
		$domain_fee=$this->request->param('domain_fee');
		$domian_due=$this->request->param('domain_due');
		$room_due=$this->request->param('room_due');
		
		$data=[
		'companyname'=>$companyname,
		 'username'=>$username,
		 'phone'=>$phone,
		 'domain'=>$domain,
		 'domain_fee'=>$domain_fee,
		 'domain_due'=>$domian_due,
		 'room_due'=>$room_due];
		 
		 $result=Db::table('guanwang')->insert($data);
		 if($result)
		 {
			 $this->redirect('User/user_list');
			 }
		 
		
		
		}
		
	
	public function weixin()
	{
		return $this->fetch('user/weixin');
		
		}	
		
	public function weixin_addsave()
	{
		
		$companyname=$this->request->param('companyname');
	    $username=$this->request->param('username');
		$phone=$this->request->param('phone');
		$public_number=$this->request->param('public_number');
		$number_fee=$this->request->param('number_fee');
		$deve_time=$this->request->param('deve_time');
		
		$data=[
		'companyname'=>$companyname,
		 'username'=>$username,
		 'phone'=>$phone,
		 'public_number'=>$public_number,
		 'number_fee'=>$number_fee,
		 'deve_time'=>$deve_time,
		 ];
		 $result=Db::table('weixin')->insert($data);
		 if($result)
		 {
			 $this->redirect('User/user_list');
			 }
		
		}
		
		

}
?>	
	