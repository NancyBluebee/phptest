<?php
/*
 刪除資料<?php
/* delete from table
 * delete from table where id=xx;
 * delete from table where xx='aa' && yy='bb'
 */






function nums($table,...$arg){
    global $pdo;
    $sql="select count(*) from $table ";
    
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }

    if(isset($arg[1])){
        $sql=$sql . $arg[1];
    }

    echo $sql;

    return $pdo->query($sql)->fetchColumn();
}

?>