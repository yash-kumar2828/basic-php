<?php
$n=29;
$prime=1;
if($n==0 || $n==1)
$prime=0;
for($i=2;$i<=$n/2;$i++){
    if($n%$i==0){
        $prime=0;
        break;
    }
}
if($prime==1){
    echo "$n is prime number";
}else{
    echo "$n is not prime number";
}
?>