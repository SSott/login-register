<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StuSystem</title>
	<meta http-equiv="refresh" content="5">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<style>
	.container-fluid .row {
		font-size: 14px;
		height: 50px;
		line-height: 50px;
		border-bottom: 1px solid #ccc;
	}
	.center {
	background-color: white;
	/*height: 570px;*/
	}
	.footer {
		background-color: white;
		text-align: center;
	}
	.container .row {
	 	text-align: center;
	 	font-size: 20px;
	 	background-color: #ccc;
	}
	.screen {
		width: 100%;
		/*height: 333px;*/
	}
	.center > ul {
		list-style: none;
	}
	.screen {
		width: 100%;
		overflow: hidden;

	}
	.center .screen >li {
		width: 15%;
		float: left;

	}
</style>
<body>
	<div class="container-fluid" >
		<div class="row"  style="border: 1px solid white;background-color: white">
  			<div class="col-md-8">
  				<a href="StuSystem.php">欢迎来到广州大学学生信息管理系统!</a> </div>
  			<div class="col-md-4" style="text-align: right">
				<a href="login.php" >登陆</a>
				<a href="register.php">注册</a>
  			</div>
			</div>
		</div>
	 <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="StuSystem.php">首页 <span class="sr-only">(current)</span></a></li>
        <li><a href="stu.php">学籍信息</a></li>
        <li><a href="grade.php">考生成绩查询</a></li>
        <li><a href="class.php">选课情况</a></li>
        <li><a href="question.php">常见问题</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- 	<div class="center">
	 		<ul class="screen">
	 			<li><img src="image/1.jpg"></li>
	 			<li><img src="image/2.jpg"></li>
	 			<li><img src="image/3.jpg"></li>
	 			<li><img src="image/4.jpg"></li>
	 			<li><img src="image/5.jpg"></li>
	 		</ul>
	</div> -->
	<div id="carousel-example-generic" class="container-fluid carousel slide" data-ride="carousel" style="width:100%">
  <!-- Indicators -->
  <ol class=" container-fluid carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=" container-fluid carousel-inner" role="listbox" style="width:50%">
    <div class="item active">
      <img src="image/1.jpg"style="width:100%;height: 100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="image/2.jpg"style="width:100%;height: 100%">
      <div class="carousel-caption">
      </div>
    </div>
      <div class="item">
      <img src="image/3.jpg"style="width:100%;height: 100%">
      <div class="carousel-caption">
      </div>
      </div>
       <div class="item">
      <img src="image/4.jpg"style="width:100%;height: 100%">
      <div class="carousel-caption">
      </div>
      </div>
       <div class="item">
      <img src="image/5.jpg"style="width:100%;height: 100%">
      <div class="carousel-caption">
      </div>
      </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<div class="container footer">
		<p>COPYRIGHT 中华人民共和国教育部考试中心 All RIGHTS RESERVED</p>
		<p>京ICP备05031027号</p>
	</div>
</body>
<script type="text/javascript">
	$('a').on('tap','a',function () {
		$(this).attr('href')
	});
</script>
</html>