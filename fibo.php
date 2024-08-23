//Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34.
<?php
$a=1;
$b=0;
$c=0;
$i=1;

while($i<=10)
{
    $c=$a+$b;
    print"<br>".$c;
    $a=$b;
    $b=$c;
    $i++;
}
?>