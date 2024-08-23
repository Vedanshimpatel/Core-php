//Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total. 

<?php
$arr=[21,12,16,14,18];
$sum=0;
for ($i=0;$i < sizeof($arr);$i++){
    $sum=$sum+$arr[$i];
}

echo "sum of array values:".$sum;
?>