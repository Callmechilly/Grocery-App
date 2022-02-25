<?php 
     include("../Backend/config.php"); 
    ?>

<html>
    <Head>
    <Title> User Panel </Title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        
function validateForm() 
{
    var x=document.forms['expenses']['date'].value;
    var y=document.forms['expenses']['nameofstore'].value;
    var z=document.forms['expenses']['amount'].value;
  
    if (x == "" || x == null || y == "" || y == null || z == "" || z == null) {
    alert("One or more field is missing");
    return false;
  }
}
</script>
</Head>
<body>
<?php include('panel_left.php')?>
<div class="body2">
    <div id="id_div_right">
   
  
  <H1 class=w3-teal> Please Enter your Expenses Details Below</h1>
    <form method="POST" class="w3-container w3-center" action="datasubmitted.php" name="expenses" onsubmit="return validateForm()"> 
        <label> Date</label>
        <Input class='textbox' type="date" name='date'><br>
        <label> Name Of The Store </label>
        <input class='textbox' type="text" name='nameofstore' placeholder='Name Of the Store'><br>
        <label>Amount Spent</label>
        <input type="number" class="textbox" required name="amount" min="0" value="0" step="any">
        <br>
        <Input type='submit' name="add_expense" class='button143' value='Add Expense'>

</form>    
</div>
</div>
    
 </div>
</body>

 </html>
    






