<!DOCTYPE html>
<html lang="en">
<head>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASK-genuis</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">


  <script type="text/javascript" src="jquery.min.js"></script>
  <style type="text/css">

        .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

            border: 1px solid #000;
            }   
            .student{display: block;}     

    </style>
  <script type="text/javascript">

	var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Passwords Match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords DONT Match';
  }
}

   
    </script>
</head>
<body> 
     
<?php include('header.php');?>
  
  <div class="container">
    <div>      

       <p><h1>Sign Up As a</h1>
	   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="registration.php">Student</a></li>
            <li><a href="techerregisteration.php">Teacher</a></li> 
          </ul>
        </div>
    </div>
  

    <div class="row">
      <div class="col-md-12">
        <h1 class="regheading">Student Registration Form</h1>       

        <form class="form-horizontal" role="form" action="st_insert.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="Student ID">Student ID</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="st_id" id="st_id" placeholder="Enter Student ID" required>
                </div>
              </div>
               <div class="form-group">
                  <label class="control-label col-sm-2" for="dept">Select Department</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="dept" name="dept" required>
                    <option value="select">Select Your Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electronics and Electrical Engineering</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Textile Eng">Textile Engineering</option>
                  </select>
                  </div>
                </div>
               <div class="form-group">
                <label class="control-label col-sm-2" for="session">Semester:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="session" name="session" placeholder="Enter Session" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">User Name:</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="username" name="username" placeholder="User Name" required>
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-2" for="email">Password :</label>
                <div class="col-sm-10">
                   <input  class="form-control" placeholder="Password" name="password" id="password" type="password" pattern=".{5,12}" required title="5 to 12 characters" onkeyup='check();' required >
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-2" for="email">Confirm Password :</label>
                <div class="col-sm-10">
                   <input  class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" pattern=".{5,12}" required title="5 to 12 characters"  onkeyup='check();'required > 
				   <span id='message'></span>
                </div>
              </div>
              

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                </div>
              </div>
			   
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>
       </div>
    </div>
  
  </div> 
   <?php include('footer.php');?>