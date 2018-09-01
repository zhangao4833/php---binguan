<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title>添加客房</title>
</head>
<body class="text-center">
	<form class="text-center" style="margin-top: 50px;margin-left: 500px;margin-right: 500px;" method="post" action="add_room_server.php">
  <div class="form-group">
    <label for="exampleInputEmail1">房间号</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="房间号">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">类型</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="类型">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">等级</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="等级">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">价格</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="价格">
  </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html>