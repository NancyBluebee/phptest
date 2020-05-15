<?php
include_once "base.php";

/***
 * 更新資料
 * 
 * update table set xx='aa',yy='bb,zz='cc'
 * update table set xx='aa',yy='bb,zz='cc' where xx='aa' && yy='bb'
 * update table set xx='aa',yy='bb,zz='cc' where id='?'
 * 
 */
$table='invoice';

$row=find($table,12);
echo "<pre>";
print_r($row);
echo "</pre>";

$row['code']="ZZ";
$row['expend']="1000";

update($table,$row);


function update($table,$arg){
    global $pdo;
    
    foreach($arg as $key => $value){
        if($key!='id'){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
    }

    $sql="update $table set ".implode(',',$tmp)." where `id`='".$arg['id']."'";
    echo $sql;
    return $pdo->exec($sql);
}



function find($table,$id){
    global $pdo;
    $sql="select * from $table where id='$id'";
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    if(empty($row)){
        return "無符合資料的內容";
    }
    return $row;
}

?>