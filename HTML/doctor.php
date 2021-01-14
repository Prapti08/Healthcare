<?php
  include "connection.php";
session_start();

//echo "welcome ".$_SESSION['user_name'];

//echo "welcome";

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
  <link rel="stylesheet" href="../CSS/userlogin.css">
  

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
    table{
    padding-top: 300px;
    border-collapse:collapse;
    width:50%;
    margin-top: 200px;
    color:black;
    font-family:monospace;
    font-size:20px;
    text-align:center;
}
th{
    margin-top: 400px;
    padding-top: 800px;
    background-color:black;
    color:white; 
}

table, th, td {
    border: 1px solid black;
  }

  th, td {
    padding: 15px;
    text-align: left;
    color:blue; 
    
  }
  td{
    color:black;
  }

  </style>
</head>

<body>
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Medicare&nbsp;<i style="color: black" class="fas fa-house-user"></i></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li style="color: black;" class="nav-item active"><a href="new.html" style="color: black; font-size: larger;" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <!-- <li style="color: black;" class="nav-item"><a href="details.html" style="color: black; font-size: larger;" class="nav-link text-uppercase " style="text-transform: lowercase;">Add your details</a></li> -->
                        
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i  class="fas fa-user"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <!-- <a style="color: black;" class="dropdown-item" href="../html/signup.html">Sign-Up <i style="color: black;" class="fas fa-users"></i></a> -->
                                      <a class="dropdown-item" href="logout.php">Sign-Out <i style="color: black;" class="fas fa-sign-in-alt"></i></a>
                                      <a class="dropdown-item" href="doctorequest.php">Your Information&nbsp;<i style="color: black;" class="fas fa-info"></i></a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Help &nbsp;<i style="color: black;" class="fas fa-hands-helping"></i></a>
                                    </div>
                                  </div>
     
                    </ul>    
                </div>
            </div>
        </nav>
    </header>

 
            <img class="img-responsive" src="../images/login1.webp" style="opacity: 1;" width="100%"; height="500px";  id="logo"/>
    <nav class="navbar navbar-dark bg-dark">
        <form class="form-inline" method="post" name="form1">
          <input name="search" class="form-control mr-sm-2"  placeholder="Enter ID" required="">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" >Search</button>
        </form>
      </nav>


                    
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
<!--  -->
</tr>
</table>
<!-- 
    echo "</tr>";
  }
echo "</table>";

  }

 }
 ?> -->

    
<footer>
    <div class="main-content foo">
    <div class="left box">
        <h2>About us</h2>
        <div class="content">
            <p>Medicare is an online website which provides you the facility of getting appointment details of various doctors specialized in various fields</p>
            <div class="social">
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
        </div>
    </div>
    <div class="center box">
        <h2>
            Address</h2>
        <div class="content">
        <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+91 12344555</span>
        </div>
        <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">xyz@gmail.com</span>
        </div>
    
    </div>
    </div>
    <div class="right box">
        <h2>Contact us</h2>
        <div class="content">
            <form action="#">
                <div class="email">
                    <div class="text">Email</div>
                    <input type="email" required>   
                </div>
                <div class="msg">
                    <div class="text">Message</div>
                    
                    <textarea rows="2" cols="25" required></textarea>
                </div>
                <div class="btn">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </footer> 



    </body>
    </html>
    