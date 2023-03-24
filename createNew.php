<?php include_once('new.php')?>
<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Account page</title>
</head>
  
<body>
    
        <?php
        function insertacct(){
           
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
       
          $conn = mysqli_connect("localhost", "root", "", "mysql");
        // Check connection
        if($conn === false){
            echo "could not connect to databse";
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        else
        echo "connected to databse";
          
        // Taking all 5 values from the form data(input)
        $FName =  $_REQUEST['Fname'];
        $LName = $_REQUEST['Lname'];
        $address = $_REQUEST['Address'];
        $City = $_REQUEST['City'];
        $State = $_REQUEST['State'];
        $ZipCode = $_REQUEST['Zipcode'];
        $phone_number = $_REQUEST['phone_number'];
        $Email = $_REQUEST['email'];
        $Doctor = $_REQUEST['doctor_choice'];
        $DOB = $_REQUEST['Birthdate'];
                

        // Performing insert query execution
        $sql = "INSERT INTO patient  VALUES ('$FName', '$LName', '$address', '$City', '$State', '$ZipCode',
                '$phone_number', '$Email', '$Doctor', '$DOB')";
         
        // Close connection
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        }
        ?>
    
</body>
  
</html>
