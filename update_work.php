<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title>职工信息修改</title>
</head>
<body class="text-center">
	<form class="text-center" style="margin-top: 50px;margin-left: 500px;margin-right: 500px;" method="post" action="update_work_server.php">
  <div class="form-group">
    <label for="exampleInputEmail1">职工号</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_GET["id"]; ?>" name="职工号">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">账户</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["账户"]; ?>" name="账户">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">密码</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["密码"]; ?>" name="密码">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">职位</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["职位"]; ?>" name="职位">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">电话</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["电话"]; ?>" name="电话">
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">住址</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_GET["住址"]; ?>" name="住址">
  </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html>