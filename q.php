<?php

include_once "base.php";

$row=q("select * from invoice where id='11'");

print_r($row);
echo "<br>";
echo $row[0]['number'];

$row=q("select * from invoice where period='2'");

print_r($row);
echo "<br>";
echo $row[2]['number'];

$row=q("insert into invoice values(null,'CG','99999999','1','99','2020')");

/***
 * 
 * 萬用函式
 * 
 */

function q($sql){
    global $pdo;

    return $pdo->query($sql)->fetchAll();

}
?>