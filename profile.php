<?php
 require 'config.php';

 function esc(string $str):string{
    return htmlspecialchars($str);
 }
 ?>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            text-align: center;
        }
        body{
            min-height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.70), rgba(0,0,0,0.70)), url("https://img-cdn.inc.com/image/upload/w_1920,h_1080,c_fill/images/panoramic/GettyImages-577674005_492115_zfpgiw.jpg");
            background-position:center;
            background-repeat: no-repeat;
            background-size:cover;

        }
        .hero{
            width:80%;
            margin:auto;
            padding:30px 0px;
            border: 1px solid #fcba03;
            

        }
        .img{
            margin:auto;
            display: block;
            margin-top: 40px;
            height: 220px;
            width: 220px;
            border-radius: 50%;
            border: 3px solid #bef4f7;
        }
        article h1{
            font-size:50px;
            font-weight: 500;
            text-transform: uppercase;
            color: #fcba03;
            

        }
        article h1::after{
            content: "";
            height:3px;
            width: 225px;
            background-color: #fcba03;
            display: block;
            margin: auto;
        }
        .content{
            margin-top: 30px;
            font-size: 17px;
            color: #ccc;
            line-height: 1.5;

        }
        article h5{
            text-transform: uppercase;
            font-size: 32px;
            font-weight: 500;
            margin-top: 30px;
            color: #fcba03;
        }
        article p{
            font-size: 18px;
            color: #fff;
        }
        .btn{
            margin-top: 30px;
            display: inline-block;
            padding: 15px 40px;
            background: #fcba03;
           
            text-decoration: none;
            color: #fff;
            border-radius: 10px;
        }
        .btn:hover{
            opacity: 0.7;
        }
        .section{
            margin-top: 100px;
        }

    </style>
 </head>
 <body>


  
    <div class="section">
        <div class="hero">
            <article>
                <h1>Profile</h1>
                <img class="img" src="data:image/jpeg;base64,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" alt="">
            
                <h5><?php
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM users_lab8 where username = '$username'";
                    $data = mysqli_query($conn, $query );
                    $total = mysqli_num_rows($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo $result['username'];
                    }
                    ?> 
                </h5>
                <p>
                <?php
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM users_lab8 where username = '$username'";
                    $data = mysqli_query($conn, $query );
                    $total = mysqli_num_rows($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo $result['email'];
                    }
                    ?> 
                </p>

            </article>
            <a class="btn" href="/mac/FinalProject/index.html">Main page</a>
            <a  class="btn" href="/mac/FinalProject/signin.php">Logout</a>
        </div>
    </div>

    
 </body>
 </html>