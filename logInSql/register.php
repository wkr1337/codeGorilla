<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$root = dirname(__FILE__);
include("$root/config.php");
$errors = array(); 
if (!empty($_POST)) {
//    escape special characters from the form
$firstname = mysqli_real_escape_string($db, $_POST["firstname"]);
$surname = mysqli_real_escape_string($db, $_POST["surname"]);
$email = mysqli_real_escape_string($db, $_POST["email"]);
$city  = mysqli_real_escape_string($db, $_POST["city"]);
$country = mysqli_real_escape_string($db, $_POST["country"]);
$address = mysqli_real_escape_string($db, $_POST["address"]);
$telephone = mysqli_real_escape_string($db, $_POST["telephone"]);
$gender = mysqli_real_escape_string($db, $_POST["gender"]);
$pets = mysqli_real_escape_string($db, $_POST["pets"]);
$pets_allowed = mysqli_real_escape_string($db, $_POST["pets_allowed"]);
$smoker = mysqli_real_escape_string($db, $_POST["smoker"]);
$smoker_allowed = mysqli_real_escape_string($db, $_POST["smoking_allowed"]);
$stay = mysqli_real_escape_string($db, $_POST["stay"]);
$stay_end = mysqli_real_escape_string($db, $_POST["stay_end"]);
$comment = mysqli_real_escape_string($db, $_POST["comment"]);
$password1 = mysqli_real_escape_string($db, $_POST["password_1"]);
$password2 = mysqli_real_escape_string($db, $_POST["password_2"]);

// validate form: ensure that the form is correctly filled in
if(empty($firstname)) {    array_push($errors, "First name is required"); }
if(empty($surname)) {    array_push($errors, "First name is required"); }
if(empty($email)) {    array_push($errors, "First name is required"); }
if(empty($stay)) {    array_push($errors, "First name is required"); }
if(empty($stay_end)) {    array_push($errors, "First name is required"); }
if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
  array_push($errors, "The two passwords do not match");}



// Change variables to boolean
if($gender == 'Female'){
    $gender = TRUE;
}
if($gender == 'Male'){
    $gender = FALSE;
}elseif ($gender == 'Other') {
    $gender = NULL;
}


$pets = ($pets == 'Yes')? True: FALSE;
$pets_allowed = ($pets_allowed == 'Yes')? TRUE : FALSE;
$smoker = ($smoker == 'Yes')? TRUE : FALSE;
$smoker_allowed = ($smoker_allowed == 'Yes')? TRUE : FALSE;


$isOwner = ($_POST["form"] === 'owner')?  TRUE : FALSE;




// check the database to make sure 
// a user does not already exist with the same email and/or telephone
$user_check_query = "SELECT * FROM users WHERE email='$email' OR telephone='$telephone' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
// if user exist
if($user){
    if($user['email'] === $email){
        array_push($errors, "Email already exists");
    }
    if($user['telephone'] === $telephone){
        array_push($errors, "Telephone number already exists");
    }
}




// Finally, register the user if there are no errors in the form
if (count($errors) ==0) {
    $password = md5($password1);
    $query = "INSERT INTO users (isOwner, firstName, surName, email, country, city, address, telephone, gender, hasPets, allowPets, smokes, allowSmokers, startDate, endDate, comments, password)"
            . "VALUES('$isOwner', '$firstname', '$surname', '$email', '$country', '$city',"
            . "'$address', '$telephone', '$gender', '$pets', '$pets_allowed', '$smoker', '$smoker_allowed', '$stay', '$stay_end', '$comment', '$password')";

    $result = mysqli_query($db, $query);
//   print error for debug
    if ($result === FALSE){
        echo 'error!!!!!!!';
        echo mysqli_error($db);
    }
    echo 'succes!!';
    $_SESSION['firstName'] = $firstname;
    $_SESSION['surNname'] = $surname;
    $_SESSION['email'] = $email;
}
}
  








//
//<?php 
//  session_start(); 
//
//  if (!isset($_SESSION['username'])) {
//  	$_SESSION['msg'] = "You must log in first";
//  	header('location: login.php');
//  }
//  if (isset($_GET['logout'])) {
//  	session_destroy();
//  	unset($_SESSION['username']);
//  	header("location: login.php");
//  }
//