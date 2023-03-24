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
            <title>Comments</title>
        </head>
        <body>
        <br></br>
            <h1>Feedback</h1>
            <hr>
            <link rel="stylesheet" type="text/css" href="../style.css"/>
            <h2>Let us Know How We Are Doing</h2>
            <p>You can provide us feedback on your experience with Raleigh Medical Center. <br> 
                We want to provide you the best and secure source for all your medical needs.</p>
        </body>
        <form class="form" action="pfeedback.php" method="POST">
    
            <p class="username">
                <input type="text" name="name" id="name" placeholder="Enter your name" >
                <label for="name">Name</label>
            </p>
            <br>
            <p class="useremail">
                <input type="text" name="email" id="email" placeholder="mail@example.com" >
                <label for="email">Email</label>
            </p>
            <br>
            <p class="usercontact">
                <input type="text" name="contact" id="contact" placeholder="contact no." >
                <label for="contact">Phone number</label>
            </p>    
            <br>
            <p class="usertext">
                <textarea name="text" placeholder="We want to hear from you!" ></textarea>
                                <label for="text">Feedback</label>
            </p>
            <br>
            <p class="usersubmit">
                <input type="submit" name="submit" value="Send" >
            <br></br>
            </p>
        </form>
        </hr>
        </center>
    </div>
</html>
