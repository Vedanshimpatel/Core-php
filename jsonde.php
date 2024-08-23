//Write a PHP script which decodes the following JSON string. 
<?php
//Assign JSON encoded string to a PHP variable
      $json='{"Peter":65,"Harry":80,"John":78,"Clark":90}';
//Decode JSON string to PHP array
    $arr=json_decode($json,true);

// Loop through the array
    foreach($arr as $key=>$value){
        echo $key."=>" . $value . "<br>";
    }    
    echo "<hr>";
    

//Decode JSON srting to PHP obj    
    $obj=json_decode($json);

//Loop through the object
foreach($obj as $key=>$value){
    echo $key ."=>" . $value . "<br>";
}    

    
    

?>