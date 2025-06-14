<?php
$num=12321;
$rev=0;
$temp=$num;
while($temp!=0){
    $rem=$temp%10;
    $rev=$rev*10+$rem;
    $temp=(int)($temp/10);
}
if($num==$rev)
{
    echo "$num is a palidrome ";
}else{
    echo  "$num is not palidrome";
}
?>