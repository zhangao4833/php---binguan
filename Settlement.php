<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.2.1.min.js" ></script>
     <script src="js/bootstrap.min.js" ></script>
    <title></title>
</head>
<body class="text-center">
<?php
	 require("dblink.php");
	  $sql = "select * from room,checkroom,guest where room.房间号=guest.房间号 AND guest.房间号=checkroom.房间号";
              //echo $sql;
              $rs=mysqli_query($db_link,$sql);
              if(!$rs)
              {
                  echo "无满足条件的记录！";
                  exit;
              }
       
              while ($rows=mysqli_fetch_assoc($rs)){
              	if ($rows["房间号"]==$_GET["id"]){
              		$F=$rows["房间号"];
              		$X=$rows["姓名"];
              		$XB=$rows["性别"];
              		$S=$rows["身份证"];
              		$D=$rows["电话"];
              		$L=$rows["类型"];
              		$DJ=$rows["等级"];
              		$JG=$rows["价格"];
              		$RZ=$rows["入住时间"];
              
              		}
              }
              
	$T=@date("Y-m-d H:i:s",time()+8*60*60);
	$T1=@strtotime($T);
	$T2=@strtotime($RZ);
	$T3=ceil(($T1-$T2)/86400);
	 ?>
<ul class="list-group">
  <li class="list-group-item">房间号：<?php echo $F;?></li>
  <li class="list-group-item">姓名：<?php echo $X; ?></li>
 <li class="list-group-item">性别：<?php echo $XB; ?></li>
  <li class="list-group-item">身份证：<?php echo $S; ?></li>
  <li class="list-group-item">电话：<?php echo $D; ?></li>
  <li class="list-group-item">类型：<?php echo $L; ?></li>
  <li class="list-group-item">等级：<?php echo $DJ; ?></li>
  <li class="list-group-item">价格：<?php if($T3==0){echo $JG;}else{echo $JG*$T3;}  ?></li>
  <li class="list-group-item">入住时间：<?php echo $RZ; ?></li>

</ul>
<div class="btn-group text-center" style="margin-left: 37%;margin-bottom: 5%;" role="group" aria-label="...">

  <button type="button" class="btn btn-default" onclick="javascrtpt:window.location.href='over.php?id=<?php echo $F;?>'">结算</button>

</div>
</body>
</html>