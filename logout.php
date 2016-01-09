<!DOCTYPE html><?php session_start(); ?>
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
if ($_SESSION['three']==1){
    $_SESSION['one']=false;
    $_SESSION['two']="";
    ?>
         <SCRIPT language=javascript>

		alert ("登出成功！"); 
		history.go(-1);
                
	//-->
	</SCRIPT> 
<?php
}
?>
    </body>
</html>
