

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
 <!--Awesomefont link-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        *{
    font-family: 'Poppins',sans-serif;
}
body{
    background-image: url(4.jpg);
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
    text-transform: uppercase;

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
    color: purple;
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
    color: purple;
    

}
.submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0 0 0 0.2);
    background-color: purple;
    
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
.acc{
    display: inline-block;
    padding: -15px;
    
}
.acc a{
    
 padding: 15px;
 font-size: 20px;
 align-items: center;
 
 
}
.acc a:hover{
    color: purple;
    font-size:25px;
}


    </style>
   
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
               
                <header>Contact Us</header>
            </div>
            <form class="submit_form" method="post" name="form" action="contact.php" >
            <div class="input-field">
                <input  type="text" class="input" placeholder="Username" required  name="user">
               
            </div>

            <div class="input-field">
                <input  type="text" class="input" placeholder="Email" required  name="email">
              
            </div>
            <div class="input-field">
                <input  type="text" class="input" placeholder="Phone" required  name="phone">
              
            </div>
            <div class="input-field">
                <input  type="text" class="input" placeholder="Message" required  name="msg">
              
            </div>

           <div class="input-field">
                <input  type="submit" class="submit" value="Submit"  name="submit"  onclick="fun()">
              
            </div>

    <p class="acc">
    <a href="Home.php"><i class="fab fa-whatsapp-square"></i>
    <a href="Home.php"><i class="fab fa-facebook-square"></i>
    <a href="Home.php"><i class="fab fa-instagram-square"></i>
    <a href="Home.php"><i class="fab fa-linkedin"></i>
    <a href="Home.php"><i class="far fa-envelope"></i>
    
    
    </p>

           
            </div>
        </div>
    </div>
</form>
  
<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
    echo 'Not Connected to server';
}

if(!mysqli_select_db($con,'login'))
{
    echo 'Database Not selecting';
}
if(isset($_POST['submit'])){
$UserName = $_POST['user'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Msg = $_POST['msg'];

$sql = "INSERT INTO `CONTACTPAGE` (`user`,`email`,`phone`,`message`) values ('$UserName', '$Email','$Phone', '$Msg')";

if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
else{
    //echo 'Inserted';
    echo '<script>function fun(){alert("Message is submitted");}</script>';
   
}}

?>
</body>
</html>