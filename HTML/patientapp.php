
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
   <!-- <link rel = "icon" href =  
   "..\images\titlelogo.jpg" 
           type = "image/x-icon">  -->

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- CSS file -->
  <!-- <link rel="stylesheet" href="../CSS/usercards.css"> -->

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
.card{
    margin-top:2%;
    margin-left:40%;
}
.list-group-hover .list-group-item:hover {
    background-color: #f5f5f5;
}
body{
    background: url('../images/patientapp2.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    /* //min-height: 1000%; */
    /* opacity: 0.8; */

}


    </style>
</head>

<body>
    <header>

    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="height:100px; width:100%;>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="user.php">Home <span class="sr-only">(current)</span></a>
      </li> 
    
 </ul>
  </div>
</nav> 

    



<h1 style="padding-left:600px; padding-top:50px;"> Your Appointment Details </h1>

<?php

$email = $_SESSION['user_name'];
$res=mysqli_query($db,"   SELECT * FROM `patientrequest` WHERE `patientemail`='$email' AND `flag` ='1' ");
while($row=mysqli_fetch_assoc($res))
{
  ?>
  <div class="card" style="width: 20rem;">
  
 
 
  <ul class="list-group list-group-flush">
    <li class="list-group-item active"> Doctor Id- <?php echo $row['doctorid'];?></li>
    <li class="list-group-item"> Date -  <?php echo $row['date']; ?></li>
    <li class="list-group-item"> Time -  <?php echo $row['time']; ?></li>

    
  </ul>

</div>
<?php
}
?>


</body>
</html>


