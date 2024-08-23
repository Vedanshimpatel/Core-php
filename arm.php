//Write a program to find whether a number is Armstrong or not Write a
program to print the below format.

<?php
$a=59;
$total=0;
$b=$a;
while($b!=0)
{
    $rem=$b%10;
    $total=$total+($rem*$rem*$rem);
    $b=$b/10;
}
if($a=$total)
{
    echo"<br>Num is Armstrong";
}
else
{
    echo"<br>Num is not Armstrong";
}
?>

<?php
$a=2610;
$total=0;
$b=$a;
while($b!=0)
{
    $rem=$b%10;
    $total=$total+($rem*$rem*$rem);
    $b=$b/10;
}
if($a=$total)
{
    echo"<br>Num is Armstrong";
}
else
{
    echo"<br>Num is not Armstrong";
}
?>

<?php
$a=3711;
$total=0;
$b=$a;
while($b!=0)
{
    $rem=$b%10;
    $total=$total+($rem*$rem*$rem);
    $b=$b/10;
}
if($a=$total)
{
    echo"<br>Num is Armstrong";
}
else
{
    echo"<br>Num is not Armstrong";
}
?>

<?php
$a=4812;
$total=0;
$b=$a;
while($b!=0)
{
    $rem=$b%10;
    $total=$total+($rem*$rem*$rem);
    $b=$b/10;
}
if($a=$total)
{
    echo"<br>Num is Armstrong";
}
else
{
    echo"<br>Num is not Armstrong";
}
?>