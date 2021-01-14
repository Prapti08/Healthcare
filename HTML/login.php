<?php
ob_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel = "icon" href =  
   "..\images\titlelogo.jpg" 
           type = "image/x-icon"> 

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- CSS file -->
  <link rel="stylesheet" href="..\CSS\loginstyle.css">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/382a0f27c6.js" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>

.logo{
    height: 100px;
    padding-right: 15px;
    padding-left: 0px;
}
  </style>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="height:100px; width:100%;>
 
  <a class="navbar-brand" href="#"><img class="img-responsive logo" src="..\images\doclogo.jpg"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="new.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
     >
    </ul>
  </div>
</nav>

    <!-- <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white " style="height:100px; width:100%;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active text-white" href="index3.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link text-white" href="feedback.php">Feedback</a>
                
              </div>
            </div>
          </nav>
    </div> -->


    <div class="row">
       <div class="col-lg-5 m-auto" style="padding-top: 8%;">
           <div class="card mt-5 bg-dark">
            <div class="card-title text-center mt-3">
                <img src="..\images\loginface.png" width="150px" height="150px" style="border-radius: 100%;">
                 
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>   
                        </div>
                        <input type="email" class="form-control py-4" name="email" placeholder="Enter Email"required="">
                         
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>   
                        </div>
                        <input type="password" class="form-control py-4"name="password" placeholder="Enter Password"required="">
                         
                    </div>
                    <!-- <button  class="btn btn-success" name="submit">Login</button> -->
                    <input class="btn btn-success" type="submit" name="submit" value="Login">
                    <p class="signup float-right text-white mt-2">Don't have account?<a href="registration.html"> Sign Up here</a></p>

                </form>

            </div>

           </div>
            
       </div>


    </div>

<?php     
    include('connection.php'); 
    session_start();
    if(isset($_POST['submit']))
    {
        
    $email= $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($con, $username);  
        // $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
          $_SESSION['user_name']= $email; 
          header('location:user.php');
            ob_end_flush();
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else
        {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
//  

    
    

    }
    ?>
   


    </body>
    </html>