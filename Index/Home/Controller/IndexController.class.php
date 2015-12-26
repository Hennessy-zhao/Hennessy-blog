<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display('land');
        }


    public function land()
    {
    	if (isset($_POST['submit1'])) {
    		$name=$_POST['name'];
    		$password=$_POST['password'];
    		if ($name==''||$password=='') {
    			echo"<script language=\"javascript\">";
		       	echo"alert(\"对不起，用户名或密码不能为空！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		       	echo"</script>";
    		}
    		else
    		{
    			if ($name=="Hennessy"&&$password=='hennessy070914') {
    				$this->success("",U('Home/Hennessy/hennessy','',''));
	    		}
	    		else
	    		{
	    			echo"<script language=\"javascript\">";
			       	echo"alert(\"对不起，用户名或密码错误！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
			       	echo"</script>";
	    		}
    		}
    		
    	}
    	if (isset($_POST['submit2'])) {
    		 $this->success("",U('Home/Hennessy/hennessy','',''));
    	}
    }
}