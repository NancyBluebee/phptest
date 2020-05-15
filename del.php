<?php

 include_once "base.php";
/*
 刪除資料<?php
 * delete from table
 * delete from table where id=xx;
 * delete from table where xx='aa' && yy='bb'
 */
del('invoice',6);

function del($table, $arg){
    global $pdo;
    $sql="delete from $table ";
    
    if(is_array($arg)){
        $tmp=[];
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }else{
        $sql=$sql."  where `id`='$arg'";
    }

echo $sql;
return $pdo->exec($sql);
}

?>