<?php namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Tranee extends Controller
{
	public function _initialize()
	{
		if(!Session::has('name'))
		{
		  $this->redirect('Login/login');
        }
	}
	
	public function tranee_list()
		{ 
		    $list=Db::table('tranee')->order('id desc')->paginate(8);
			$page=$list->render();
			$data["list"]=$list;
			$data["page"]=$page;					
			return $this->fetch('tranee/tranee_list',$data);
			
			}
		
	public function tranee_add()
	{ 
	    return $this->fetch();
		
		}
	
	public function tranee_addsave()
	{ 
	    $name=$this->request->param('name');
		$sex=$this->request->param('sex');
		$address=$this->request->param('address');
		$major=$this->request->param('major');
		$fee=$this->request->param('fee');
		$pay=$this->request->param('pay');
		$state=$this->request->param('state');
		$qq=$this->request->param('qq');
		$phone=$this->request->param('phone');
		$school=$this->request->param('school');
		$intake=$this->request->param('intake');
		$company=$this->request->param('company');
		
		$image=request()->file('image');
		$url=ROOT_PATH.'public'.DS.'uploads';			
		$info=$image->move($url);
		if($info)
		{
			$savename=$info->getSaveName();
			
			}			
					
		$data=[
		'name'=>$name,'sex'=>$sex,'address'=>$address,'major'=>$major,'fee'=>$fee,
		'pay'=>$pay, 'state'=>$state,'qq'=>$qq,'phone'=>$phone,'school'=>$school,'intake'=>$intake,'company'=>$company,'image'=>$savename];
		$result=Db::table('tranee')->insert($data);
		if($result)
		{
			$this->redirect('tranee_list');
			}		
	}
		
		
		
	public function xinziadd()
	{
		$id=$this->request->param('id');
		$data['id']=$id;
		return $this->fetch('Tranee/xinziadd',$data);
		
	}
		
		
		
	public function xinziaddsave()
	{
		$id=$this->request->param('id');
		$name=$this->request->param('traneename');
		$year=$this->request->param('year');
		$pay=$this->request->param('pay');
		
		$data=[
		  'traneeid'=>$id,
		  'traneename'=>$name,
		  'year'=>$year,
		  'pay'=>$pay
		];
		
		$result=Db::table('xinzi')->insert($data);
		if($result)
		{
			$this->redirect('Tranee/tranee_list');
			
			}
		
	}	
	
	public function tranee_detail()
	{
		$id=$this->request->param('id');
		$row=Db::table('tranee')->where('id',$id)->find();
		
		$id=$row['id'];
		$name=$row['name'];
		$sex=$row['sex'];
		$address=$row['address'];
		$major=$row['major'];
		$fee=$row['fee'];
		$qq=$row['qq'];
		$phone=$row['phone'];
		$school=$row['school'];
		$intake=$row['intake'];
		$company=$row['company'];
		
		$str="";
		$str.="<tr>
			   <td><input type='checkbox' id='chose' name='id'/></td>";
		$str.="<td>".$id."</td>";
		$str.="<td>".$name."</td>";
		$str.="<td>".$sex."</td>";
		$str.="<td>".$address."</td>";
		$str.="<td>".$major."</td>";
		$str.="<td>".$fee."</td>";
		$str.="<td>".$qq."</td>";
		$str.="<td>".$phone."</td>";
		$str.="<td>".$school."</td>";
		$str.="<td>".$intake."</td>";
		$str.="<td>".$company."</td></tr>";	
		
	$data["str"] = $str;					
	return $this->fetch('tranee/tranee_detail',$data);
		
	}
	
	public function tranee_update()
	{
		$id=$this->request->param('id');
		$row=Db::table('tranee')->where('id',$id)->find();
		
		$id=$row['id'];
		$name=$row['name'];
		$sex=$row['sex'];
		$address=$row['address'];
		$major=$row['major'];
		$fee=$row['fee'];
		$pay=$row['pay'];
		$state=$row['state'];
		$qq=$row['qq'];
		$phone=$row['phone'];
		$school=$row['school'];
		$intake=$row['intake'];
		$company=$row['company'];
		$image=$row['image'];
		
		
		$data['id']=$id;
		$data['name']=$name;
		$data['sex']=$sex;
		$data['address']=$address;
		$data['major']=$major;
		$data['fee']=$fee;
		$data['pay']=$pay;
		$data['state']=$state;
		$data['qq']=$qq;
		$data['phone']=$phone;
		$data['school']=$school;
		$data['intake']=$intake;
		$data['company']=$company;
		$data['image']=$image;
		
	    return $this->fetch('tranee/tranee_update',$data);	
		
	}
		
		
	public function tranee_updatesave()
	{
		$id=$this->request->param('id');
		$name=$this->request->param('name');
		$sex=$this->request->param('sex');
		$address=$this->request->param('address');
		$major=$this->request->param('major');
		$fee=$this->request->param('fee');
		$pay=$this->request->param('pay');
		$state=$this->request->param('state');
		$qq=$this->request->param('qq');
		$phone=$this->request->param('phone');
		$school=$this->request->param('school');
		$intake=$this->request->param('intake');
		$company=$this->request->param('company');
		
		$image=request()->file('image');
		$url=ROOT_PATH.'public'.DS.'uploads';			
		$info=$image->move($url);
		if($info)
		{
			$savename=$info->getSaveName();
			
			}			
					
		$data=[
		'name'=>$name,'sex'=>$sex,'address'=>$address,'major'=>$major,'fee'=>$fee,
		'pay'=>$pay, 'state'=>$state,'qq'=>$qq,'phone'=>$phone,'school'=>$school,'intake'=>$intake,'company'=>$company,'image'=>$savename];
		$result=Db::table('tranee')->where('id',$id)->update($data);
		if($result)
		{
			$this->redirect('tranee/tranee_list');
			}		
	}
				
		
	public function tranee_delete()
	{
		$ids=$this->request->param('ids/a');
		foreach( $ids as $id)
		{
		   $result=Db::table('tranee')->where('id',$id)->delete();
		}
		if($result)
		{
			$this->redirect('tranee_list');
			}	
		}	
		
		
		public function pay_analyse()
		{
			return $this->fetch('Tranee/pay_analyse');			
		}
		
		public function xinzicha()
		{
			
		    $intake=$this->request->param('year');

			$namearr=Db::table('xinzi')->alias("x")
					->field('x.traneename')
			        ->join('tranee t','x.traneeid=t.id')
			        ->where('t.intake',$intake)
			        ->select();

	        $yeararr=Db::table('xinzi')->alias("x")
					->field('x.year')
			        ->join('tranee t','x.traneeid=t.id')
			        ->where('t.intake',$intake)
			        ->select();
	        $len=count($yeararr);

	      
	        for($i=0;$i<$len;$i++)
	        {
	        	$result=Db::table("xinzi")
	        					->where('year',$yeararr[$i]["year"])
	        					->field("pay")
	        					->select();
				$l=count($result);
				for($j=0;$j<$l;$j++)
                {
	        		$data[$j]=$result[$j]["pay"];
	        	}
	        	$list=["name"=>$yeararr[$i]["year"],
	        		   "data"=>$data];
	        			
            }   
	     	$list = json_encode($list);
		   	$data=['namearr'=>$namearr,'list'=>$list];
			return $this->fetch('tranee/xinzicha',$data);

			
			
		}
		
}
?>	
	
