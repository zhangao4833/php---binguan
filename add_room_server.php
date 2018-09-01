<?php
 require("dblink.php");
 if($_POST["房间号"]&&$_POST["类型"]&&$_POST["等级"]&&$_POST["价格"])
 {
 	  $sql1 = "insert into room (房间号,类型,等级,价格) values('".$_POST["房间号"]."','".$_POST["类型"]."','".$_POST["等级"]."','".$_POST["价格"]."')";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("在customer表中插入记录失败：".mysqli_error());
        Header("Location: index.php "); 
 }else{echo"信息不能为空！";}


?>