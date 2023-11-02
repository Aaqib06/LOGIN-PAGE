<?php
$servername="localhost";
$username="root";
$password="";
$dbname="personal";

$conn=new mysqli($servername,$username,$password,$dbname) ;

if($conn==true){
    echo"";
}else{
    echo " failed";
}




?>