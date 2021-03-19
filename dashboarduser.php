 <?php
    include("connection1.php");
    error_reporting(0);

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        echo '<script> location.href = "Dashboard.html"</script>';
        // header('location:index.php');
    }
//if(!isset($_SESSION['email'])){
  //  header('location:Dashboard.html');
   //exit();
//}
    if (isset($_SESSION['email'])) {
      # code...
      //session_start();
      $s1=$_SESSION['email'];
      echo "$s1";
    
}
    ?>


<!DOCTYPE html>
<html>
<head>


    <title>Webpage using div</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body{
            margin:0px;
        }
        .nav{
          background-color: red;
          width: 100%;
          height: 145px;
        }
        .left{
          width: 250px;
/*border: 2px solid blue;*/
        }
            img{
              position: absolute;
              top: 2px;
              left: 2px;
            } 
      h1{
              position: absolute;
              top: 93px;
              left: 2px;
            } 
            .mid{
              width: 800px;
/*border: 2px solid blue;*/
margin-left: 5px;


            }
            .midul{
              display: flex;
              margin: 5px; 
            }
            li{
              margin: 25px;
              list-style: none; 
              font-size: 35px;
              margin-top: 15px;
              font-weight: bolder;
            }
            .logout{
              position: absolute;
              top: 65px;
              right: 25px;
              border: 3px solid black;
              background-color: grey;
              color: white;
}
.line{
  height: 25px;
  background-color: black;
}
.container1{
  margin: 10px;
float: left;
width: 30%;
/*background-color: black;*/
}
.hed{
  height: 25px;

}

  </style>


</head>
<body>

    
            <!-- Nav -->
        <div class="nav">
          
          

        <div class="left">   <img src="logo1.jpeg" height="100" width="150">
           <h1>Apna TV</h1>
         </div>
          <div class="mid">
            <ul class="midul">
                <li><a href="#">HOME</a></li>
                <li><a href="#">MENU </a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">WEB SERIES</a></li> 
            </ul>
    </div>
    <div class="logout">
      <form method="POST">
        <input type="submit" name="logout" value="logout">
      </form>
    </div>
      </div>
     <div class="line"></div>

     <div class='hed'>
       <h2>WELCOME TO USER PANNEL</h2>
     </div>



      <!-- main -->
      <<?php
        
         //$fetch = mysqli_query($conn, "SELECT * FROM user_tbl where  "); 
       ?>

        <?php
    $fetch = mysqli_query($conn, "SELECT * FROM video_tbl ORDER BY id DESC");
    while($row = mysqli_fetch_assoc($fetch)){
   $image = $row['web_image'];
   $name = $row['web_name'];
   $genre = $row['web_genre'];
   $season = $row['web_episode'];
   $rating = $row['web_rating'];
   $video = $row['web_video'];
   ?>

    <div class="container1">
        <div class="row">
        <div class="col-4">
            <div class="card" style="width:400px; height:500px;margin:60px;padding:20px;background-color:black;">
                <p><img class="card-img-top" src="<?php echo $image; ?>"Card image" style="width:400px;height:220px;"></p><br><br><br><br><br><br><br>
                <div class="card-body">
                <h6 class="card-title" style="color:blue">Name : <?php echo $name;?></h6>
                <h6 class="card-title" style="color:blue">Genre : <?php echo $genre;?></h6>
                <h6 class="card-title" style="color:blue">Season : <?php echo $season;?></h6>
                <h6 class="card-title" style="color:blue">Rating : <?php echo $rating;?></h6>
              
                <a href="<?php echo $video;?>" class="btn btn-primary">Watch Video</a>
                </div>
            </div>
        </div>
        </div>
    </div>

        <?php
        }
    ?>
    
      
        
        

     



      
     
        

</body>
</html>

 
 