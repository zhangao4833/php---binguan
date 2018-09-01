<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title>宾馆管理系统</title>
</head>
<body>
		<?php  
			require("dblink.php"); 
		if($_SESSION["账户"]==NULL){
			echo "<script>alert('当前没有登陆，非法操作！');location.href='index.php';</script>";
		}
		?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">客房管理 </a></li>
        <li class="active"><a href="#">客户信息 </a></li>
        <li ><a href="index_W.php">职工信息 </a></li>
            </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a> 当前登陆职工账号： <?php echo $_SESSION["账户"];?></a></li>
        <li>  <button style="margin-top: 8px;" type="submit" class="btn btn-default" onclick="javascrtpt:window.location.href='user_exit.php'">退出</button></li>

          </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php 

  $sql = "select * from room,checkroom,guest where room.房间号=guest.房间号 AND guest.房间号=checkroom.房间号 order by room.房间号 asc";
              //echo $sql;
              $rs=mysqli_query($db_link,$sql);
              if(!$rs)
              {
                  echo "无满足条件的记录！";
                  exit;
              }
              //$rows=mysqli_fetch_assoc($rs);
              
              	
              
              //echo $rows["房间号"];
	?>
<table class="table table-hover text-center">
<!-- On rows -->
<?php
echo"<th class='text-center'>房间号</th>";
echo"<th class='text-center'>姓名</th>";
echo"<th class='text-center'>性别</th>";
echo"<th class='text-center'>身份证</th>";
echo"<th class='text-center'>电话</th>";
echo"<th class='text-center'>类型</th>";
echo"<th class='text-center'>等级</th>";
echo"<th class='text-center'>价格</th>";
echo"<th class='text-center'>入住时间</th>";
echo"<th class='text-center'>操作</th>";
   while($rows=mysqli_fetch_assoc($rs)){
echo "<tr>";

  echo"<td >".$rows["房间号"]."</td>";
  echo"<td >".$rows["姓名"]."</td>";
  echo"<td >".$rows["性别"]."</td>";
  echo"<td >".$rows["身份证"]."</td>";
  echo"<td >".$rows["电话"]."</td>";
  echo"<td >".$rows["类型"]."</td>";
  echo"<td >".$rows["等级"]."</td>";
  echo"<td >".$rows["价格"]."</td>";
  echo"<td >".$rows["入住时间"]."</td>";

  
  echo"<td ><a href='user_update.php?id=".$rows['房间号']."&姓名=".$rows["姓名"]."&性别=".$rows["性别"]."&电话=".$rows["电话"]."&身份证=".$rows["身份证"]."&入住时间=".$rows["入住时间"]."'>信息修改</a></td>";
echo"</tr>";
}
?>

</table>


</body>
</html>