<!-Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else write a PHP program for find „Thursday‟ in week using switch
Function.->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="#" mathod="post">
    <h2 align="Center"><u>Enter student marks</u></h2>
        <label>Chemistry:</lable>
        <input type="text"name="Sub1"id="sub1"><br>
        <label>Physics:</lable>
        <input type="text"name="Sub2"id="Sub2"><br>
        <label>Biology:</lable>
        <input type="text"name="Sub3"id="Sub3"><br>
        <label>Mathematics:</lable>
        <input type="text"name="Sub4"id="Sub4"><br>
        <label>Computer:</lable>
        <input type="text"name="Sub5"id="Sub5"><br>
        <input type="Submit"value="Submit"name="submit">

</form>
<?php
    $sub1=$_POST['Sub1'];
    $sub2=$_POST['Sub2'];
    $sub3=$_POST['Sub3'];
    $sub4=$_POST['Sub4'];
    $sub5=$_POST['Sub5'];
    $sum=$sub1+$sub2+$sub3+$sub4+$sub5;
    
    echo"<br>----Marks-----";
    echo"<br>Chemistry:".$sub1;
    echo"<br>Physics:".$sub2;
    echo"<br>Biology:".$sub3;
    echo"<br>Mathematics:".$sub4;
    echo"<br>Computer:".$sub5;
    echo"<br>Total marks is:".$sum;
    $per=$sum/5;
    echo"<br>Percentages:".$per;
        if($per>=90)
        {
            $grade="A";
        }
        elseif($per>=80)
        {
            $grade="B";
        }
        elseif($per>=70)
        {
            $grade="C";
        }
        elseif($per>=50)
        {
            $grade="D";
        }
        
        else
        {
            $grade="F";
        }
        echo"<br>Grade:".$grade;
    ?>
</body>
</html>        

<?php

$day="4";

switch($day)
{
    case "1":
        echo "Monday!";
        break;

    case "2":
            echo "Tuesday!";
            break;
            
    case "3":
            echo "wednesday!";
            break;         


    case "4":
            echo "Thursday!";
            break;
            
    case "5":
            echo "Friday!";
            break;
            
    case "6":
            echo "Saturday!";
            break;
            
    case "7":
            echo "Sunday!";
            break;   
}

?>



     