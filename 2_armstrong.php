<?php
$num=153;
$temp=$num;
$sum=0;
$count=strlen((string)$num);
while($temp!=0){
    $rem=$temp%10;
    $sum=$sum+pow($rem,$count);
    $temp=(int)($temp/10);
}
if($sum==$num){
    echo "$num is armstrong number";
}else{
    echo "$num is not armstrong number";
}
?>