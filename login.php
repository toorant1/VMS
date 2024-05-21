

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="login-style.css">


    <title>Login by Toorant Communications</title>
</head>
<body>
<?php include 'navigation_menu.php'; ?>
    <div class="center">
        <h1>
            Login 
        </h1>
       <form action="#" method="POST" autocomplete="off">
        <div class="form">
            <input type="text" name="username" class  ="textfield" placeholder="Username">
            <input type="password" name="pass" class  ="textfield" placeholder="Password">

            <div class="forgetpassword">
                <a href="#"class="link" onclick="message()" > Forget Password ? </a>
            </div>
            <input type = "submit" name = "login" value="Login" class = "btn">
            
            <div class="signup"> New member ? 
                <a href="#"class="link" > Signup Here! </a>
            </div>
            
        </div>
        </form>
    </div>

    <script>
        function message()
        {
            alert("This function is under development; ask admin to get password");
        }
    </script>
</body>
</html>

<?php
    include("connection.php");


        if(isset($_POST['login']))
        {
            $username = $_POST['username'];
            $password = $_POST['pass'];
            
            $query = "Select * from master_user where email = '$username' && pass = '$password' ";

            $data = mysqli_query($conn, $query);
            
            $total   = mysqli_num_rows($data);

            if($total == 1)
            {
               // echo "Login Successful";
                header("location:useradd.php");
            }
            else
            {
                echo "Login failed";
            
            }

        }
?>