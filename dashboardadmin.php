
<?php
    include("connection1.php");
    error_reporting(0);
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Webpage using div</title>
    <style>
        body{
            margin:0px;
        }
        .header{
                padding: 5px;
                background-color:#33f6ff;
                text-align: center;

               }
          .header h1{
            color: black;
             
          }
              /*===============[Nav CSS]==========*/
              .nav{
                background-color: darkred;
                padding: 5px;


                }
                .nav h1{
                  text-align: center;
                }
             
              .nav li{
              list-style: none;
              display: inline-block;
              padding: 8px;
              
               }
           .nav a{
            color: #fff;

           }
           
          .nav ul li a:hover{
            text-decoration: none;
            color: black;

            

           }
              .lside{
                 float: left;
               width: 80%;
               min-height: 440px;
               background-color: #f0f8ff;
               text-align: center;
               border-image:
               height:200; 
                width:400px;
                margin: 0px 0px;
              }
           .rside
           {
            text-align: center;
            float: right;
            width: 20%;
              min-height: 440px;
             background-color: black;
             margin: 0px;
           }
           .rside h1{
            color: skyblue;
           }
           .footer{
             padding: 5px;
                background-color:greenyellow; 
            text-align: center; 
            padding-top: 10px;
           }

            .footer p{
                color:  #8fbc8f;
            }
            .footer h1{
              text-align: right; 
            }
            .footer h2,h3{
              text-align: left;


            }
            .logo{
              margin: -50px;
            }
            .container1{
               margin: 20px;
                      float: left;
                    width: 30%;
/*background-color: black;*/
                }






    </style>
</head>
<body>
<div>
    
            <!-- Nav -->
        <div class="nav">
          <h1>Apna TV</h1>
          <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">MENU </a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">WEB SERIES</a></li>


                <li style="float: right;"><a href="Dashboard.html">LOG OUT</a></li>
                <li style="float: right;"><a href="Addimagevideo.php">ADD VIDEO</a></li>
                <li style="float: right;"><a href="Html file/contact.html">ADMIN-PROFILE</a></li>
                <li style="float: right;"><a href="adminreg.php">ADD ANOTHER-ADMIN</a></li>
            </ul>
    </nav>
        </div>
     
      <!-- main -->
      


            <div style="height:440px">
            <div class="lside"> 
                
            <img src="dash6.jpg" height="440" width="1200">



            </div>



        <!-- side -->
            <div class="rside">
                <h1>WELCOME ADMIN GUPTASAHAB</h1>
            <img src="logo1.jpeg" height="280" width="270">

            </div>
        </div>
      <!-- footer -->

      
        <div class="logo">

       <img src="logo3.jpeg" height="50" width="200">
        







</div>
     
        
 </div>



        
      
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
            <div class="card" style="width:380px;height:500;margin:60px;padding:20px;background-color:black;">
                <p><img class="card-img-top" src="<?php echo $image; ?>"Card image" style="width:380px;height:250px; "></p>
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




