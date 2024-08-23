//Write a PHP program to check Leap years between 1901 to 2016 Using
nested if.

<?php
function isLeap($year)
{
    return(date('L',mktime(0,0,0,1,1,$year))==1);
}
 
//FOR TESTING

for($year=1901;$year<2016;$year++)
{
    if(isLeap($year))
    {
        echo"$year:LEAP YEAR<br/>";
    }
    else
    {
        echo"$year:NOT LEAP YEAR<br/>"; 
    }
}
?>