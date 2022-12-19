
<?php
    require 'config.php';
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $dublicate = mysqli_query($conn, "SELECT * FROM users_lab8 WHERE username = '$username' or email = '$email'");
        if(mysqli_num_rows($dublicate)>0){
             echo  '<script>document.getElementById("taken").style.display = none;</script>';
        }
        else{
            $query = "INSERT INTO users_lab8 VALUES ('$email', '$username', '$password')";
            mysqli_query($conn, $query);
            header("Location: index.html");
            //echo
            // "<script>alert('Registration successful')</script>"; 
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        .container{
            width: 100%;
            height: 100vh;
            background-image:/*linear-gradient(rgba(0,0,50,0.8), rgba(0,0,50,0.8)),*/ url(https://assets.aboutamazon.com/dims4/default/2760c62/2147483647/strip/true/crop/1919x1080+1+0/resize/1320x743!/quality/90/?url=https%3A%2F%2Famazon-blogs-brightspot.s3.amazonaws.com%2Fcb%2F3b%2Fcd5a2b1b47b0958509fc9f767d15%2Fbook-hero-1.jpg);
            
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .form-box{
            width: 90%;
            max-width: 450px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 50px 60px 70px;
            text-align: center;
        }
        .form-box h1{
            font-size: 30px;
            margin-bottom: 60px;
            color: #3c00a0;
            position: relative;
        }
        .form-box h1::after{
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #3c00a0;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);

        }
        .input-field{
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: 0.5s;
            overflow: hidden;
        }
        input{
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;

        }
        form p {
            text-align: left;
            font-size: 13px;
        }
        form p a{
            text-decoration: none;
            color: #3c00a0;
        }
        .btn-field{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .btn-field button{
            flex-basis: 78%;
            background: #3c00a0;
            color: #fff;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: 1s;
        }
        .input-group{
            height: 280px;
        }
        .btn-field button.disable{
            background: #eaeaea;
            color: #555;
        }
        .ll{
            margin-top: 20px;
        }
        a{
            text-decoration: none;
            color:#3c00a0;
        }
        .taken{
            margin-top: 15px;
            color: #fff;
            border: 1.2px solid #F55D7F;
            padding: 10px;
            border-radius: 15px;
            background: #F55D7F;
            display: none;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form action="" method="POST">
                <div class="input-group">
                    <div class="input-field" id="email">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password" required >
                    </div>
                    <p>Lost password <a href="#">Click here</a></p>
                    <div class="taken" id="taken">Username or email has already taken</div>
                </div>
                <div class="btn-field">
                    <button type="submit" name="submit" id="signupBtn">Sign Up</button>
                </div>
                <div class="ll">
                <a href="signin.php">Login</a>
                </div>
            </form>
        </div>
    </div>   
</body>
</html> 
