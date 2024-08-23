//Write a PHP program to find the largest of three numbers using ternary
Operator. 
<?php
$num1=15;
$num2=30;
$num3=25;

$largest=($num1 > $num2)
     ?($num1 > $num3 ? $num1:
     $num3)
     :($num2 > $num3 ? $num2:
     $num3);

     echo "Largest Number:
     $largest";
?>