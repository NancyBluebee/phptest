<?php
include_once "base.php";

/**
 * 新增資料
 * 
 * insert into table (`field1`,`field2`,`field3`) values('value1','value1','value1')
 * 
 */

$data=[
  "code"=>"LY",
  "number"=>"87876666",
  "period"=>5,
  "expend"=>87,
  "year"=>"2020"
];
/* echo "<pre>";
print_r($data);
echo "</pre>";
echo implode("','",$data);
$values=array_values($data);
echo "<pre>";
print_r($values);
echo "</pre>";
echo implode("','",$values); */
$table='invoice';

echo insert($table,$data);

function insert($table,$arg){
  global $pdo;

   //$str1="(`".implode("`,`",array_keys($arg))."`)";
   //echo $str1 . "<br>";
   //$str2="('".implode("','",$arg)."')";
   //echo $str2 . "<br>";
  $sql="insert into $table (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";
  echo $sql;
  //return $pdo->exec($sql);

  return $pdo->exec($sql);
}


?>