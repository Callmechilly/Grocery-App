<?php     
    include("../Backend/config.php");// contains header footer etc
    require("../Backend/conn.php");//contains connections
    if(isset($_POST['submit'])){
    $old_pass=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $hashed_password=password_hash($new_password,PASSWORD_DEFAULT);
    $id=$_SESSION['id'];
    if($stmt=$conn->prepare('Select password from user_info where username=?'))
    {
        $stmt->bind_param('s',$_SESSION['name']);
       $stmt->execute();
        $stmt->bind_result($db_password);
        $stmt->fetch();
        //verify  the password;
       if(password_verify($old_pass,$db_password))
        //if($old_pass == $db_password)
        {
            require("../Backend/conn.php"); 
            mysqli_query($conn,"UPDATE user_info SET password='$hashed_password' where id='$id'");
            echo'<script>alert("Password Successfully Updated")</script>';
            
           }
           else{
               echo '<script>alert("current Password Did not match")</script>';
           }
       // $var=$old_pass;

    }
    else {

        echo '<script>alert("Error Preparing")</script>';
    }    
}    
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
<script>
function validateForm_password()
{
var x=document.forms['password_change']['new_password'].value;
var y=document.forms['password_change']['new_password2'].value;

if(x != y){

    alert('Passwords does not Match');
    return false;
}
}
 </script> 
<body>
<?php include('panel_left.php')?>
<div class="body2 ">
    <div id="id_div_right">
   
    <H1 class=w3-teal> Please Fill in the details Below: </h1>
<form class="w3 container-form w3-center" method="POST" name="password_change" onsubmit="return validateForm_password()"> 
    <label>Old Password</label>
    <input class="textbox" type=password name='old_password' placeholder="Old Password" required>
    <br>
    <label> New Password </label>
    <input class="textbox" type=password name='new_password' placeholder="New Password" required>
    <br>
    <label> Re Enter New Password </label>
    <input class="textbox" type=password name='new_password2' placeholder="Re enter New Password" required>
    <br>
    <input class="button143" type="submit" name="submit"> 
    <?php //echo $var; ?>
</form>
    </div>                
</div>
</body>
 </html>

 




