<!DOCTYPE html>
<?php session_start();
include_once 'db.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
if($_SESSION['one']==true){
 $del = $_GET['d'];
 $sql = "DELETE FROM 訂單 WHERE 訂單編號='$del'";
 $result = mysql_query($sql);
 

       ?>
        <SCRIPT language=javascript>
        alert  ("刪除訂單成功");   
        history.go(-1);
        </SCRIPT>
<?php }?>
<?php
 $sql3 = "DELETE FROM 訂單明細 WHERE 訂單編號='$del'";
 $result = mysql_query($sql3);
?>
    </body>
</html>
