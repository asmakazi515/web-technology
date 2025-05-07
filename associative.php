<?php
     $std=array("name"=>"Vishal", "Occupation"=>"Student", "age"=>"25");
    echo "Name:".$std["name"]."<br/>";
    foreach($std as $k => $v) {
    echo "Occupation ".$std["Occupation"]."<br/>";
    echo "age: ".$std["age"]."<br/>";
    }
 ?>
 