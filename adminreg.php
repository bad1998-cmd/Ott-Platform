<?php
    include("connection1.php");
    error_reporting(0);
    ?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 50px;
  background-color:;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body background="reg.jpg">

<form action="" method="POST">
  <div class="container">
    <h1>Admin Registration Form</h1>
    <p>Please fill in this form to create an Admin Account.</p>
    <hr>

    <label for="email"><b>Email :-</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="Name"><b>Admin Name :-</b></label>
    <input type="text" placeholder="Enter Name of Admin" name="aname"  required>

    <label for="email"><b>Mobile Number :- </b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mno"  required>

    <label for="psw"><b>Password :-</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password :-</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>

 <?php
     if (isset($_REQUEST['submit'])) {
       # code...
     

    $email=$_REQUEST['email'];
    $name=$_REQUEST['aname'];
    $phone=$_REQUEST['mno'];
    $pass=$_REQUEST['psw'];
    
    echo "$email";
    echo "name";

    

    

    $query="INSERT INTO admin (email, aname, mobileno, pass) VALUES ('$email','$name','$phone','$pass')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"Successfully Donate";
    }
    else
    {
        echo "faild to data in databases";
    }

  }
    ?>



