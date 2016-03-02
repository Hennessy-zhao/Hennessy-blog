<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>说说</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script type="text/javascript" src="/hennessy/Public/js/jquery-2.2.0.js"></script>
	<link  rel="stylesheet" href="/hennessy/Public/css/bootstrap.min.css"/>
	<script src="/hennessy/Public/js/bootstrap.js" ></script>
	<style type="text/css">
		#say_msg
		{
			width: 100%;
			border:1px solid rgba(0, 0, 0, 0.22);
		}

		#say_textarea
		{
			width: 100%;
			height: 70px;
			border:0px solid;
		}
	</style>
</head>
<body>
	<div id="say_msg">
		<form action="#" method="post">
			<textarea id="say_textarea"></textarea>
			<div id="say_send">
				<input type="radio" name="select" value="public">公开
				<input type="radio" name="select" value="private">不公开
				<button class="btn btn-success"></button>
			</div>
		</form>

	</div>

	
</body>
</html>