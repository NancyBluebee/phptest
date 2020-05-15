<?php

$a=["AA","BB"];
$b=["CC","DD"];
$d=["XX","YY","ZZ"];
$c=array_merge($b,$a,$d);

echo "<pre>";
print_r($c);
echo "</pre>";
echo "自行設計函式<br>";

$test=["陳","璵","晳"];
$my=am($d,$b,$a,$test);
echo "<pre>";
print_r($my);
echo "</pre>";

function am($a,...$b){
    if(is_array($a)){
        $array=$a;
    }else{
        echo "not an array";
    }
    
    foreach($b as $item){

        foreach($item as $i){
            $array[]=$i;
        }
    }

    return $array;
}

?>
