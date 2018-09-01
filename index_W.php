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
		<?php  require("dblink.php"); 
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
        <li><a href="index.php">客房管理 </a></li>
         <li ><a href="index_T.php">客户信息 </a></li>
         <li class="active" ><a href="index_T.php">职工信息 </a></li>
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

	  $sql = "select * from workers order by 职工号 asc";
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
echo"<th class='text-center'>职工号</th>";
echo"<th class='text-center'>账户</th>";
echo"<th class='text-center'>职位</th>";
echo"<th class='text-center'>电话</th>";
echo"<th class='text-center'>住址</th>";

echo"<th class='text-center'>操作</th>";
   while($rows=mysqli_fetch_assoc($rs)){
echo "<tr>";

  echo"<td >".$rows["职工号"]."</td>";
  echo"<td >".$rows["账户"]."</td>";
  echo"<td >".$rows["职位"]."</td>";
  echo"<td >".$rows["电话"]."</td>";
  echo"<td >".$rows["住址"]."</td>";
if($_SESSION["职位"]=="大堂经理"){
	
echo"<td ><a href='update_work.php?id=".$rows['职工号']."&账户=".$rows["账户"]."&职位=".$rows["职位"]."&电话=".$rows["电话"]."&住址=".$rows["住址"]."&密码=".$rows["密码"]."'>修改</a>";if($rows["职位"]=="大堂经理"){}else{echo "<a href='user_delet_server.php?id=".$rows['职工号']."'>删除</a>";}

echo "</td>";}else{ echo"<td >没有权限</td>";}

echo"</tr>";
}

?>
</table>
<button type="button" class="btn btn-default" onclick="javascrtpt:window.location.href='add_work.php'">
添加职工
</button>
</body>
</html>