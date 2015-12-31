<?php
namespace Home\Controller;
use Think\Controller;
class HennessyController extends Controller {
		public function hennessy(){     
        $where = "id=1";
        $data=M('good')->where($where)->select();
        $number=$data['0']['goodnumber'];
        $this->assign('number', $number);

    	$this->display('Hennessy');
        }

    public function say()
    {
    	if (I('post.textarea1')==''||I('post.select1')==NULL) {
    		echo"<script language=\"javascript\">";
		    echo"alert(\"对不起，说说信息不能为空！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		    echo"</script>";
    	}
    	else
    	{
    		$textarea=I('post.textarea1');
    	 	$select=I('post.select1');
    	 	if ($select=="public") {
    	 		$hidden=1;
    	 	}
    	 	else if ($select=="unpublic") {
    	 		$hidden=0;
    	 	}

    	 	$data1=array(
				'message'=>$textarea,
				'hidden'=>$hidden,
				'lastdate'=>date('y-m-d h:i:s',time())
			);

						
			$result1=M('say')->add($data1);
			if($result1)
			{
				echo"<script language=\"javascript\">";
		       	echo"location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		       	echo"</script>";
			}
			else
			{
				echo"<script language=\"javascript\">";
			    echo"alert(\"对不起，由于系统原因说说无法生成！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
			    echo"</script>";
			}
    	}
    }

    public function number()
    {
    	$where = "id=1";
        $data=M('good')->where($where)->select();
        $number=$data['0']['goodnumber']+1;

        

		$update['goodnumber']=$number;
		$where['id']=1;				
		$result1=M('good')->where($where)->save($update);
		

    }
}