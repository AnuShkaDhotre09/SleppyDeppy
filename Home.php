<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <page>Homepage</title>
</head>

<style>
    *{
       margin:0;
       padding:0; 
    }
    .wrapper{
        width:1170px;
        margin:-19px;

    }
    header{
        background: url('2.jpg');
        height:100vh;
        --webkit-background-size:cover;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    .nav-area{
        float:right;
        list-style: none;
        margin: 20px;
        
    }
    .nav-area li{
        display: inline-block;

    }
    .nav-area li a{
 color: #fff;
 text-decoration: none;
 padding: 15px;
 font-family: Arial, Helvetica, sans-serif;
 font-size: 20px;
    }
    .nav-area li a:hover{
        color: blue;
    }
    .welcome-text{
        position: absolute;
        width: 600px;
        height: 300px;
        margin: 15% 30%;
        text-align: center;
    }

    .welcome-text h1{
        text-align: center;
        color: #fff;
        text-transform: uppercase;
        font-size:60px ;
    }
    .btn{
        border: 1px solid #fff;
        padding: 10px 25px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
        margin-top: 20px;
        display: inline-block;
        color: black;
    }
   .btn:hover{
    background: rgb(44, 44, 91);;
    color: #fff;
   }

    </style>
    
<body>
    <header>
        <div class="wrapper">
           

<ul class="nav-area">
    <li><a href="Home.php">HOME</li>
    <li><a href="Aboutus.php">ABOUT US</li>
    <li><a href="form.php">FORM</li>
    <li><a href="contact.php">CONTACT</li>
    <li><a href="login.php">LOGOUT
    </li>
</ul>
</div>
<div class="welcome-text">
    <h1>Welcome - to Sleepy-Deepy</h1>
    <a href="contact.php" class="btn">Contact</a>
</div>

        </header>
</body>
</html>