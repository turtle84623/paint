<!DOCTYPE html>
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
if ($_POST["admin"]!=""&&$_POST['key']!=""){
    include_once 'db.php';    
 $key = $_POST['key'];
 $sql = "SELECT * FROM locks WHERE 使用者='".$_POST["admin"]."'";
 $record=mysql_query($sql);
 $row = mysql_fetch_assoc($record);       
 $password = $row["密碼"];
      
 if($password==$key){
      echo 登入成功;
 }
 else {?>
 <SCRIPT language=javascript>
	<!--
		alert ("您輸入的帳號或密碼錯誤，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT> 
<?php }}
 else {?>
        <SCRIPT language=javascript>
	<!--
		alert ("您輸入的帳號或密碼是空值，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT> 
 
 <?php }?>

 
      
      
    </body>
</html>