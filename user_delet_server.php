<?php
 require("dblink.php");
 if($_GET["id"])
 {
 	  $sql1 = "delete from workers where 职工号='".$_GET["id"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("在customer表中插入记录失败：".mysqli_error());
        Header("Location: index_W.php "); 
 }else{echo"信息不能为空！";}


?>