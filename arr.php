//Write program to remove duplicate values from array.

<?php
$test=array("3","5","8","3","5","9");
for($x=0;$x<Count($test);$x++)
{
    echo $test[$x];
}
echo "<br>";
for($i=0;$i<count($test);$i++)
 {
    $j=$i;
    $temp=$test[$i];
    for($k=0;$k<count($test);$k++)
    {
        if($j!=$k)
        {
            if($temp==$test[$k])
            {
                $test[$k]="";
            }
        }
    }
 }
 for($x=0;$x<count($test);$x++)
{
    echo $test[$x];
}
?>