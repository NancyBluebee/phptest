<style>
*{
    font-family:"Courier New";
    line-height:10px;
}
</style>
<h2>印出正三角形排列的星星</h2>
<form action="?" method="get">
    <input type="number" name="stars">
    <input type="submit" value="送出">
</form>

<?php
if(isset($_GET['stars'])){
    $stars=$_GET['stars'];
    stars($stars);
}

/*for($i=0;$i<10;$i++){
    $rand=rand(5,20);
    stars($rand);
}*/

function stars($row){
    for($i=1;$i<=$row;$i++){
        for($j=1;$j<=($row-1+$i);$j++){
         if ($j<=($row-$i)){
             echo "&nbsp;";
         } else{
         echo "*";
        }
    }
}

?>