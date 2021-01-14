
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
      <form class="form-inline" method="post" name="form1" action="searchid.php">
          <input name="search" class="form-control mr-sm-2"  placeholder="Enter ID" required="">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" >Search</button>
        </form>

     </ul>
  </div>
</nav> 


<div class="row">
<div class="col-lg-6">
<h1 style="padding-left:300px; padding-top:100px;">Appointment request  </h1>
<?php
echo  $_SESSION['doctorid'];
$docid = $_SESSION['doctorid'];
$email = $_SESSION['user_name'];
$res=mysqli_query($db,"   SELECT * FROM `patientrequest` WHERE `doctorid`='$docid' AND `flag` ='0' ");
while($row=mysqli_fetch_assoc($res))
{
  ?>
  <div class="card" style="width: 20rem;">
 
 
 
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> Patient Id- <?php echo $row['patientid'];?></li>
    <li class="list-group-item"> Problem facing -  <?php echo $row['problem']; ?></li>
    
    
  </ul>
  <div class="card-body">
  
    <a href="confrimapp.php" class="btn btn-primary">Confrim appointment</a>
  </div>
</div>
<?php
}
?>



</div>
<div class="col-lg-6">
<h1 style="padding-left:150px; padding-top:100px;"> Confirmed appointments  </h1>

<?php

$docid = $_SESSION['doctorid'];
$email = $_SESSION['user_name'];
$res=mysqli_query($db,"   SELECT * FROM `patientrequest` WHERE `doctorid`='$docid' AND `flag` ='1' ");
while($row=mysqli_fetch_assoc($res))
{
  ?>
  <div class="card" style="width: 20rem;">
 
 
 
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> Patient Id- <?php echo $row['patientid'];?></li>
    <li class="list-group-item"> Problem facing -  <?php echo $row['problem']; ?></li>
    <li class="list-group-item"> Date -  <?php echo $row['date']; ?></li>
    <li class="list-group-item"> Time -  <?php echo $row['time']; ?></li>
    
    
  </ul>
  
</div>
<?php
}
?>


</div>

</div>
                   
<?php
if(isset($_POST['submit']))
{
$q=mysqli_query($db,"SELECT * FROM patientdetails where id like '%$_POST[search]%' ");
if(mysqli_num_rows($q)==0)
{
  echo "sorry!Try again";
}
  else
  {
    echo "<table class='table table-bordered table-hover' >";
  echo "<tr style='background-color: #20F3C9 ; text-color:black;'>";
//   echo "<tr style='text-color:black ;'>";
    //Table header
    echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Height";  echo "</th>";
				echo "<th>"; echo "Weight";  echo "</th>";
				echo "<th>"; echo "Bloodgroup";  echo "</th>";
				echo "<th>"; echo "Gender";  echo "</th>";
                echo "<th>"; echo "DOB";  echo "</th>";
                echo "<th>"; echo "Allergies";  echo "</th>";
                echo "<th>"; echo "Email-ID";  echo "</th>";
                echo "<th>";echo "Reports";echo"</th>";
  echo "</tr>";
  
  while($row=mysqli_fetch_assoc($q))
  {
    
    echo "<tr>";
				echo "<td >"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['height']; echo "</td>";
				echo "<td>"; echo $row['weight']; echo "</td>";
				echo "<td>"; echo $row['bloodgroup']; echo "</td>";
				echo "<td>"; echo $row['gender']; echo "</td>";
                echo "<td>"; echo $row['dob']; echo "</td>";
                echo "<td>"; echo $row['allergies']; echo "</td>";
                echo "<td>"; echo $row['email']; echo "</td>";
?>
                
<td><a href="upload/<?php echo $row['reports'] ?>"><?php echo $row['reports'] ?></a></td>
<?php	
}
}
}
echo  $_SESSION['doctorid'];
?>



</body>
</html>


