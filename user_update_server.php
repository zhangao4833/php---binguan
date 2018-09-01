<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	

<?php
 require("dblink.php");

 if($_POST["房间号"])
 {
 	  $sql1 = "update guest set 姓名='".$_POST['姓名']."',性别='".$_POST['性别']."',电话='".$_POST['电话']."',身份证='".$_POST['身份证']."'  where 房间号='".$_POST["房间号"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("在guest表中插入记录失败：".mysqli_error($db_link));
    
    $sql2 = "update checkroom set 入住时间='".$_POST['入住时间']."' where 房间号='".$_POST["房间号"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql2) or die ("在guest表中插入记录失败：".mysqli_error($db_link));
    
        Header("Location: index_T.php "); 
 }else{

 	echo"信息不能为空！";}


?>


</body>
</html>