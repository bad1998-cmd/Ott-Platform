    <?php
    include("connection1.php");
    error_reporting(0);
    ?>


    <!DOCTYPE html>  
    <html>  
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style>  
    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: pink;  
    }  
    .container {  
        padding: 50px;  
      background-color: lightblue;  
    }  
      
    input[type=text], input[type=password], textarea {  
      width: 100%;  
      padding: 15px;  
      margin: 5px 0 22px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1;  
    }  
    input[type=text]:focus, input[type=password]:focus {  
      background-color: orange;  
      outline: none;  
    }  
     div {  
                padding: 10px 0;  
             }  
    hr {  
      border: 1px solid #f1f1f1;  
      margin-bottom: 25px;  
    }  
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
    .form1
    {
      width:500px;
      margin: 0px 400px;
    }
    </style>  
    </head>  
    <body background="sregistration.jpg">  

      <div class="form1">
    <form action="" method="POST">  
      <div class="container">  
      <center>  <h1> Create a Webseries Acount<br>For User</h1> </center>  
      <hr>  
      <label> Your Name </label>   
    <input type="text" name="name" placeholder= "Name" size="15" required />   
    
    
    <div>  
    <label>   
    Gender :  
    </label><br>  
    <input type="radio" value="Male" name="gender" checked > Male   
    <input type="radio" value="Female" name="gender"> Female   
    <input type="radio" value="Other" name="gender"> Other  
      
    </div>  
    <label>   
    Phone Number :  
    </label>  
    <input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
    <input type="text" name="phone" placeholder="phone no." size="10"/ required>   
    
     <label for="email"><b>Email</b></label>  
     <input type="text" placeholder="Enter Email" name="email" required>  
      
        <label for="psw"><b>Password</b></label>  
        <input type="password" placeholder="Enter Password" name="psw" required>  
      
        <label for="psw-repeat"><b>Re-type Password</b></label>  
        <input type="password" placeholder="Retype Password" name="psw-repeat" required>  
        <input type="submit" class="registerbtn" name="submit">Signup</button>  

        <label> You have already acount ? <a href="Login Form.php"> Login Here</a></label>>

    </form>
    </div>  
    </body>  
    </html>  

     <?php
     if (isset($_REQUEST['submit'])) {
       # code...
     

    $n=$_REQUEST['name'];
    $gender=$_REQUEST['gender'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $psw=$_REQUEST['psw'];


    echo "$n";
    echo "$gender";
    echo "$phone";
    echo "$email";
    echo "$psw";

    

    $query="INSERT INTO user_tbl (name, gender, phone, email, psw) VALUES ('$n','$gender','$phone','$email','$psw')";
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
