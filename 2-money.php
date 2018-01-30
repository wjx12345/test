<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>网页标题</title>
</head>
<?php
//编写一个程序,可以输入人的金额,如果该同志的消费大于180,则输出 “你消费大于180,属于高级会员”。如果该会员的消费大于100元 ,则输出 “你属于中级会员”。其它情况,则输出 “你属于普通会员”。
if(isset($_GET['button'])) {
	$money = $_GET['money'];
	if($money > 180) {
		echo '你消费大于180元，属于高级会员！';
	}elseif($money > 100 && $money <= 180) {
		echo '你消费大于100元，属于中级会员！';
	}else{
		echo '你属于普通会员！';
	}
}
?>
<body>
	<form action="" method="get">
		请输入金额：<input type="text" name="money" value="<?php echo $money;?>" >
		<input type="submit" name="button" value="提交">
	</form>
</body>
</html>