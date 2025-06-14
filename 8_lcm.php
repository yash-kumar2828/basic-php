<?php
$num1=4;
$num2=7;
$lcm=max($num1,$num2);
while(!($lcm%$num1==0 && $lcm%$num2==0)){
    $lcm++;
}
echo "LCM of $num1 and $num2 is=$lcm";
?>