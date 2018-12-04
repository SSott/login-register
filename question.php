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
    </div>
    </div>
</nav>

    <div class="container" style="">
    	<li><a href="#">为什么我的账号密码错误？</a></li>
        <li><a href="#">成绩出现问题怎么办？可以更正吗？</a></li>
        <li><a href="#">如果选课选错了怎么办？</a></li>
        <li><a href="#">成绩与学生的登陆信息不符合怎么办？</a></li>
        <li><a href="#">我选了很多课，有些课程只有课堂作业，不需要考核期末期中考试？</a></li>
        <li><a href="#">登陆问题</a></li>
        <li><a href="#">跳转问题</a></li>
        <li><a href="#">我是新转转学过来的，还没有学籍档案怎么办？</a></li>
        <li><a href="#">选课没选上，能重新再选吗？</a></li>
        <li><a href="#">补考的成绩会覆盖前面的成绩吗？</a></li>
        <li><a href="#">如何在系统上查询自己的选课情况？</a></li>
        <li><a href="#">上课迟到怎么办？</a></li>
        <li><a href="#">考勤问题</a></li>
        <li><a href="#">学籍登记信息</a></li>
        <li><a href="#">我的名字与别人重名了怎么办？</a></li>
        <li><a href="#">成绩查询不到怎么办？</a></li>
        <li><a href="#">为什么我的账号密码错误？</a></li>
        <li><a href="#">成绩出现问题怎么办？可以更正吗？</a></li>
        <li><a href="#">如果选课选错了怎么办？</a></li>
        <li><a href="#">成绩与学生的登陆信息不符合怎么办？</a></li>
        <li><a href="#">我选了很多课，有些课程只有课堂作业，不需要考核期末期中考试？</a></li>
        <li><a href="#">登陆问题</a></li>
        <li><a href="#">跳转问题</a></li>
        <li><a href="#">我是新转转学过来的，还没有学籍档案怎么办？</a></li>
        <li><a href="#">选课没选上，能重新再选吗？</a></li>
        <li><a href="#">补考的成绩会覆盖前面的成绩吗？</a></li>
        <li><a href="#">如何在系统上查询自己的选课情况？</a></li>
        <li><a href="#">上课迟到怎么办？</a></li>
        <li><a href="#">考勤问题</a></li>
        <li><a href="#">学籍登记信息</a></li>
        <li><a href="#">我的名字与别人重名了怎么办？</a></li>
        <li><a href="#">成绩查询不到怎么办？</a></li>
    </div>
</body>
<script type="text/javascript">
	$('a').on('tap','a',function () {
		$(this).attr('href')
	});
	
</script>
</html>