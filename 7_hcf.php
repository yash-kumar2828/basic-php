<?php
$num1=100;
$num2=150;
$number=min($num1,$num2);
$hcf=1;
for($i=1;$i<=$number;$i++){
    if($num1%$i==0 && $num2%$i==0){
        $hcf=$i;
    }
}
echo "HCF of $num1 and $num2 is=$hcf";
?>