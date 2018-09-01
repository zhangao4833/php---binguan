<?php
 require("dblink.php");
 if($_POST["职工号"]&&$_POST["账户"]&&$_POST["密码"]&&$_POST["职位"]&&$_POST["电话"]&&$_POST["住址"])
 {
 	  $sql1 = "insert into workers (职工号,账户,密码,职位,电话,住址) values('".$_POST["职工号"]."','".$_POST["账户"]."','".$_POST["密码"]."','".$_POST["职位"]."','".$_POST["电话"]."','".$_POST["住址"]."')";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("在customer表中插入记录失败：".mysqli_error());
        Header("Location: index_W.php "); 
 }else{echo"信息不能为空！";}


?>