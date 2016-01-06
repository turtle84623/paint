<?php
$server = "localhost";
$username = "root";
$password = "2ijiligl";
$database_name = 'panit';
$link = mysql_connect($server, $username, $password);
if (!$link) {
    die('連線失敗');
}
$db = mysql_selectdb($database_name, $link);
mysql_query("SET NAMES 'utf8'");
if (!$db) {
    die('資料庫無法開啟');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

