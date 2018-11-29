<?php 
	function login(){
		if(empty($_POST['username'])){
			$GLOBALS['message'] = '请输入用户名';
    		return;
		}
		if(empty($_POST['password'])){
			$GLOBALS['message'] = '请输入密码';
			return;
		}
		$username = $_POST['username'];
    	$password = $_POST['password']; 
    	$a[] = $username;
    	$b[] = $password;
    	$c[] = (array_merge($a,$b));
    	

    	$contents = file_get_contents('users.txt');
		$lines = explode("\n", $contents);
		// var_dump($lines);
		foreach ($lines as $item) {
			if(!$item)continue;
			$cols = explode('|', $item);
			if(in_array($cols,$c)){
				$GLOBALS['message'] = '登录成功';
				//实现登录成功页面跳转
				header("Refresh:3;url=StuSystem.html");
				break;
			}else{
				$GLOBALS['message'] = '用户名与密码不符';
			}
		}
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		login();
	}



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
		<div>
			<label for="username">用户名</label>
			<input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
		</div>
		<div>
			<label for="password">密码</label>
			<input type="password" id="password" name="password">
		</div>
			<button type="submit">登录</button>
		<?php if (isset($message)): ?>
		<div>
			<?php echo $message; ?>
		</div>
		<?php endif ?>
	</form>
</body>
</html>