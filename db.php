<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root',"");
date_default_timezone_set("Asia/Taipei");
session_start();

$row=find('invoice',2);

if(is_array($row)){
    echo $row['number']."<br>";
    echo $row['expend'];

}else{
    echo $row;
}

function all($table){
    global $pdo;
    $sql="select * from $table ";
    $rows=$pdo->query($sql)->fetchAll();
    return $rows; 

}

function find($table,$id){
    global $pdo;
    $sql="select * from $table where id='$id'";
    $row=$pdo->query($sql)->fetch();
    if(empty($row)){
        return "無符合資料的內容";
    }
    return $row;
}

?>