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
      background-color: lightgreen;  
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
      background-color: blue;  
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
    .form3
    {
      width:600px;
      margin: 0px 400px;
    }
    </style>  
    </head>  
    <body background="dash3.jpg">  

      <div class="form3">
    <form action="" method="POST" enctype="multipart/form-data">  
      <div class="container">  
      <center>  <h1> Add a Video or images</h1> </center>  
      <hr>  
      <label> Web series Name </label>   
    <input type="text" name="web_name" placeholder= "Name of Web series" size="15" required />   
    
    
    <div>  
    <label>   
    Web Series Genre :  
    </label><br>  
      <input type="text" name="web_genre" placeholder= "Genre of Web Series" size="15" required />   
      
    </div>  
    <label>   
    Season And Episodes:  
    </label>  
    
    <input type="text" name="web_episode" placeholder="Number of seasons and episodes" size="10"/ required>   
    
     <label >Duration : 
     </label>  
     <input type="text" placeholder="Aproximate Duration of Each Episodes" name="web_duration" required>  
      
        <label >Rating :
        </label>  
        <input type="text" placeholder="Enter Rating" name="web_rating" required>  

         <div>
            <label>Choose Image of Web Series :</label>
        <input type="file" name="web_image" id="web_image">
        </div>

    <div >
      <label>Video of the web series :-</label>
    <input type="file" name="web_video" id="web_video">
    </div>
      
          
        <button type="submit" class="registerbtn" name="submit"><a href="dashboardadmin.php"> Uploads</a></button>  

        

    </form>
    </div>  
    </body>  
    </html>  

    <?php
     if (isset($_POST['submit'])) {
       # code...
     

    $n=$_POST['web_name'];
    $genre=$_POST['web_genre'];
    $episode=$_POST['web_episode'];
    $duration=$_POST['web_duration'];
    $rating=$_POST['web_rating'];
    $_image=$_FILES['web_image']['name'];
    $_video=$_FILES['web_video']['name'];


    //$name=$_FILES['web_video'];
    //echo "<pre>";
    //print_r($name);
    //exit();

    //$File_name=$_FILES['web_video']['video'];
    //$File_name=$_FILES['web_video']['type'];
    $temp1=$_FILES['web_image']['tmp_name'];
    $temp2=$_FILES['web_video']['tmp_name'];

    //$File_size=$_FILES['web_video']['size'];
    $file_destination1="image/";
    $address1=$file_destination1.$_image;
    $file_destination2="video/";
    $address2=$file_destination2.$_video;


    move_uploaded_file($temp1, $file_destination1.$_image);
    move_uploaded_file($temp2, $file_destination2.$_video);

          $query="INSERT INTO video_tbl (web_name, web_genre, web_episode, web_duration, web_rating,web_image,web_video) VALUES ('$n','$genre','$episode','$duration','$rating','$address1','$address2')";
    

    if(mysqli_query($conn,$query))
    {
        echo "Successfully Donate";
    }
    else
    {
        echo "faild to data in databases";
    }

   



    

    //$query="INSERT INTO video_tbl (web_name, web_genre, web_episode, web_duration, web_rating,web_image,web_video) VALUES ('$n','$genre','$episode','$duration','$rating','$image','$video')";
    //$data=mysqli_query($conn,$query);

    //if($data)
    //{
      //  echo"Successfully Donate";
    //}
    //else
    //{
      //  echo "faild to data in databases";
   // }

  }
    ?>
