<?php 
     include("../Backend/config.php"); 
    ?>

<html>
    <Head>
    <Title> User Panel </Title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</Head>
<body>
<?php include('panel_left.php')?>
<div class="body2">
    <div id="id_div_right">
    
  
  <H1 class=w3-teal> Account Overview</h1>
  <h3> Your total expense since last calculation is <?php echo'<STRONG>'.'$'.$total_expense.'</STRONG>';?><br> 
  With the Total number of expenses input is <?php echo'<Strong>'.$count.'</Strong>';?><br>
        While, The Total amount spent alltogether is <?php echo'<STRONG>'.'$'.$total_expenditure.'</STRONG>';?><br>
        <br>
        
</h3>
<h4>Amount to settle the account:<?php echo'<STRONG>'.'$'.$refund.'</STRONG>';?></h4>
  
</div>
</div>
    
 </div>
</body>
 </html>
    






