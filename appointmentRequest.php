<!DOCTYPE html>
<?php require_once('insert.php');
 var_dump($_POST);
if (isset($_POST['name'])){
    insertappt();
}

?>
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
            <title>Appointment Request</title>
        </head>
        <body>
        <br></br>
            <h1>Request an apointment</h1>
            <hr>
            <link rel="stylesheet" type="text/css" href="../style.css"/>
            <p></p>
        </body>
        <div class="apointment">
            <form action="insert.php" method="POST">
                <?php $name= "";
                $email= "";
                $phone_number= "";
                $comment="";
                $date="";?>

                <head>
    
                    Name: <input type="text" name="name" id="name" value="<?php echo $name;?>">

                    E-mail: <input type="text" name="email"  id="email" value="<?php echo $email;?>">

                    Phone #: <input type="text" name="phone_number"  id="phone_number" value="<?php echo $phone_number;?>">

                    <br></br>
                    <br></br>

                    <label for="visit_reason">Reason for your visit:</label>
                    <select name="visit_reason" id="visit_reason">
                    <option value="Medical_Emergency">Medical Emergency</option>
                    <option value="Regular_Checkup">Regular checkup</option>
                    <option value="Sickness">Sickness</option>
                    <option value="Bodily_Harm">Bodily harm</option>
                    </select>


                    <br></br>
                    <br></br>
                    <?php echo "Please select a date: " ?>
                    <input type="date" id="date"
                    name="my_date_control" value="date_value">
                    <br></br>
                    <br></br>
                    <label for="appt">Choose a time for your meeting:</label>

                    <input type="time" id="appt" name="appt"
                        min="09:00" max="16:30" required>

                        <small>Office hours are 9am to 5pm</small>
                    <br></br>
                    <br></br>

                </head>

                Comment: <textarea name="comment" id="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                <br></br>

                Gender:

                <input type="radio" name="gender" id="gender"
                <?php if (isset($gender) && $gender=="female") echo "checked";?>
                value="female">Female
                <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="male") echo "checked";?>
                value="male">Male
                <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="other") echo "checked";?>
                value="other">Other
                <br></br>
                <br></br>
                <input type="submit" value="Submit">
                <br></br>
            </form>
        </div>
        </hr>
        </center>
    </div>
</html>
