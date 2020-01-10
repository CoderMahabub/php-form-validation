<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Work</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="p-3 text-center">
            <h1>Home Work of Form Validation</h1>
          </div>

            <form class="" action="add.php" method="post">
              <div class="row">

                <div class="col-lg-6 form-group">
                  <label for="firstName">First Name:</label>
                  <input type="text" name="firstName" class="form-control" placeholder="Type your FirstName here..">
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['fnameerror'])){
                    echo $_GET['fnameerror'];
                  }
                  ?>
                </div>



                <div class="col-lg-6 form-group">
                  <label for="lastName">Last Name:</label>
                  <input type="text" name="lastName" class="form-control" placeholder="Type your Last Name here..">
                </div>

                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['lnameerror'])){
                    echo $_GET['lnameerror'];
                  }
                  ?>
                </div>



                <div class="col-lg-12 form-group">
                  <label for="email">Email Address:</label>
                  <input type="text" name="email" class="form-control" placeholder="Type your email here..">
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['emailerror'])){
                    echo $_GET['emailerror'];
                  }
                  ?>
                </div>


                <div class="col-lg-12 form-group">
                  <label for="dateOfBirth">Date of Birth:</label>
                  <input type="date"  class="form-control" name="dateOfBirth" >
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['doberror'])){
                    echo $_GET['doberror'];
                  }
                  ?>
                </div>

                <div class="col-lg-12">
                  <label for="">Gender: </label>
                  <label for="">Male</label>
                  <input type="radio" name="gender" value="male">
                  <label for="">Female</label>
                  <input type="radio" name="gender" value="female">
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['gendererror'])){
                    echo $_GET['gendererror'];
                  }
                  ?>
                </div>



                <div class="col-lg-12">
                  <label for="">Select your Course: </label>
                  <label for="">Speaking</label>
                  <input type="checkbox" name="check[]" value="speaking">
                  <label for="">Writing</label>
                  <input type="checkbox" name="check[]" value="writing">
                  <label for="">Phonetics</label>
                  <input type="checkbox" name="check[]" value="phonetics">
                  <label for="">IELTS</label>
                  <input type="checkbox" name="check[]" value="ielts">
                </div>
                <div class="orm-group text-danger">
                  <?php
                  if(!empty($_GET['checkerror'])){
                    echo $_GET['checkerror'];
                  }
                  ?>
                </div>



                <div class="col-lg-6">
                  <label for="">Your City:</label>
                  <select class="form-control" name="city">
                    <option value="">Select City</option>
                    <option value="uttara">Uttara</option>
                    <option value="mirpur">Mirpur</option>
                    <option value="gulshan">Gulshan</option>
                  </select>
                </div>
                <div class="orm-group text-danger">
                  <?php
                  if(!empty($_GET['cityerror'])){
                    echo $_GET['cityerror'];
                  }
                  ?>
                </div>



                <div class="col-lg-6">
                  <label for="submitionDate">Submission Date:</label>
                  <input class="form-control" readonly name="submitionDate" value="<?php
                    date_default_timezone_set("Asia/Dhaka"); echo date("d-m-y");?>">
                </div>

                <div class="col-lg-6 form-group">
                  <label for="pass">Password:</label>
                  <input type="password" name="pass" class="form-control" placeholder="Type Your Password">
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['passerror'])){
                    echo $_GET['passerror'];
                  }
                  ?>
                </div>



                <div class="col-lg-6 form-group">
                  <label for="rePass">Confirm Password:</label>
                  <input type="password" name="rePass" class="form-control" placeholder="Type Confirm Password">
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['rePasserror'])){
                    echo $_GET['rePasserror'];
                  }
                  ?>
                </div>
                <div class="form-group text-danger">
                  <?php
                  if(!empty($_GET['matchPasserror'])){
                    echo $_GET['matchPasserror'];
                  }
                  ?>
                </div>


                <div class="col-lg-12">
                  <button type="submit" class="btn btn-primary" name="button">Submit</button>
                </div>

              </div>
            </form>
        </div>

      </div>

    </div>
  </body>
</html>
