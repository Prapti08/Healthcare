
<?php
  include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medicare</title>
   <!-- add icon link -->
   <link rel = "icon" href =  
   "..\images\titlelogo.jpg" 
           type = "image/x-icon"> 

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- CSS file -->
  <link rel="stylesheet" href="../CSS/usercards.css">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/382a0f27c6.js" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



  
<style>
   
/* .div{
    margin-top: 100px;
    padding-top: 200px;
} */

body{
    background: url('../images/userinfo3.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    min-height: 1000%;
    opacity: 0.8;

}
.logo{
    height: 50px;
    padding-right: 15px;
    padding-left: 5px;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 15px; 
    margin-left: 500px;
    margin-top: 0%;
    opacity:0.9;
   
  }
 
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }


    </style>
</head>

<body>
    <header>

    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="height:100px; width:100%;>
 
  <a class="navbar-brand" href="#"><img class="img-responsive logo" src="..\images\doclogo.jpg"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="user.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
     > -->
    </ul>
  </div>
</nav>

    <h1 style="padding-top:5%; padding-left:500px; color:white;">Your Details</h1>
   



<?php
$email = $_SESSION['user_name'];
$res=mysqli_query($db,"   SELECT * FROM `patientdetails` WHERE `email`='$email' ");
while($row=mysqli_fetch_assoc($res))
{
?>
<div class="card" style="width: 20rem;">
  <!-- <img src="upload/<?php echo $row['reports']; ?>" class="card-img-top" alt="..."> -->
 
 
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID- <?php echo $row['id'];?></li>
    <li class="list-group-item"> Name -  <?php echo $row['name']; ?></li>
    <li class="list-group-item">Height  - <?php echo $row['height']; ?></li>
    <li class="list-group-item">Weight  - <?php echo $row['weight'];  ?></li>
    <li class="list-group-item">Bloodgroup - <?php echo $row['bloodgroup'];  ?></li>
    <li class="list-group-item">Gender  - <?php echo $row['gender']; ?></li>
    <li class="list-group-item">DOB  - <?php echo $row['dob']; ?></li>
    <li class="list-group-item">Allergies  - <?php echo $row['allergies'];   ?></li>
    <li class="list-group-item">Email-Id - <?php echo $row['email'];  ?></li>
    <li class="list-group-item">Reports - <a href="upload/<?php echo $row['reports'] ?>"><?php echo $row['reports'] ?></a></li>
    
  </ul>
  <div class="card-body">
  
    <a href="changeinfo.php" class="btn btn-primary">Update Information</a>
  </div>
</div>
<?php
}
?>

</body>
</html>


