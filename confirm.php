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
        include_once 'db.php';       
        $name = $_POST['admin2'];
        $key2 = $_POST['key2'];
        $numb= $_POST['numb'];
        $sql = "INSERT INTO `panit`.`locks` "
                . "(`使用者`, `密碼`, `電話號碼`)"
                . " VALUES ( '$name',"." $key2,"." $numb);";
        echo "\n".$sql . "\n";
        $result = mysql_query($sql);
        ?>
      
      
    </body>
</html>

 

