<?php
session_start();
//$conn =mysqli_connect("localhost","root","","132/2");
//checking sessions
//if session is set
if(isset($_SESSION['loggedin']))
{
  
    include('conn.php');
   include('calculations.php');
    include('header.php');
    //include('footer.php');
    
}

else{
    echo'<script>alert("Session Not Logged In")</script>';
    header("Location:http://localhost/grocery_app/");  
}
