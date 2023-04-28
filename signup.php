<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
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
    width: 90%;
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
               
                <header>SignUp</header>
            </div>
            <form method="post" action="signup.php">
            <div class="input-field">
                <input  type="text" class="input" placeholder="Username" name="username" required >
               
            </div>
           


            <div class="input-field">
                <input type="password" class="input" placeholder="Password"  name="password" required  >
              
            </div>
            <div class="input-field">
                <input  type="password" class="input" placeholder="Confirm Password"  name="re-password" required >
               
            </div>

           <div class="input-field">
                <input name="submit"  type="submit" class="submit" value="Signup" onclick="sign()">

              
            </div>
<p><a href="login.php">Login</a></p>
</form>
       
   
    <?php
              if(isset($_POST['submit']))
              {
                 // echo '<script type="text/javascript>alert("Signup button clicked");</script>';

                 $username = $_POST['username'];
                 $Pwd = $_POST['password'];
                 $re_pwd = $_POST['re-password'];

                 if($Pwd==$re_pwd)
                 {
                     $query = "select * from `log` WHERE usename='$username'";
                     $query_run = mysqli_query($conn,$query);

                     if(mysqli_num_rows($query_run) > 0)
                     {
                        echo '<script>alert("User already exists...Try another username");</script>';
                     }else
                    {
                        $query = "insert into `log` (`usename`,`password`) values ('$username','$Pwd')";
                        $query_run = mysqli_query($conn,$query);

                        if($query_run)
                        {
                            echo '<script>function sign(){alert("User Registered..Go to login page to login");}</script>';
                        }
                        else
                        {
                            echo '<script>function sign(){alert("Error!");}</script>';

                        }
                    }
                    

                  }
                 else{
                    echo '<script>function sign(){alert("Password and Conform password not matched..");}</script>';
                  }

                }
              
              
            ?>
                 </div>
        </div>
    
</body>

</html>