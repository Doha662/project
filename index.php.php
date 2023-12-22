<?php

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];

if (isset($_POST['btntest']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="bis";
    $conn= mysqli_connect($host,$user,$password,$db);
    $insert="insert into studentbis values('$firstname','$lastname','email')";
    mysqli_query($conn,$insert);
    if($conn){
    
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed!</h1>");
    }

}
?>

