<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title>客户入住</title>
</head>
<body class="text-center">
	<form class="text-center" style="margin-top: 50px;margin-left: 500px;margin-right: 500px;" method="post" action="add_check_server.php">
  <div class="form-group">
    <label for="exampleInputEmail1">房间号</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_GET["id"]; ?>" name="房间号">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">姓名</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="姓名">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">性别</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="性别">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">电话</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="电话">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">身份证</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="身份证">
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1">入住时间</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo @date("Y-m-d H:i:s", time()+8*60*60); ?>" name="入住时间">
  </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html>