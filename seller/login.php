<?php 
    session_start();
    include "../config.php";
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $query="select * from seller where email='".$email."' and password='".$password."'";
        $read=mysqli_query($con,$query);
        if(mysqli_num_rows($read) == 1)
        {
            $_SESSION['seller']=$email;
            header("Location:home.php");
        }
        else
        {
            header("Location:login.php?login=error");
        }
    }
    
?>    