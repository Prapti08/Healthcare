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

body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
.srch{
  padding-left: 1000px;
}
    </style>

</head>


<!-- <div class="srch">
<form    class="navbar-form" method="post" name="form1">
<input    class="form-control"type="text" name="search" placeholder="search books....." required="" >
    <button style="background-color:#20F3C9 ;" type="submit" name="submit" class="btn btn-primary">Search

    </button>
</form>

</div> -->




<div class ="srch">
<form    class="navbar-form" method="post" name="form1">
                    <label>Blood-Group</label><br>
                    <select  name="search" id="bloodgroup">
                     
                        <option value="A+" selected>A+</option><option value="Nasik">Nasik</option>
                            <option value="B+">B+</option><option value="pune">Pune</option>
                            <option value="O+">O+</option><option value="O-">O-</option>
                            <option value="AB+">AB+</option><option value="AB-">AB-</option>
                    </select>

                    <button style="background-color:#20F3C9 ;" type="submit" name="submit" class="btn btn-primary">Search

    </button>
</form>
                </div>

<?php
if(isset($_POST['submit']))
{
$q=mysqli_query($db,"SELECT * FROM doctordetails where city like '%$_POST[search]%' ");
if(mysqli_num_rows($q)==0)
{
  echo "sorry! No book found.Try again";
}
  else{
    echo "<table class='table table-bordered table-hover' >";
  echo "<tr style='background-color: #20F3C9 ; text-color:black;'>";
//   echo "<tr style='text-color:black ;'>";
    //Table header
    echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "degree";  echo "</th>";
				echo "<th>"; echo "category";  echo "</th>";
				echo "<th>"; echo "contact";  echo "</th>";
				echo "<th>"; echo "address";  echo "</th>";
                echo "<th>"; echo "City";  echo "</th>";
                echo "<th>"; echo "Appointment";  echo "</th>";
  echo "</tr>";

  while($row=mysqli_fetch_assoc($q))
  {
    
    echo "<tr>";
				echo "<td >"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['degree']; echo "</td>";
				echo "<td>"; echo $row['category']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
                echo "<td>"; echo $row['city']; echo "</td>";
                echo "<td>"; echo $row['appointment']; echo "</td>";

    echo "</tr>";
  }
echo "</table>";

  }

 }
// else{



//         $res=mysqli_query($db,"   SELECT * FROM `doctordetails`;");
//         // echo "<table class= 'table table-bordered table-hover'   >";
//         // echo
//         echo "<table class='table table-bordered table-hover' >";
// 			echo "<tr style='background-color: #20F3C9 ;'>";
// 				//Table header
// 				echo "<th>"; echo "ID";	echo "</th>";
// 				echo "<th>"; echo "Name";  echo "</th>";
// 				echo "<th>"; echo "degree";  echo "</th>";
// 				echo "<th>"; echo "category";  echo "</th>";
// 				echo "<th>"; echo "contact";  echo "</th>";
// 				echo "<th>"; echo "address";  echo "</th>";
//                 echo "<th>"; echo "City";  echo "</th>";
//                 echo "<th>"; echo "Appointment";  echo "</th>";
// 			echo "</tr>";

// 			while($row=mysqli_fetch_assoc($res))
// 			{
// 				echo "<tr>";
// 				echo "<td>"; echo $row['id']; echo "</td>";
// 				echo "<td>"; echo $row['name']; echo "</td>";
// 				echo "<td>"; echo $row['degree']; echo "</td>";
// 				echo "<td>"; echo $row['category']; echo "</td>";
// 				echo "<td>"; echo $row['contact']; echo "</td>";
// 				echo "<td>"; echo $row['address']; echo "</td>";
//                 echo "<td>"; echo $row['city']; echo "</td>";
//                 echo "<td>"; echo $row['appointment']; echo "</td>";
                

// 				echo "</tr>";
// 			}
// 		echo "</table>";
//   }

  ?>
  </body>
   </html>


