##思路是不通过数据库等操作实现页面（页面比较简陋，请笑纳）

#关于register功能
1. html页面必要的表单功能
2. 在头部写上<?php ?> 写上条件判断
3. if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		login();
	}
	点击登录按钮开始事件
4. 利用 file_put_contents（）把在注册功能上填写的内容写近文本中，
	file_put_contents('users.txt', $username . '|' . $password . "\n", FILE_APPEND);
  			$GLOBALS['message'] = '注册成功';
5. 再把$GLOBALS['message'] = '注册成功';内容渲染到页面中去
6. php实现页面跳转功能：header("Refresh:3;url=login.php");
   Refresh：等待3s跳转到登录页面

#关于login功能
1. html页面必要的表单功能
2. 在头部写上<?php ?> 写上条件判断
3. if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		login();
	}
	点击登录按钮开始事件
4. 利用 file_get_contents（）读取刚刚写入的文本内容
5. 把文本内容转化为数组的形式并且遍历
6. 同时把输入进去的username和password也放进数组里
7. 利用 in_array（） 判断这两个数组是否有交集，如是则break；并且登录成功，反之亦然
8. 最后php实现页面跳转功能：header("Refresh:3;url=StuSystem.html");