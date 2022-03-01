<?php
$firstName=$_POST['fn'];
$lastName=$_POST['ln'];
$email=$_POST['email'];
$telephone=$_POST['tel'];
$gender=$_POST['sex'];
$nationality=$_POST['nation'];
$username=$_POST['un'];
$password=$_POST['pass'];
$passConfirm=$_POST['pass2'];


if(($firstName=="")||($lastName=="")||($email=="")||($password!=$passConfirm)){
    echo "Please provide all the required information";
}else{
    $encrypt=hash("SHA512",$password);
    define("HOST","localhost");
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="form";
    $connection= mysqli_connect(HOST,$db_user,$db_password,$db_name);
    if(!$connection){
        echo"Connection Error".mysqli_connect_error();
    }
    else{
        $insertquery="INSERT INTO registration(firstname,lastname,gender,phoneNumber,email,nationality,username,password) values('$firstName','$lastName','$gender','$telephone','$email','$nationality','$username','$encrypt')";
        $insert=mySqli_query($connection,$insertquery) or die("Error occured".mySqli_error($connection));
        if($insert){
            echo "Data added succesfully";
        }else{
            "Failed to add a new user";
        }
    }
}
?>
<a href="display.php">Display Data</a>