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
 $sql = "DELETE FROM 我的商品 WHERE 商品編號='$del'";
 $result = mysql_query($sql);

       ?>
        <SCRIPT language=javascript>
        alert  ("刪除成功");   
        history.go(-1);
        </SCRIPT>
<?php }?>
    </body>
</html>
