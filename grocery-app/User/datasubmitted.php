<?php 
     include("../Backend/config.php"); 
    include("../Backend/conn.php");
    if(isset($_POST['add_expense'])){
        $date=$_POST['date'];
        $name=$_POST['nameofstore'];
        $amount=$_POST['amount'];
        $uid=$_SESSION['id'];
        mysqli_query($conn,"insert into groceries(date,uid,nameofthestore,amount) VALUES('$date','$uid','$name','$amount')");
        //include("{$_SERVER['DOCUMENT_ROOT']}/grocery_app/backend/calculations.php");
        echo '<script>alert("Your Data Has been Succesfully Added")</script>';
        
    }
    //Also Include all the calculations
    
    include("../Backend/calculations.php")
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
<body>
<?php include('panel_left.php')?>
<div class="body2 ">
    <div id="id_div_right">
   
    <H1 class=w3-teal> Your Data Has Been Submitted Successfully</h1>
    <p> Your total expense since last calculation is <?php echo'<STRONG>'.'$'.$total_expense.'</STRONG>';?><br>
    With the Total number of expenses input is <?php echo'<Strong>'.$count.'</Strong>';?><br>
        While, The Total amount spent alltogether is <?php echo'<STRONG>'.'$'.$total_expenditure.'</STRONG>';?><br>
        <br>

        <h4>Amount to settle the account:<?php echo'<STRONG>'.'$'.$refund.'</STRONG>';?></h4> <br><br><i>Positive Means You will Get the value </i>
        <br><strong> DO NOT REFRESH THE PAGE </STRONG><br>
        <p> Would you like to add another data? </p>
        <br>
        <button class="button143" onclick="window.location.href='addexpenses.php'"> Add Another Data</button>
        <style>
            .p:hover{
                color:red;
            }
            </style>
</div>                
</div>
    
 </div>
</body>
 </html>
    






