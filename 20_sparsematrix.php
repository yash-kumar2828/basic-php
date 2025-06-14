<?php
$sparse=array(array(0,0,3),array(0,0,0),array(1,2,0));
echo "it is a sparse matrix element=<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        if($sparse[$i][$j]!=0)
        {
            echo "row=",$i," col=",$j," value=",$sparse[$i][$j], "<br>";
        }
    }
}
?>