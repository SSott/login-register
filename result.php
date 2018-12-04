<?php
	$data = array();
	$data["123"] = array("name"=>"张三","chinese"=>"134","maths"=>"121","english"=>"34");
	$data["456"] = array("name"=>"王五","chinese"=>"111","maths"=>"122","english"=>"67");
	$data["567"] = array("name"=>"李四","chinese"=>"104","maths"=>"100","english"=>"111");
  	$code = $_POST["code"];
  	$result = $data[$code];






 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		ul{
			list-style: none;
			color:red;
		}
		.title{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<?php 	if(array_key_exists($code, $data)){
  		
  	 ?>
	<div>
		<div class="title"><?php echo$result["name"] ?> 的成绩如下</div>
		<ul>
			<li>语文：<?php echo$result["chinese"] ; ?>分</li>
			<li>数学：<?php echo$result["maths"] ; ?>分</li>
			<li>英语：<?php echo$result["english"] ; ?>分</li>
		</ul>

	</div>
	<?php }else{
		?>
		<div>该学生考号不存在</div>
	<?php } ?>
</body>
</html>