<?php  
      echo "Welcome to the stage where we are ready to to get connected to database <br>";

       $servername = "localhost";
       $username = "root";
       $password = "";
       
       $conn = mysqli_connect($servername, $username, $password);
       
       if(!$conn){
           die("Sorry we failed to connect: ". mysqli_connect_error());
       }
       else{
       echo "Connection was succesful <br>";
       }
       $sql = mysqli_select_db ($conn,"test") or die("unable to connect to database"); 
?>   
