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
			echo "<script>location.href='login.php';</script>";
		}
		?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">客房管理 </a></li>
         <li ><a href="index_T.php">客户信息 </a></li>
       <li ><a href="index_W.php">职工信息 </a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a> 当前登陆职工账号： <?php echo $_SESSION["账户"];?></a></li>
        <li>  <button style="margin-top: 8px;" type="submit" class="btn btn-default" onclick="javascrtpt:window.location.href='user_exit.php'">退出</button></li>

          </ul>
          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php 
	
	  $sql = "select * from room order by 房间号 asc";
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
	$Z=0;
	$NZ=0;
echo"<th class='text-center'>房间号</th>";
echo"<th class='text-center'>房间类型</th>";
echo"<th class='text-center'>房间等级</th>";
echo"<th class='text-center'>价格</th>";
echo"<th class='text-center'>状态</th>";
echo"<th class='text-center'>操作</th>";
   while($rows=mysqli_fetch_assoc($rs)){
   	++$Z;
   	 if($rows["状态"]!=='N'){++$NZ; echo "<tr class='danger' >";}else{
   	 	echo "<tr class='success' >";
   	 }


  echo"<td >".$rows["房间号"]."</td>";
  echo"<td >".$rows["类型"]."</td>";
  echo"<td >".$rows["等级"]."</td>";
  echo"<td >".$rows["价格"]."/天</td>";
  echo"<td >".$rows["状态"]."</td>";
  if($rows["状态"]=='N'){
  echo"<td ><a href='add_check.php?id=".$rows['房间号']."'>入住</a>
  
</td>";}else{  echo"<td ><a data-target='#myModal' data-toggle='modal' href='Settlement.php?id=".$rows['房间号']."'>结算</a> </td>";}
   
echo"</tr>";
}
$LV=($NZ/$Z)*100;
?>

</table>
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo round($LV,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($LV,2); ?>%">
    当前宾馆客房利用率:<?php echo round($LV,2); ?>% 
  </div>
</div>
<button type="button" class="btn btn-default" aria-label="Left Align" onclick="javascrtpt:window.location.href='add_room.php'">
  客房添加
</button>
<button type="button" class="btn btn-default" aria-label="Left Align" onclick="javascrtpt:window.location.href='add_room_delet.php'">
  客房删除
</button>


<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
 
    </div>
  </div>
</div>
</body>
</html>