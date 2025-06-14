<?php
$mat1=array(array(1,2,3),array(4,5,6),array(7,8,9));
$mat2=array(array(9,8,7),array(6,5,4),array(3,2,1));
echo "the first matrix is=<br>";
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        echo $mat1[$row][$col]." ";
    }
    echo "<br>";
}
echo "the second matrix is=<br>";
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        echo $mat2[$row][$col]." ";
    }
    echo "<br>";
}
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        $sum=0;
        for($i=0;$i<3;$i++)
        {
            $sum+=$mat1[$row][$i]*$mat2[$i][$col];
        }  
        $mult[$row][$col]=$sum;
    }
}
echo "the multiplication of two matrix is=<br>";
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        echo $mult[$row][$col]." ";
    }
    echo "<br>";
 }
?>