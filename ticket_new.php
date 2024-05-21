<?php
 include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="useradd.css">
    
    <title>New Ticket Registration Data Entry</title>
</head>
<body>
<?php include 'navigation_menu.php'; ?>
    
<div class = "container">
    <form action="#" method="POST">  
        <div class = "title">
            New Ticket / Complain Registration 
        </div>
            <div class = "form">
                <div class = "input_fields">
                    <label>Ticket Type </label>
                        <select class="selectbox" name="ticket_type">
                            <option value="">Select </option>
                            <option value="New Installation">New Installation</option>
                            <option value="Repairing">Repairing</option>
                            <option value="Expansion Work">Expansion Work</option>
                            <option value="Inquiry">Inquiry</option>
                        </select>
                </div>
                <?php
                
                    $QUERY = mysqli_query($conn,"Select name from master_client order by name");
                    $rowcount = mysqli_num_rows($QUERY);
                ?>

                <div class = "input_fields">
                    <label>Client Name</label>
                    <select class ="selectbox"  name = "name" >
                    <option value ="">Select</option>

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
                <label>Address</label>
                <textarea class="textarea"  name = "address"  ></textarea>
            </div>

            <div class = "input_fields">
                <label>City</label>
                <input type ="text" class = "input"  name = "city" >
            </div>

            <h2>Caller Details </h2>
            <div class = "input_fields">
                <label>Called By </label>
                <input type ="text" class = "input"  name = "calledby" >
            </div>

            <div class = "input_fields">
               <label>Contact No.</label>
               <input type ="text" class = "input"  name = "contactno"  >
            </div>
            <h2>Problem Statement </h2>
                <div class = "input_fields">
                    <label>Statement</label>
                    <textarea class="textarea"  name = "statement" ></textarea>
                </div>

            <div class = "input_fields">
                <label>Date</label>
                <input type ="date" class = "input"  name = "t_date" value=date >
            </div>

           <div class = "input_fields">
                <label>Ticket Status</label>
                <select class ="selectbox"  name = "ticket_status" >
                    
                    <option value ="New Ticket">New Ticket</option>
                    
                    
                </select>
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

        $ticket_type    = $_POST['ticket_type'];
        $cname          = $_POST['name'];
        $address        = $_POST['address'];
        $city           = $_POST['city'];
        $calledby       = $_POST['calledby'];
        $contactnumber  = $_POST['contactno'];
        $statement      = $_POST['statement'];
        $t_date         = $_POST['t_date'];
        $status         = $_POST['ticket_status'];
       

        if (!empty($ticket_type) &&  !empty($cname)&&  !empty($address) && !empty($city) && !empty($calledby) && !empty($contactnumber) && !empty($statement) && !empty($t_date) && !empty($status) )
        {

           // $ticket_type, $address, $city, $calledby, $contactnumber, $statement, $t_date, $status
 
            $QUERY = "INSERT INTO master_client (name, type, address, state, city, pincode, gst, pan, accountname, accountno, accounttype, accountbank, accountbranch, accountifsc, googlelocation) VALUES ('$ticket_type', '$cname', '$address', '$city', '$calledby', '$contactnumber', '$statement', '$t_date', '$status' )";   

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