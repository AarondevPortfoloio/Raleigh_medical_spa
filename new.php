<!DOCTYPE html>
<html>
       <!-- Side navigation -->
    <div class="sidenav">
        <h2>Raleigh Medical Center</h2>
        <br>
        <a href="../index.php">Home</a>
        <a href="pageNav.php">Log In</a>
        <a href="apointmentRequest.php">Contact</a>
        <a href="comments.php">Feedback</a>
        <a href="staff.php">Staff</a>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
       
        <p> At Raleigh medical center we take pride in making sure our patients are our top priority! </p>
    </div>
        <!--Page View-->
    <div class="main">
        <center>
        <head>
            <title>Create a New Account</title>
        </head>
        <body>
        <br></br>
            <h1>Create a New Account</h1>
            <hr>
            <link rel="stylesheet" type="text/css" href="../style.css"/>
            <p></p>
        </body>
        <div class="account">
            <form action="createNew.php" method="POST">
                <?php $FName= "";
                $LName="";
                $address="";
                $City="";
                $State="";
                $ZipCode="";
                $phone_number= "";
                $Email="";
                $Doctor="";
                $DOB="";
                $gender="";
                ?>

                <head>
    
                    First Name: <input type="text" name="Fname" id="Fname" value="<?php echo $FName;?>">
                    <br><br>
                    Last Name: <input type="text" name="Lname" id="Lname" value="<?php echo $LName;?>">
                    <br><br>
                    Address: <input type="text" name="Address" id="Address" value="<?php echo $address;?>">
                    <br><br>
                    City: <input type="text" name="City" id="City" value="<?php echo $City;?>">
                    <br><br>
                    State: <input type="text" name="State" id="State"  placeholder="ex. VA" value="<?php echo $State;?>">
                    <br><br>
                    ZipCode: <input type="number" name="Zip" id="Zip" value="<?php echo $ZipCode;?>">
                    <br><br>
                    Phone #: <input type="text" name="phone_number"  id="phone_number"  placeholder="contact no." value="<?php echo $phone_number;?>">
                    <br><br>
                    E-mail: <input type="text" name="email"  id="email"  placeholder="mail@example.com" value="<?php echo $Email;?>">
                    <br><br>
                    Date Of Birth:<input type="date" name="Birthdate" id="Birthdate" value="<?php echo $DOB;?>">
                    <br><br>
                    <label for="doctor_choice">Choose a Doctor:</label>
                    <select name="doctor_choice" id="doctor_choice">
                    <option value="Nicole_Hannahs">Dr. Nicole Hannahs</option>
                    <option value="James_Dixon">Dr. James Dixon</option>
                    <option value="James_Yi">Dr. James Yi</option>
                    <option value="Frank_Smith">Dr. Frank Smith</option>
                    <option value="Dave_Walters">Dr. Dave Walters</option>
                    <option value="Margie_Malone">Dr. Margie Malone</option>
                    <option value="Shelly_Samuelson">Dr. Shelly Samuelson</option>
                    <option value="Anna_Robertson">Dr. Anna Robertson</option>
                    <option value="Matthew_Meyer">Dr. Matthew Meyer</option>
                    <option value="Daniel_Jameson">Dr. Daniele Jameson</option>
                    <option value="Dwight_Sawin">Dr. Dwight Sawin</option>
                    <option value="Jack_Benne">Dr. Jack Benne</option>
                    </select>
                </head>
                <br></br>
                <input type="submit" value="Sign Up">
                <br></br>
            </form>
        </div>
        </hr>
        </center>
    </div>
</html>
