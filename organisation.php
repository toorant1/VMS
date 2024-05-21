<?php
 include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="useradd.css">
    
    <title>Organisation Data</title>
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
                <label>Company Name</label>
                <input type ="text" name = "cname" class = "input" required>
            </div>

            <div class = "input_fields">
                <label>Address</label>
                <textarea class="textarea"  name = "address" required></textarea>
            </div>

            <div class = "input_fields">
                <label>State </label>
                <input type ="text" class = "input"  name = "state" required>
            </div>

            <div class = "input_fields">
                <label>City</label>
                <input type ="text" class = "input"  name = "city" required>
            </div>

            <div class = "input_fields">
                <label>Pin Code</label>
                <input type ="text" class = "input"  name = "pin" required>
            </div>

            <div class = "input_fields">
                <label>Phone</label>
                <input type ="text" class = "input"  name = "phone" required>
            </div>
            
            <div class = "input_fields">
                <label>Email</label>
                <input type ="text" class = "input"  name = "email" required>
            </div>

            <div class = "input_fields">
                <label>Google Locations</label>
                <input type ="text" class = "input"  name = "googlelocation" required>
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

        $cname          = $_POST['cname'];
        $address        = $_POST['address'];
        $state          = $_POST['state'];
        $city           = $_POST['city'];
        $pincode        = $_POST['pin'];
        $phone          = $_POST['phone'];
        $email          = $_POST['email'];
        $googlelocation = $_POST['googlelocation'];
            

        if (!empty($cname) && !empty($address) && !empty($state) && !empty($city) && !empty($pincode) && !empty($phone) && !empty($email) && !empty($googlelocation))
        {

            
            $QUERY = "INSERT INTO master_organisation ( name, address, state, city, pincode, mobile, email, googlelocation) VALUES ('$cname', '$address', '$state', '$city', '$pincode', '$phone', '$email','$googlelocation' )";   
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