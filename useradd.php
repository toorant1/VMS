<?php
 include("connection.php");
 //include("navigation.css");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="useradd.css">
    
    <title>New User Creation</title>
</head>
<body>
<?php include 'navigation_menu.php'; ?>
    
<div class = "container">
    <form action="#" method="POST">  
        <div class = "title">
            Registration Form 
        </div>
        <div class = "form">
            <div class = "input_fields">
                <label>First Name</label>
                <input type ="text" name = "fname" class = "input" required>
            </div>

            <div class = "input_fields">
                <label>Last Name</label>
                <input type ="text" class = "input"  name = "lname" required>
            </div>

            <div class = "input_fields">
                <label>Password </label>
                <input type ="password" class = "input"  name = "password" required>
            </div>

            <div class = "input_fields">
                <label>Confirm Password</label>
                <input type ="password" class = "input"  name = "conpassword" required>
            </div>

            <div class = "input_fields">
                <label>Gender</label>
                <select class ="selectbox"  name = "gender" required>
                    <option value ="">Select</option>
                    <option value ="Male">Male</option>
                    <option value ="Female">Female</option>
                </select>
            </div>

            <div class = "input_fields">
                <label>Email</label>
                <input type ="text" class = "input"  name = "email" required>
            </div>

            <div class = "input_fields">
                <label>Phone</label>
                <input type ="text" class = "input"  name = "phone" required>
            </div>

            <div class = "input_fields">
                <label>Address</label>
                <textarea class="textarea"  name = "address" required></textarea>
            </div>

            <div class = "input_fields terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark" ></span>
                </label>
                
                <p> Agreed to term and conditions</p> 
            </div>

            <div class = "input_fields">
                <input type="submit" value  = "Register"  class= "btn"  name = "register">

            </div>

        </div>
    </form>
</div>





</body>
</html>

<?php
    if(isset($_POST['register']))
    {
            $fname          = $_POST['fname'];
            $lname          = $_POST['lname'];
            $password       = $_POST['password'];
            $gender         = $_POST['gender'];
            $email          = $_POST['email'];
            $phone          = $_POST['phone'];
            $address        = $_POST['address'];

        if (!empty($fname) && !empty($lname) && !empty($password) && !empty($gender) && !empty($email) && !empty($phone) && !empty($address))
        {

            
            $QUERY = "INSERT INTO master_user ( fname, lname, pass, gender, email, phone, address ) VALUES ('$fname', '$lname', '$password', '$gender', '$email', '$phone', '$address')";   
            $data = mysqli_query($conn, $QUERY);

            if($data)
            {
                echo "data inserted into data";
            }
            else
            {
                echo "data failed";
            }
        }
        else
        {
            echo "<script>alert ('Fill the form data');</script>";
        }   
    }
    
?>