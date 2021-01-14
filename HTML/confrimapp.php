<?php
  include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Medicare</title>
  <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,600&display=swap" rel="stylesheet">
   <!-- add icon link -->
   <link rel = "icon" href =  
   "..\images\titlelogo.jpg" 
           type = "image/x-icon"> 

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- CSS file -->
  <!-- <link rel="stylesheet" href="../CSS/details.css"> -->
  

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/382a0f27c6.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/382a0f27c6.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<style>

body{
    background: url('../images/confrimapp.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    min-height: 1000%;
    opacity: 0.8;

}
.form-container{
    position: absolute;
    top: 15vh;   
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px #000; 
}

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="user.php">Home <span class="sr-only">(current)</span></a>
        
      </div>
    </div>
  </nav>

  
    <section class="container-fluid bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container"action="confrimapp.php"  method="post" enctype="multipart/form-data">
                  
                   
                 <div class="row">
                    <div class="col-lg">
        
                    <div class="form-group">
                  <label >Date</label>
                  <input type="date" class="form-control"name="date" id="birthday">
                </div>

                   </div>
         </div>
              <div class="form-group">
                        <label>Time</label>
                        <input type="time" id="appt" name="time">
                      </div>
                     
                      
                    
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>
            </section>
        </section>
    </section>

    
    <?php


if(isset($_POST['submit']))
{
  $docid = $_SESSION['doctorid'];
  $date =$_POST['date'];
$time = $_POST['time'];
// echo $row["flag"];
// $flag= $row["flag"];

// if ( $flag == 0)
// {
  
$sql="UPDATE patientrequest SET date = '$date' ,time= '$time',flag= '1'  WHERE doctorid = '$docid' AND `flag` ='0'";

   
if(mysqli_query($db, $sql) )
 {
  echo "Record updated successfully";
 }
 else
 {
  echo "Error updating record: " . mysqli_error($conn);
 }


}



?>
</body>
</html>