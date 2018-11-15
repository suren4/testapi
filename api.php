<?php
$myObj[0]->name = "amir 1";
$myObj[0]->body = 30;
$myObj[0]->image_url = "New York";
$myObj[0]->sender = "New York";


$myObj[1]->name = "amir 2";
$myObj[1]->body = 20;
$myObj[1]->image_url = "New York";
$myObj[1]->sender = "New York";


$myObj[2]->name = "amir 3";
$myObj[2]->body = 20;
$myObj[2]->image_url = "New York";
$myObj[2]->sender = "New York";


$myJSON = json_encode($myObj);

echo $myJSON;
