<?php
 require("dblink.php");
 if($_POST["房间号"])
 {
 	  $sql1 = "delete from room where 房间号='".$_POST["房间号"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("在customer表中插入记录失败：".mysqli_error());
        Header("Location: index.php "); 
 }else{echo"信息不能为空！";}


?>