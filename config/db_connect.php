<?php 
     //connect to database
     $conn = mysqli_connect('localhost', 'leandro', '123456', 'pizza');
     //check connection
     if(!$conn){
         echo 'Connection error: ' . mysqli_connect_error();
     }
?>