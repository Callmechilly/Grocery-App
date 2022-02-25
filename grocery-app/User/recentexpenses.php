<?php
include('../Backend/config.php');
include('panel_left.php');
include('../Backend/conn.php');
?>

<html>
    <Head>
    <Title> User Panel </Title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</Head>
<!--here, we are validating the user inputs for the password -->

<body>
<div class="body2 ">
    <div id="id_div_right">
   
    <H1 class=w3-teal> View the Recent Expenses </h1>
    <table align-content='left' col-span='30px' class="table_listings"><tr class="w3-orange">
    <th>ID</th>
    <th>Date</th>
    <th>Name Of Store</th>
    <th>Amount</th>
    <th>Entered By</th>
</tr>
  <style>
     table{
         border:10px;
     }

     td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  border-radius:15px;
  font-size:15px;
}
tr:nth-child(even){
    background-color:smoke;
}
      
  </style>  <?php
  $sql="Select groceries.id, groceries.nameofthestore, groceries.amount,groceries.date , user_info.username From user_info,groceries where (user_info.id=groceries.uid)";
  $retval = mysqli_query( $conn,$sql);
  
  if($retval){

While($row = $retval->fetch_assoc())
{
   
    echo "<tr><td>".$row['id']."</td><td>".$row['date']."</td><td>".$row['nameofthestore']."</td><td>".$row['amount']
    ."</td><td>".$row['username']."</td></tr>";  
    
 }
}

?>
</table>
</div>                
</div>
</body>
 </html>

