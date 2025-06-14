<?php
function swap($a,$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
$x=10;
$y=20;
echo "before swapping the value of  x=",$x;
echo "<br>";
echo "before swapping the value of  y=",$y;
echo "<br>";
swap($x,$y);
echo "after swapping the value of  x=",$x;
echo "<br>";
echo "after swapping the value of  y=",$y;
?>