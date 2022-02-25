<?php
$servername="localhost";
//$username="root";
//$password="";
$dbname="132/2";

//$conn =mysqli_connect("fdb29.atspace.me","3561608_132","m0t0rcycle","3561608_132");
//$conn =mysqli_connect("sql303.epizy.com","epiz_29364785","M0t0rcycle147","epiz_29364785_132");
$conn =mysqli_connect("localhost","root","","132/2");
if ($conn-> connect_error){

    die("<Script>alert('Failed to Connect to Database')
    window.location.href:'../index.php'</script>");

    }
else{
   //$conn =mysqli_connect("fdb29.atspace.me","3561608_132","m0t0rcycle","3561608_132");
//$conn =mysqli_connect("sql303.epizy.com","epiz_29364785","M0t0rcycle147","epiz_29364785_132");
$conn =mysqli_connect("localhost","root","","132/2"); 
}