<?php
$conn=mysqli_connect("localhost","root","","file_upload");

if(isset($_POST['save']))
{
    $filename=$_FILES['myfile']['name'];
    $destination='uploads/' . $filename;

    $extension=pathinfo($filename,PATHINFO_EXTENSION);
    $file=$_FILES['myfile']['tmp_name'];
    $size=$_FILES['myfile']['size'];

    if(!in_array($extension,['zip','pdf','png']))
    {
        echo "Your file extention must be .zip, .pdf, ,png";
    }
    elseif($_FILES['myfile']['size']>1000000)
    {
        echo "file size is too large";

    }
    else
    {
         if(move_uploaded_file($file,$destination))
         {
             $sql = "INSERT INTO files (name, size,downloads) VALUES ('$filename','$size',0)";
             if(mysqli_query($conn,$sql))

             {
                 echo "file uploaded successfully";
             }
             else
             {
                 echo " failed to upload file";
             }
         }
    }
}


?>