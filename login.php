<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title>宾馆管理系统登陆</title>
</head>
<body>

<div class="panel panel-default" style="margin-left: 35%;margin-right: 35%;margin-top: 150px;">
  <div class="panel-body">
  </br>
  	<p style="margin-left: 32%; font-family: 幼圆; font-size: 18px;">登陆宾馆管理系统</p>
  	  </br>
  <form class="form-horizontal" style="margin-left: 5%;margin-right: 5%;" method="post" action="login_server.php">
  <div class="form-group">
    <label for="" class="col-sm-1 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" placeholder="账号" name="账户">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-1 control-label"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="" placeholder="密码" name="密码">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" style="margin-left: 25%;">登录系统</button>
    </div>
  </div>
</form>
  
  </div>
</div>
</body>
</html>
