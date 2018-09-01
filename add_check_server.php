
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title></title>
</head>
<body>
	<?php
 require("dblink.php");
 
 if($_POST["房间号"]&&$_POST["姓名"]&&$_POST["性别"]&&$_POST["电话"]&&$_POST["身份证"]&&$_POST["入住时间"]){
 	    
    $sql1 = "insert into checkroom (房间号,入住时间) values ('".$_POST["房间号"]."','".$_POST["入住时间"]."')";
    //echo $sql1;
   mysqli_query($db_link,$sql1) or die ("在check表中插入记录失败：".mysqli_error($db_link));
    
    //在orders表中插入一条记录
    $sql2 = "insert into guest (房间号,姓名,性别,身份证,电话) values ('".$_POST["房间号"]."','".$_POST["姓名"]."','".$_POST["性别"]."','".$_POST["身份证"]."','".$_POST["电话"]."')";
    //echo $sql2;
   mysqli_query($db_link,$sql2) or die ("在guest表中插入记录失败：".mysqli_error($db_link));

    //更新roomtype表中leftunm字段
   $sql3 = "update room set 状态='Y' where 房间号=".$_POST["房间号"];
    //echo $sql3;
    mysqli_query($db_link,$sql3) or die ("更新room表中'状态'字段失败：".mysqli_error($db_link));
    
     Header("Location: index.php "); 
 }else{
 	echo"信息不能为空！";
 }
?>
</body>
</html>