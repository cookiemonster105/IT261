<?php 
session_start();
include('config.php');
//header include goes here
//include('./include/header.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_Post['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_Post['last_name']);
$email = mysqli_real_escape_string($iConn, $_Post['email']);
$username = mysqli_real_escape_string($iConn, $_Post['username']);
$password_1 = mysqli_real_escape_string($iConn, $_Post['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_Post['password_2']);

if(empty($first_name)) {
    array_push($errors, 'First name is required');}

if(empty($last_name)) {
    array_push($errors, 'Last name is required');}

if(empty($email)) {
        array_push($errors, 'Email is required');}

if(empty($username)) {
        array_push($errors, 'Username is required');}

if(empty($password_1)) {
        array_push($errors, 'Password is required');}

// logic is password_1 !== to passwrod_2

if($password !==$password_2) {
    array_push($errors, 'Passwords do not match');}

    //  check username and password
    
$user_check_query = "SELECT * FROM users WHERE username = '$username' or email= '$email' LIMIT 1";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// We will havean if statment plus an addationl if two if statements inside our main if statement

if($rows) {

    if($rows['username']== $username){
        array_push($errors, 'Username already exists!');}

    if($rows['email']== $email){
        array_push($errors, 'Email already exists!');}

} //close big if statement

// check for errors
if(count($errors) == 0) {
$password = md5($password_1);

//insert information into table
$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES('$first_name', '$last_name', '$email', '$username', '$password')  ";

mysqli_query($iConn, $query);

$SESSION['username'] = $username;
$SESSION['success'] = $success;

header('Location:login.php');

}//close if(count) errors

    
 }//close isset

// communication with the login page 
 if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_Post['username']);
    $password = mysqli_real_escape_string($iConn, $_Post['password']);
    if(empty($username)) {
        array_push($errors, 'Username is required');
    }

    if(empty($password)) {
        array_push($errors, 'Passowrd is required');
    }

    // counting errors 
    if(count($errors) == 0) {
        $password = md5($password);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

    $results = mysqli_query($iConn, $query);

    if(mysqli_num_rows($results) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;
        // if successful user is directed to the homepage  index.php

    }
    else{
        array_push($errors, 'Wrong username or password');


    }//close else

    }// close if(count)

 } // close isset login user

?>