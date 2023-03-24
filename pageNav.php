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
        <!-- Page View-->
    <div class="main">
        <head>
            <title>Login Form</title>
        </head>
        <body>
        <center>
        <br></br>
            <h1>Login</h1>
          <hr>
            <link rel="stylesheet" type="text/css" href="../style.css"/>
            <p></p>
            
            <div class="row">
                <div class="column">
                    <form id="login" method="get" action="login.php">
                        <br>
                        <h2><b>Patient</b></h2>
                        <label><b>User Name: </b></label>
                        <input type="text" name="Uname" id="Uname" placeholder="Username">    
                        <br><br>    
                        <label><b>Password: </b></label>    
                        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
                        <br><br>    
                        <input type="button" onclick="window.location='dashboardPatient.php';" name="patientLogin" id="patientLogin" value="Log In Here">       
                        <br><br>    
                        <input type="checkbox" id="check">    
                        <span>Remember me</span>    
                        <br><br>    
                        Forgot <a href="password.php">Password</a> 
                        <br><br>
                        <a href="new.php">Create New Account</a> 
                    </form>
                </div>
                <div class="column">
                    <form id="login" method="get" action="login.php">
                        <br>
                        <h2><b>Doctor</b></h2>
                        <label><b>User Name: </b></label>
                        <input type="text" name="Uname" id="Uname" placeholder="Username">    
                        <br><br>    
                        <label><b>Password: </b></label>    
                        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
                        <br><br>    
                        <input type="button" onclick="window.location='dashboardDoctorAdmin.php';" name="doctorLogin" id="doctorLogin" value="Log In Here">       
                        <br><br>    
                        <input type="checkbox" id="check">    
                        <span>Remember me</span>    
                        <br><br>    
                        Forgot <a href="password.php">Password</a> 
                        <br><br>
                        <a href="new.php">Create New Account</a> 
                    </form>
                </div>
            </div>
            </hr>
            </center>
        </body>
    </div>
</html>
