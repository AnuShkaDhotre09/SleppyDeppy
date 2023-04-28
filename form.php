<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-image: url("5.png");
            width: 100%;
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }
        .abt h1{

color:#fff ;
text-align: center;
padding: 50px;
font-size: 60px;
text-transform: uppercase;
}
        .container{
            position:absolute;
            top:55%;
            left: 50%;
            color: #fff;
            transform: translate(-50%,-50%);
            width: 400px;
            height: auto; 
            box-shadow: 7px 7px 9px 2px rgb(4, 24, 92);
        }

        .container form{
            padding: 24px 40px;
            box-sizing: border-box;
            color: #fff;
        }

        form .time{
            position: relative;
            border-bottom: 1px solid black;
            margin: 20px 0;
            text-align: center;
            font-family: cursive;
            font-size: 18px;
            color: #fff;
            
        }

        .time input{
            width: 100%;
            padding: 20px 40px;
            height:40px;
            font-size: 18px;
            border: none;
            outline: none;
            background: none;
            color: #fff;
        }

        .btn{
            font-family: cursive;
            font-size: 15px;
            border-radius: 5px;
            padding: 8px 16px;
            outline:none;
            border: 1px solid black;
        }

        .btn1{
            background-color: purple;
            margin: 26px 5px;
            color: white;
        }
        .btn1:hover{
            background-color:red;
            color: black;
        }

        .btn2{
            background-color: purple;
            margin: 26px 18px;
            color: white;
        }
        .btn2:hover{
            background-color:grey;
            color: black;
        }

        .btn3{
            background-color:purple;
            color: white;
            margin: 26px 5px;
        }
        .btn3:hover{
            background-color:green;
            color: black;
        }

        .time input[type="number"]{
            text-align: center;
           font-weight: 600;
           color: #fff;
        }



        

    </style>
</head>
<body>
<div class="abt">
    <h1>Form</h1>
    <div>
    <div class="container">
        
       
       <form class="text-filed"> 
       
        <div class="time">
            <label>Date</label>
            <br>
            <input type="date">
        </div>
            <div class="time">
                <label>Sleep time</label>
                <br>
                <input type="time">
            </div>
            <div class="time">
                <label>Wake Up time</label>
                <br>
                <input type="time">
            </div>
            <div class="time">
                <label>Time Duration</label>
                <br>
                <input type="number">
            </div>

            <button type="cancel" class="btn btn1" onclick="can()">Cancel</button>

            <button type="reset" class="btn btn2">Reset</button>

             <button type="submit" class="btn btn3" onclick="sub()">Submit</button>
        
        </form> 
    </div>

    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
    </table>
    <script>
        function can(){
            alert("Data is canceled successfully");
        }
        function sub(){
            alert("Submitted successfully");
        }
    </script>
    
</body>
</html>