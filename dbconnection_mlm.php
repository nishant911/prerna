<?php


function OpenConMlm()
 {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "new_mlm";





 $con_mlm = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);


 return $con_mlm;
 }

function CloseConMlm($con_mlm)
 {
 $con_mlm -> close();
 }
 
?>
