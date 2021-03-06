<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Hennessy's World~~</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script src="/hennessy/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/hennessy/Public/css/bootstrap.min.css"/>
	<script src="/hennessy/Public/js/bootstrap.js" ></script>
	<link  rel="stylesheet" href="/hennessy/Public/css/hennessy.css"/>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" id="top">
				<div class="row">
					<div class="col-md-4" id="poet">
						<p id="tp1" class="p1">生者为过客&nbsp&nbsp死者为归人</p>
						<p id="tp2" class="p1">天地一逆旅&nbsp&nbsp同悲万古尘</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="title">
				<center><p class="p2">
					<a href="<?php echo U('Home/Index/index','','');?>" class="a1" id="home1">首页</a>
					<a href="#" class="a1" id="say1">说说</a>
					<a href="#" class="a1" id="study1">学习日志</a>
					<a href="#" class="a1" id="message1">留言板</a>
					<a href="#" class="a1" id="photo1">相册</a>
				</p></center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="container">
				<div class="row">
					<div class="col-md-12" id="body">
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-9" id="bleft">
									<div class="column">
										<div class="col-md-12" id="time">
											<embed wmode="transparent" src="http://chabudai.sakura.ne.jp/blogparts/honehoneclock/honehone_clock_wh.swf" quality="high" bgcolor="#ffffff" width="100%" height="100" name="honehoneclock" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
										</div>
										<div class="col-md-12" id="logo">
											<div class="column">
												<div class="col-md-12" id="picture">
													<img src="/hennessy/Public/css/pic/005.jpg" class="img-thumbnail" id="head"><br/>
													<center>
														<p id="pp1">Hennessy&nbsp&nbsp·&nbsp&nbsp zhao</p>
													</center>
												</div>
											</div>
											<div class="column">
												<div class="col-md-12" id="good">
													<center>
												 		<a href="#" style="font-size:50px;" id="ga1">
															<span class="glyphicon glyphicon-thumbs-up"></span>
													 	</a>
													</center>
													<center>
													 	<button class="btn btn-success" id="button1">点赞人数:0</button>
													</center>
												</div>
											</div>
										</div>
										<div class="col-md-12" id="poverb">
											<h4 id="ph4">简单信息</h4>
											<p class="pp1"><a href="https://github.com/Hennessy-zhao" class="a2">Github&nbsp:&nbspHennessy-zhao</a></p>
											<p class="pp1"><a href="#" class="a2">百度账号&nbsp：&nbspz岁月静好z</a></p>
											<br/>
											<p class="pp1">爱好&nbsp:&nbsp编程，绘画</p>
											<p class="pp1">座右铭&nbsp:&nbsp不要叹气，每叹一口气，就会少一份自信，要时刻相信，我无所不能</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="column">
									<div class="col-md-12" id="home"></div>
									<div class="col-md-12" id="say"></div>
									<div class="col-md-12" id="study"></div>
									<div class="col-md-12" id="message"></div>
									<div class="col-md-12" id="photo"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>
	<script src="/hennessy/Public/js/addLoadEvent.js" ></script>
	<script src="/hennessy/Public/js/hennessy.js" ></script>
</body>
</html>