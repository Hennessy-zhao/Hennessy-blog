<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Land</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script src="/Hennessy/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/Hennessy/Public/css/bootstrap.min.css"/>
	<script src="/Hennessy/Public/js/bootstrap.js" ></script>
	<link  rel="stylesheet" href="/Hennessy/Public/css/land.css"/>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-md-offset-7" id="land">
				<center>
					<button class="btn btn-success" id="hennessy">博主登陆</button><br/>
					<form action="<?php echo U('Home/Index/land','','');?>" method="post">
						<div id="hiddenn">
							<br/><input type="text" class="form-control" id="name" name="name" placeholder="用户名"><br/>
							<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码"><br/>
							<input type="submit" class="btn btn-primary" name="submit1" value="登陆" style="width:50%;"><br/><br/>
						</div>
						<input type="submit" class="btn btn-success" name="submit2" id="other" value="陌生人随便看看"><br/>
					</form>
				</center>
			</div>
		</div>
	</div>

	<script src="/Hennessy/Public/js/addLoadEvent.js" ></script>
	<script src="/Hennessy/Public/js/land.js" ></script>
</body>
</html>