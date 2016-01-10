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
    $sql = "SELECT * FROM 商品 WHERE 商品代號='".$_GET["sn"]."'";    
    $record=mysql_query($sql);
    $row = mysql_fetch_assoc($record);
    $name=$_SESSION['two'];
    $dnumb=$row['商品代號']; 
    $dname=$row['商品名稱'];
    $dmuch=$row['單價'];
    $ddnumb=date("Ymdhis");
     $sql1 = "INSERT INTO `panit`.`我的商品` "
                . "(`帳號`, `商品代號`, `商品名稱`,`單價`,`商品編號`)"
                . " VALUES ( '$name',"." $dnumb,"." '$dname',"."'$dmuch',"."'$ddnumb');";
   $result = mysql_query($sql1); 
}
       ?>
        <SCRIPT language=javascript>
            
        alert  ("商品新增成功！請至我的商品查看");   
        history.go(-1);
        </SCRIPT>
    </body>
</html>
