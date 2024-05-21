<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu Example</title>
    <style>

nav {
            background-color: #333;
            padding: 10px 0;
        }

        ul {
            list-style-type:none;
            margin: 0;
            padding: 0;
        }

        li {
            display:inline-table;
            margin-right: 20px;
            position: relative;
        }

        a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 10px;
        }

        a:hover {
            background-color: #555;
        }

        /* CSS for dropdown menu */
        ul ul {
            display: none;
            position: absolute;
            background-color: #444;
            padding: 10px;
            border-radius: 0 0 5px 5px;
        }

        li:hover > ul {
            display: block;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="organisation.php">Organisation</a></li>
            <li><a href="useradd.php">User</a>
            <ul>
            <li><a href="client_contacts.php">Customer Details</a></li>
            </li></ul>
            <li><a href="client.php">Customers</a></li>
            <li><a href="ticket_new.php">Service Ticket</a></li>
            <ul>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Values</a></li>
                </ul>
            
        </ul>
    </nav>
    
    
</body>
</html>
