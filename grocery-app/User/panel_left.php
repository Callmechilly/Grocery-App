<!DOCTYPE HTML>
<div class= "body1">
    <div id="id_div_left">
    <i class="fa fa-user" style="font-size:66px; color:orange;" ></i>
    <h1 class="w3-teal">Hello <?php echo'<STRONG>'.$_SESSION['name'].'!'.'</strong>';
    ?></h1>
    <button class="button143" onclick="window.location.href='panel.php'">My Profile </button><br>
    <button class="button143" onclick="window.location.href='addexpenses.php'">Add Expenses</button><br>
    <button class="button143" onclick="window.location.href='recentexpenses.php'">View Expenses</button><br>
    <button class="button143" onclick="window.location.href='resetpassword.php'"> Reset Password</button><br>
    <button class='button143' onclick="window.location.href='logout.php'" > Logout </button>  
</div>
</div>
</html>