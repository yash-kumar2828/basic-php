<?php
$mat1=array(array(11,12,13),array(14,15,16),array(17,18,19));
$mat2=array(array(1,2,3),array(4,5,6),array(7,8,9));
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
$sub[$i][$j]=0;

for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        $sub[$i][$j]=$mat1[$i][$j]-$mat2[$i][$j];
    }
}
echo "the subtraction of two matrix is=<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $sub[$i][$j]." ";
    }
    echo "<br>";
 }
?>