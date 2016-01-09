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
        include_once 'db.php';   
        $name = $_POST['admin2'];
        $key2 = $_POST['key2'];
        $numb= $_POST['numb'];
        $add= $_POST['add'];
        if($name!=NULL&&$key2!=NULL&&$numb!=NULL&&$add!=NULL){
                    $sql = "INSERT INTO `panit`.`locks` "
                . "(`使用者`, `密碼`, `電話號碼`,`地址`)"
                . " VALUES ( '$name',"." $key2,"." $numb,"."'$add');";
       // echo "\n".$sql . "\n";
        $result = mysql_query($sql);
        //echo "\n".$sql . "\n";
         
            ?>
        <SCRIPT language=javascript>
        alert  ("帳號創建成功！");   
        history.go(-1);
        </SCRIPT>
        <?php exit; }
        else{?>
         <SCRIPT language=javascript>
        alert  ("帳號創建失敗！，請確認是否輸入正確!");
        history.go(-1);
        </SCRIPT>   
            <?php exit; }?>
      
      
    </body>
</html>

 

