<?php
 require("dblink.php");
 if($_GET["id"])
 {
 	  $sql1 = "delete from guest where 房间号='".$_GET["id"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql1) or die ("删除guest表记录失败：".mysqli_error());
    
      $sql2 = "delete from checkroom where 房间号='".$_GET["id"]."'";
    //echo $sql1;
    mysqli_query($db_link,$sql2) or die ("删除checkroom表记录失败：".mysqli_error());
    
    $sql3 = "update room set 状态='N'  where 房间号='".$_GET["id"]."'";
    //echo $sql3;
    mysqli_query($db_link,$sql3) or die ("更新room表中状态字段失败：".mysqli_error());
    
        Header("Location: index.php "); 
 }else{echo"信息不能为空！";}


?>