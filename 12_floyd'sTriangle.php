<?php
$n=5;
$num=1;
for($i=0;$i<$n;$i++){
    for($j=$i+1; $j>0;$j--){
        echo $num ," ";
        $num++;
    }
    echo " <br>";
}
?>