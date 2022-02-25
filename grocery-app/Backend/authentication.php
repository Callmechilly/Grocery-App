<?php
    //Check if the user has filled in the details. 
    if( !Isset($_POST['username'],$_POST['password'])) {
        
    die ("<script>
    alert('Please Fill Both Username and Password');
    window.location.href='..index.php';
    </script>");
        } 
    else
    {
    //check on the posted values 
    $username= $_POST[('username')];
    //echo $username;
    $password=$_POST[('password')];
    require('conn.php');}
    
    
    //echo $password;
            //sql prepared statments//Preparing // keep playing on that stmt
            if($stmt=$conn->prepare('Select id,password FROM user_info WHERE username=?'))
            {
                $stmt->bind_param('s',$_POST['username']);
                $stmt->execute();
                $stmt->store_result();
        
        
            if($stmt->num_rows>0){
                //if the function given is valid, then username exists, 
                $stmt->bind_result($id,$passworddb);
                $stmt->fetch();
                //echo "$passworddb";
                if(password_verify($password,$passworddb))
                //if($password == $passworddb )
                {
                session_start();   
                
                 $_SESSION['loggedin']=TRUE;
                    $_SESSION['id']=$id;
                    $_SESSION['name']=$username;
                    echo"<script>
                    
                   window.location.href='../User/panel.php';
                    </script>";
                    
                }
                //If Password doesnt match
                else{
                    echo"<script>
                    alert('Password Doesnt Match');
                   window.location.href='../index.php';
                    </script>";
                }
            }    
            else{
                echo "<script>
                alert('Username Does Not Exists');
                window.location.href='../index.php';
                </script>";
                exit();
            }
            
            }
    