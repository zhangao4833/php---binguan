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
	<?php
		 require("dblink.php");
	  $sql = "select * from workers";
              //echo $sql;
              $rs=mysqli_query($db_link,$sql);
              if(!$rs)
              {
                  echo "无满足条件的记录！";
                  exit;
              }
              $B=0;
              $_SESSION["账户"]=NULL;
		  while($rows=mysqli_fetch_assoc($rs)){
		  	if($rows["账户"]==$_POST["账户"]){
		  		if($rows["密码"]==$_POST["密码"]){
		  			$B=3;
		  		$_SESSION["账户"]=$rows["账户"];
		  		$_SESSION["职位"]=$rows["职位"];
		  			break;
		  		}
		  		
		  		$B=1;break;
		  	}else{$B=2;}
		  	
		  }
		if($_SESSION["账户"]==NULL){
			if($B==1){echo "<script>alert('密码错误');location.href='login.php';</script>";}
			if($B==2){echo "<script>alert('账户不存在');location.href='login.php';</script>";}
			
		}else{
			echo "<script>alert('登陆成功');location.href='index.php';</script>";
		}
		?>
		</body>
</html>
