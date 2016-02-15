<?php
ob_start();
$dir = "../";
require_once($dir . "core/conn/config.php");
require_once($dir . "core/conn/db.php");

function test_cron(){
  global $db;

  $strsql = "
    INSERT INTO `test_cron` (`cretime`) VALUES ('2016-02-15 13:53:40')
  ";
  $result = $db->query($strsql);

  if($result){
    return $result;
  }else{
    return false;
  }	
}

test_cron();