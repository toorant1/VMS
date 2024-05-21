<?php
 include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="useradd.css">
    
    <title>Client Contacts Details</title>
</head>

    <script src="jquery.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>


</script>


<body>
<?php include 'navigation_menu.php'; ?>

    
<div class = "container">
    <form action="#" method="POST">  
        <div class = "title">
            Set Contact List of Client 
        </div>
            <div class = "form">
                
                <?php
                
                    $QUERY = mysqli_query($conn,"Select id, name, address, city, pincode from master_client order by name");
                    $rowcount = mysqli_num_rows($QUERY);
                ?>


                <div class = "input_fields">
                    <label>Client Name</label>
                    <select class ="selectbox"  id = "name" onchange="run()">
                    <option value ="" selected disabled>Select</option>
                    
                        <?php
                        for ($i = 0; $i < $rowcount; $i++)
                        {
                            $raw = mysqli_fetch_array($QUERY);

                        ?>
                            <option value =<?php echo $raw["name"] ?>><?php echo $raw["name"] ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </div>


               
                                           

                <div class = "input_fields">
                    <label>Client ID </label>
                    <input type ="text" class = "input" id="name-id" name = "name_ID" >

                   
            </div>
            
            <div class = "input_fields">
                <label>Contact Name </label>
                <input type ="text" class = "input"  name = "name" >
            </div>

            <div class = "input_fields">
                <label>Contact No</label>
                <input type ="text" class = "input"  name = "number" >
            </div>

            <div class = "input_fields">
                <label>Email ID </label>
                <input type ="text" class = "input"  name = "email" >
            </div>

            <div class = "input_fields">
                <label>Designation</label>
                <input type ="text" class = "input"  name = "designation" >
            </div>

            <div class = "input_fields">
                <input type="submit" value  = "Set Data"  class= "btn"  name = "register">

            </div>

        </div>
    </form>
</div>

</body>
</html>

<?php
    if(isset($_POST['register']))
    {

        $name            = $_POST['name'];
        $mobilenumber    = $_POST['number'];
        $email_id        = $_POST['email'];
        $designation     = $_POST['designation'];
       

        if (!empty($name) &&  !empty($mobilenumber) && !empty($email_id) && !empty($designation) )
        {

           // 
 
            $QUERY = "INSERT INTO master_client_contact (user_name, contact_no, email, designation) VALUES ('$name', '$mobilenumber', '$email_id', '$designation')";   

            $data = mysqli_query($conn, $QUERY);

            if($data)
            {
                
                echo "<script>alert ('Data Record Succssfully');</script>";
            }
            else
            {
                echo "<script>alert ('Registration Failed, Please fill the data in proper manner');</script>";
            }
        }
        else
        {
            echo "<script>alert ('Fill the form data');</script>";
        }   
    }
    
?>