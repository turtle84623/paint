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
    $sql = "SELECT * FROM 我的商品 WHERE 帳號='".$_SESSION['two']."'";    
    $record=mysql_query($sql);
   // $row = mysql_fetch_assoc($record);
    $name=$_SESSION['two'];
    $dnumb=$_POST['numb']; 
    $dadd=$_POST['add'];
    $ddnumb=date("Ymdhis");
     $sql1 = "INSERT INTO `panit`.`訂單` "
                . "(`帳號`, `訂單編號`, `寄送電話`,`寄送地址`)"
                . " VALUES ( '$name',"." '$ddnumb',"." '$dnumb',"."'$dadd');";
   $result = mysql_query($sql1);

   
   while($row = mysql_fetch_array($record)){
  $d= $row["商品編號"];
   $d2=$row["單價"];
   $sql2 = "INSERT INTO `panit`.`訂單明細` "
                . "(`訂單編號`, `商品編號`, `單價`)"
                . " VALUES ( '$ddnumb',"." '$d',"." '$d2');";
   $result = mysql_query($sql2); 
   }
}

       ?>
        <SCRIPT language=javascript>
           
        alert  ("訂單成功");   
        history.go(-1);
        </SCRIPT>
    </body>
</html>
