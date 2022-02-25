<!DOCTYPE html>
<Head>
    <Title>Groceries Application</Title>
    <link rel="stylesheet" type=text/css href="Css/css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("Backend/header.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</Head>
<body>
 <h1 class = "w3-panel w3-teal w3-animate-left">Please Log In To Continue</h1>

</h3>

<div class="w3-container-form  w3-center">
    <form action= "Backend/authentication.php" method="POST">
        <label class="text1" for="username">Username</label>
        <Input class="textbox" Type ="text" name="username" placeholder="Enter Your Username" required>
            <br>
            <br>
        <label class="text1" for="password">  Password</label>
        <input class="textbox" type ="password" name="password" placeholder="Enter Your Password" required>
            <br>
             <br>  
    
        <input type="submit" class="button143" style="background-color:#aecfc4" value= "Login Please">
           <label><br>
              
</label>  
</div>
    </form>
    
</body>
<?php
//include("Backend/footer.php");
?>


</html>