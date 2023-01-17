<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
    <meta http-equiv="refresh" content="5; url =
    index.php" />
</head>
 
<body>
    <center>
        <?php
        // include('rms.php');
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "rms");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $user_name =  $_REQUEST['user_name'];
        $user_contact_no = $_REQUEST['user_contact_no'];
        $user_email =  $_REQUEST['user_email'];
        $user_password = $_REQUEST['user_password'];
        // $user_created_on = $object->get_datetime();
        // $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user_table(user_name,user_contact_no,user_email,user_password,user_profile,user_type,user_status,user_created_on)  VALUES ('$user_name',
            '$user_contact_no','$user_email','$user_password','','Waiter','Enable','')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please wait 5 Seconds<br>" 
                . " You will be Transfered to login Page</h3>";
 
            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>