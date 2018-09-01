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

 if($_POST["职工号"])
 {
 	  $sql1 = "update workers set 账户='".$_POST['账户']."',密码='".$_POST['密码']."',职位='".$_POST['职位']."',电话='".$_POST['电话']."',住址='".$_POST['住址']."'  where 职工号='".$_POST["职工号"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("在guest表中插入记录失败：".mysqli_error($db_link));
    
 
    
        Header("Location: index_W.php "); 
 }else{

 	echo"信息不能为空！";}


?>


</body>
</html>