//How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array. 

Types of array:
1.indexed or numeric arrays:
2.associative arrays:
3.Multidimensional array


<?php
//Example of indexed or numeric arrays:
$name_one=array("Black","White","Red","Yellow","Blue");

echo"Accessing the 1st elements directly:<br>";
echo $name_one[2],"<br>";
echo $name_one[0],"<br>";
echo $name_one[4],"<br>";
 
//indexed array
$name_two[0]="Black";
$name_two[1]="White";
$name_two[2]="Red";
$name_two[3]="Yellow";
$name_two[4]="Blue";

//Accessing the element directly:
echo"Accessing the 2nd array elements directly:<br>";
echo $name_two[2],"<br>";
echo $name_two[0],"<br>";
echo $name_two[4],"<br>";
?>


//Example of Associative arrays:
<?php
$name_one=array("Zara"=>"Zara","Anthony"=>"Any","Ram"=>"Rani","Salim"=>"Sara","Raghav"=>"Ravina");

//Second way to create an associative array
$name_two["Zack"]="zara";
$name_two["anthony"]="any";
$name_two["ram"]="rani";
$name_two["salim"]="sara";
$name_two["raghav"]="ravina";

//Accessing the element directly
echo"Accessing the 2nd array elements directly:<br>";
echo $name_two["Zack"],"<br>";
echo $name_two["salim"],"<br>";
echo $name_two["anthony"],"<br>";
echo $name_two["ram"],"<br>";
echo $name_two["raghav"],"<br>";
?>


//Example of Associative arrays:
<?php
//Defining a multidimentional array
$favorites=array(
    array(
        "name"=>"Vedanshi",
        "mob"=>"8238728372",
        "email"=>"vedanshipatel1296@gmail.com",
    ),
    array(
        "name"=>"Dhruvi",
        "mob"=>"8238728272",
        "email"=>"dhruvipatel1296@gmail.com",
    ),
    array(
        "name"=>"John",
        "mob"=>"8733928372",
        "email"=>"johnpatel1296@gmail.com",
    )
);    
    //Accessing elements
    echo"Vadanshi email id is: ".$favorites[0]["email"],"<br>";
    echo"John mobile number is: ".$favorites[2]["mob"],"<br>";


?>

<?php
$json ='{"Uk":"london", "Es":"madrid", "IT":"Rome"}';
print_r(json_decode($json));
?>