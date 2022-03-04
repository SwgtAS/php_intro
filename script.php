<?php
$category =   ["childish","teenager","adult"];
$name     =   $_POST["name"];
$age      =   $_POST["age"];

//Print_r($category);   //show vector content
//var_dump($name);      //shows the information inside the variable
//var_dump($age);

if($age >= 6 && $age <= 12){
    echo "Name: $name <br> Age: $age <br> Category: $category[0]";
}elseif ($age >=13 && $age < 18) {
    echo "Name: $name <br> Age: $age <br> Category: $category[1]";
}elseif ($age > 18){
    echo "Name: $name <br> Age: $age <br> Category: $category[2]";
}else {
    echo   "Name: $name <br> 
            Age: $age <br><hr><b>",
            //------------------------------------------
            "There are't categories for this age<hr>";
            //-------------------------------------------
}
