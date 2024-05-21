<?php
 include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="useradd.css">
    
    <title>New Client Data Entry</title>
</head>
<body>
<?php include 'navigation_menu.php'; ?>
    
<div class = "container">
    <form action="#" method="POST">  
        <div class = "title">
            New Client Registration 
        </div>
            <div class = "form">
                <div class = "input_fields">
                    <label>Client Name</label>
                    <input type ="text" name = "cname" class = "input" required>
                    
                </div>
                
                <?php
                
                    $QUERY = mysqli_query($conn,"Select type from master_client_type");
                    $rowcount = mysqli_num_rows($QUERY);
                ?>

                <div class = "input_fields">
                    <label>Client Type</label>
                    <select class ="selectbox"  name = "clienttype" required>
                    <option value ="">Select</option>

                <?php
                for ($i = 0; $i < $rowcount; $i++)
                {
                    $raw = mysqli_fetch_array($QUERY);
                
                ?>
                    <option value =<?php echo $raw["type"] ?>><?php echo $raw["type"] ?></option>
                    
                <?php
                }
                ?>
                 </select>
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
                <h2>Statutory details </h2>
            <div class = "input_fields">
                <label>GST #</label>
                <input type ="text" class = "input"  name = "gst" required>
            </div>

            <div class = "input_fields">
               <label>PAN</label>
               <input type ="text" class = "input"  name = "pan" required>
            </div>
            <h2>Bank details </h2>
            <div class = "input_fields">
                <label>Bank Account Name</label>
                <input type ="text" class = "input"  name = "accountname" required>
            </div>

            <div class = "input_fields">
                <label>Account Number</label>
                <input type ="text" class = "input"  name = "accountno" required>
            </div>
            
            <div class = "input_fields">
                <label>Account Type</label>
                <select class ="selectbox"  name = "accounttype" required>
                    <option value ="">Select</option>
                    <option value ="Current">Current</option>
                    <option value ="Saving">Saving</option>
                    <option value ="Other">Other</option>
                </select>
            </div>
        
            <div class = "input_fields">
                <label>Bank Name</label>
                <input type ="text" class = "input"  name = "bankname" required>
            </div>

            <div class = "input_fields">
                <label>IFSC Code</label>
                <input type ="text" class = "input"  name = "accountifsc" required>
            </div>

            <div class = "input_fields">
                <label>Branch Name</label>
                <input type ="text" class = "input"  name = "accountbranch" required>
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
        $ctype          = $_POST['clienttype'];
        $address        = $_POST['address'];
        $state          = $_POST['state'];
        $city           = $_POST['city'];
        $pincode        = $_POST['pin'];
        $gst            = $_POST['gst'];
        $pan            = $_POST['pan'];
        $accountname    = $_POST['accountname'];
        $accountno      = $_POST['accountno'];
        $accounttype    = $_POST['accounttype'];
        $bankname       = $_POST['bankname'];
        $bankifsc       = $_POST['accountifsc'];
        $accountbranch  = $_POST['accountbranch'];
        $googlelocation = $_POST['googlelocation'];
            

        if (!empty($cname) &&  !empty($ctype) && !empty($address) && !empty($state) && !empty($city) && !empty($pincode) && !empty($gst) && !empty($pan) && !empty($accountname) && !empty($accounttype) && !empty($bankname) && !empty($bankifsc) && !empty($googlelocation))
        {

           // 
 
            $QUERY = "INSERT INTO master_client (name, type, address, state, city, pincode, gst, pan, accountname, accountno, accounttype, accountbank, accountbranch, accountifsc, googlelocation) VALUES ('$cname', '$ctype', '$address', '$state', '$city', '$pincode', '$gst','$pan','$accountname','$accountno', '$accounttype','$bankname','$accountbranch', '$bankifsc','$googlelocation' )";   

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