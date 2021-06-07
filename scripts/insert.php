<?php
include 'connect.php';

 if($connect === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}

$userid =  (isset($_POST['userid']) == TRUE ) ? $_POST['userid'] :  '';
$user_pass = (isset($_POST['user_pass']) == TRUE ) ? $_POST['user_pass'] :  '';
$email = (isset($_POST['email']) == TRUE ) ? $_POST['email'] :  '';

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO login (userid,user_pass,sex,email) VALUES ('$userid','$user_pass','M','$email')";
  
if(mysqli_query($connect, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    echo nl2br("\n$userid\n $email\n "
        . "$user_pass");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($connect);
}
  
// Close connection
mysqli_close($connect);
?>