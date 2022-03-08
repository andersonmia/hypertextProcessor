<?php 
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$telephone = $_GET['telephone'];
$nationality = $_GET['nationality'];
$gender = $_GET['gender'];
$username = $_GET['username'];
$password = $_GET['password'];
$cpassword = $_GET['cpassword'];

if(($password!=$cpassword)||($firstname=="")||($lastname=="")||($email=="")||($username=="")||($gender=="")||($nationality=="")||($telephone=="")){
    echo "please refill in the details carefully";
}else{
    $validpassword = hash("SHA512",$password);
    define("HOST","localhost");
    $db_host = "localhost";
    $db_user_name = "andersonmia";
    $db_user_password = "&2005&";
    $db_name = "getform";
    $connect = mysqli_connect($db_host,$db_user_name,$db_user_password,$db_name);
    if(!$connect){
        echo mysqli_connect_error();
    }else{
        $insertQuery = "INSERT INTO signup(firstname,lastname,email,telephone,username,password,gender,nationality) VALUES('$firstname','$lastname','$email','$telephone','$username','$validpassword', '$gender', '$nationality')";
        $insert = mysqli_query($connect,$insertQuery) or die("an error occured:" .mySqli_error($connect));
        if($insert){
            echo "You are fully registered";
        }else{
            echo "Registration failed";
        }
    }
}
?>
 