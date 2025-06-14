<?php
$num=12;
$factors="";
for($i=1;$i<=$num;$i++){
    if($num%$i==0){
        $factors.=$i." ";
    }}
echo "factors of $num are =$factors ";
?>
