    <?php
    include("connection1.php");
    session_start();
    error_reporting(0);
    ?>

    <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Login Page </title>  
    <style>   
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: pink;  
    }  
    button {   
           background-color: #4CAF50;   
           width: 100%;  
            color: orange;   
            padding: 15px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;   
             }   
     form {   
            border: 3px solid #f1f1f1;   
        }   
     input[type=text], input[type=password] {   
            width: 100%;   
            margin: 8px 0;  
            padding: 12px 20px;   
            display: inline-block;   
            border: 2px solid green;   
            box-sizing: border-box;   
        }  
     button:hover {   
            opacity: 0.7;   
        }   
      .cancelbtn {   
            width: auto;   
            padding: 10px 18px;  
            margin: 10px 5px;  
        }   
            
         
     .container {   
            padding: 25px;   
            background-color: lightblue;  
        }   

      .form2
      {
        width:500px;
        margin: 100px 400px;

      }


    </style>   
    </head>    
    <body background="login.jpg">  

        <div class="form2">

        <center> <h1> Web series Login Form </h1> </center>   
        <form action ="" method="POST">  
            <div class="container">   
                <label>Email: </label>   
                <input type="text" placeholder="Enter Email" name="email" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="psw" required>  
                <button type="submit"  name="login" value="login">Login</button>   
                <input type="checkbox" checked="checked"> Remember me   
                <button type="button" class="cancelbtn"> Cancel</button>   
                Register here <a href="Registration.php"> Register? </a>   
            </div>   
        </form>     
    </div>
    </body>     
    </html>  

    <?php
      # code...
    

if(isset($_REQUEST['login'])){

    if(($_REQUEST['email']=="") || ($_REQUEST['psw']=="")){
        echo "enter the required fields";
    }
    else{
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['psw'];
        
    
        $sql = "SELECT * FROM user_tbl WHERE email  = '$email' and psw = '$pass'";
        $result=mysqli_query($conn,$sql);
        echo "string";

        if(mysqli_num_rows($result)==true){
             //echo "success";
             //echo "string";
              session_start();
            $_SESSION['email']=$email;
            echo "HIIIIIIII";
            header('location:dashboarduser.php');

        }else{
           // echo "failed";
            
            
        $sql = "SELECT * FROM admin WHERE email  = '$email' and pass = '$pass'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==true){
             echo "success";
              session_start();
            $_SESSION['email']=$email;
            header('location:dashboardadmin.php');
          
        /*
          if($email=='admin@gmail.com' && $pass='123')
          {
            echo "SUCCESSSS";
            header('location:dashboardadmin.php');

          }
        */
        

           // $_SESSION['email']=$email;
           // header('location:dashboardadmin.html');
       } 
      }
        
       }
     }
    


?>
        