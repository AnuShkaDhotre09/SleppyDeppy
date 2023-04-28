<?php
ob_start();
session_start();
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <style>
        *{
    font-family: 'Poppins',sans-serif;
}
body{
    background-image: url(1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
.box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 90vh;
}

.container{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px;
}


header{
    color: #fff;
    font-size: 30px;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
    font-weight: bold;

}
.input-field{
    
    display: flex;
    flex-direction: column;
}

.input{
    height: 45px;
    width: 87%;
    border: none;
    outline: none;
    border-radius: 30px;
    padding: 0 0 0 45px;
    background: rgba(255,255,255,0.1);
    color: #fff;
    margin: 15px;
    
    
}
::-webkit-input-placeholder
{
    color: #fff;
}

.submit{
    border: none;
    border-radius: 30px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    margin: 20px;
    background:rgba(255,255,255,0.7);
    cursor: pointer;
    transition: .3s;
    

}
.submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0 0 0 0.2);
    background-color: rgb(44, 44, 91);
    
    color: #fff;
}

p{
    color: #fff;
    font-size: medium;
    display: flex;
    justify-content: center;
    padding: 0 0 0 45px;
    
}
a{
    color: #fff;
}
a:hover{
    color:blue;
}


    </style>
   
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
               
                <header>Login</header>
            </div>
            <form method="post" action="login.php">
            <div class="input-field">
                <input  type="text" class="input" placeholder="Username" required name="username">
               
            </div>

            <div class="input-field">
                <input  type="password" class="input" placeholder="Password" required name="password">
              
            </div>

           <div class="input-field">
                <input  type="submit" class="submit" value="Login" name="submit" onclick="login()" >
              
            </div>
<div class="input-field">
    <p class="acc">
        Don't have any account? <a href="signup.php">  Sign Up</a>
    </p>
</div>
</form>
<?php
            

            if(isset($_POST['submit']))
            {
                $Username = $_POST['username'];
                $Password = $_POST['password'];

                $query = "SELECT * FROM `log` WHERE usename='$Username' AND `password`='$Password'";

                $query_run = mysqli_query($conn,$query);
                if(mysqli_num_rows($query_run) > 0)
                {
                    $_SESSION['usename']= $Username;
                   
                    echo '<script>function login(){alert("Login Successfully..");}</script>';
                    header('Location: Home.php');
                    ob_end_flush();
                }
                else
                {
                    echo '<script>function login(){alert("Invalid credentials");}</script>';
                }
            }
            ?>
            </div>
        </div>
 

   
</body>
</html>