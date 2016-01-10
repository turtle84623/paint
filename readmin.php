<!DOCTYPE html><?php session_start();include_once 'db.php'; ?>
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
        if($_POST['key2']!=""&&$_POST['numb']!=""&&$_POST['add']!=""){
        $key2 = $_POST['key2'];
        $numb= $_POST['numb'];
        $add= $_POST['add'];
        $sql = "UPDATE locks SET 密碼='$key2',電話號碼='$numb',地址='$add' WHERE 使用者='".$_SESSION['two']."'";
        $result = mysql_query($sql);
        ?>
        <SCRIPT language=javascript>
	
		alert ("更改成功！"); 
		history.go(-1);
	
	</SCRIPT> 
        <?php }
 else {?>
  <SCRIPT language=javascript>
	
		alert ("更改失敗！"); 
		history.go(-1);
	
	</SCRIPT> 
<?php        
 }
        ?>
    </body>
</html>
