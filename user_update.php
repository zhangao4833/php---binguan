<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title>修改客户信息</title>
</head>
<body class="text-center">
	<form class="text-center" style="margin-top: 50px;margin-left: 500px;margin-right: 500px;" method="post" action="user_update_server.php">
  <div class="form-group">
    <label for="exampleInputEmail1">房间号</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_GET["id"];?>" name="房间号">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"  >姓名</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["姓名"]; ?>" name="姓名">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">性别</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["性别"]; ?>" name="性别">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">电话</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["电话"]; ?>" name="电话">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">身份证</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["身份证"]; ?>" name="身份证">
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1">入住时间</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["入住时间"]; ?>" name="入住时间">
  </div>
  <button type="submit" class="btn btn-default">提交</button>
<!--  
<?php echo @date("Y-m-d",$_GET["截止时间"])."T".@date("H:i:s",time());
	$d=@strtotime($_GET["截止时间"]);
echo "创建日期是 " . @date("Y-m-d H:i:s",$d);
	?>-->
	
</form>
</body>
</html>