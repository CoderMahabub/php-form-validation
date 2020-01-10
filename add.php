<?php
$fname_err = '';
$lname_err = '';
$email_err = '';
$dob_err = '';
$gender_err = '';
$check_err = '';
$city_err = '';
$matchPass_err = '';


if(empty($_POST['firstName'])){
$fname_err ="Please Enter First Name";
header('location:index.php?fnameerror='.$fname_err);
}

else if(empty($_POST['lastName'])){
$lname_err ="Please Enter Last Name";
header('location:index.php?lnameerror='.$lname_err);
}

else if(empty($_POST['email'])){
$email_err ="Please Enter Your Email";
header('location:index.php?emailerror='.$email_err);
}

else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$_POST['email'])){
  $email_err ="Please Enter a Valid Email";
  header('location:index.php?emailerror='.$email_err);
}

else if(empty($_POST['dateOfBirth'])){
$dob_err ="Please Select Your Date of Birth";
header('location:index.php?doberror='.$dob_err);
}

else if(empty($_POST['gender'])){
$gender_err ="Please Select Your Gender";
header('location:index.php?gendererror='.$gender_err);
}

else if(empty($_POST['check'])){
$check_err ="Please Select At Least One Course";
header('location:index.php?checkerror='.$check_err);
}

else if(empty($_POST['city'])){
$city_err ="Please Select a City";
header('location:index.php?cityerror='.$city_err);
}

else if(empty($_POST['city'])){
  $city_err ="Please Select a City";
  header('location:index.php?cityerror='.$city_err);
}

else if(empty($_POST['pass'])){
$pass_err ="Please Enter Your Password";
header('location:index.php?passerror='.$pass_err);
}

// else if(strlen($_POST['pass']) <'7'){
//   $pass_err ="Password Must be at least 8 Charecters";
//   header('location:index.php?passerror='.$pass_err);
// }

else if(!preg_match('/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,20}$/',$_POST['pass'])){
  $pass_err ="Ja ja chaise tai tai lekho";
  header('location:index.php?passerror='.$pass_err);
}

else if(empty($_POST['rePass'])){
$rePass_err ="Please Repeat Your Password";
header('location:index.php?rePasserror='.$rePass_err);
}

else if($_POST['pass']!=$_POST['rePass']){
  $matchPass_err ="Password Doesn't Match";
  header('location:index.php?matchPasserror='.$matchPass_err);
}



else{
  echo "Your Name: ";
  echo $_POST['firstName'];
  echo "&nbsp;";
  echo $_POST['lastName'];
  echo "<br />";
  echo "Your Name: ";
  echo $_POST['email'];
  echo "<br />";
  echo "Date of Birth: ";
  echo $_POST['dateOfBirth'];
  echo "<br />";
  echo "Gender: ";
  echo $_POST['gender'];
  echo "<br />";
  echo "Your Choices: ";
  foreach ($_POST['check'] as $value) {
    echo $value."<br />";
  }
  echo "City: ";
  echo $_POST['city'];
  echo "<br />";
  echo "Submission Date: ";
  echo $_POST['submitionDate'];
  echo "<br />";
  echo "Password: ";
  echo md5($_POST['pass']);

}




 ?>
