<?php include_once('apointmentRequest.php')?>
<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    
        <?php
        function insertappt(){
           
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
          

        if(isset($_POST['my_date_control']))
        $date=$_REQUEST['my_date_control'];
        else $date='date_value';
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone_number=  $_REQUEST['phone_number'];
        $visit_reason = $_REQUEST['visit_reason'];
        //$date = $_REQUEST['date'];
        $time = $_REQUEST['appt'];
        $comment = $_REQUEST['comment'];
        $gender= $_REQUEST['gender'];

        $time_in_12_hour_format  = date("g:i a", strtotime($time)); 

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO appointment  VALUES ('$name', 
            '$email','$phone_number','$visit_reason','$date','$time_in_12_hour_format','$comment','$gender')";
         
        // Close connection
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
    }
        ?>
    
</body>
  
</html>
