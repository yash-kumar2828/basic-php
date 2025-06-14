<?php
$mat1=array(array(1,2,3),array(4,5,6),array(7,8,9));
$mat2=array(array(11,12,13),array(14,15,16),array(17,18,19));
echo "the first matrix is=<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $mat1[$i][$j]." ";
    }
    echo "<br>";
}
echo "the second matrix is=<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $mat2[$i][$j]." ";
    }
    echo "<br>";
}
$sum[$i][$j]=0;

for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        $sum[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j];
    }
}
echo "the addition of two matrix is=<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $sum[$i][$j]." ";
    }
    echo "<br>";
 }
?>