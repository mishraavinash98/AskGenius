  <?php
session_start();
require 'connection.php';

if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];


  $stmt=$conn->prepare("select count('id') from 'registration' where 'username'='$username' and 'password'='$password'");

  $stmt->execute();
  $count=$stmt->fetchColumn();

  if ($count=="1"){

    $_SESSION['username']=$username;

    header('location:profile.php');

    }

  else 
    echo"Username or password problem";

}
?>
<?php include('header.php');?>
<body>
  <div class="content_area">
    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <form class="form-horizontal" role="form" action="newlog.php" method="POST">
          <br><br><br><br>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="dept">Select Login Role</label>
                  <div class="col-sm-8"> 
                  <select class="form-control" id="dept" name="userrole">
                    <option value="select">Select Your Role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="webadmin">Admin</option>
                  </select>
                   </div>
                </div>
                
                
                <div class="form-group">
                  <label class="control-label col-sm-4" for="email">User Name:</label>
                  <div class="col-sm-8">
                    <input type="username" class="form-control" id="username" name="username" placeholder="User Name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-4" for="pwd">Password:</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"><br/>
                    <button type="submit" class="btn btn-default" name="login">Login</button> <span> New User? <a href="registration.php">Register</a>
                  </div>
                  
                </div> 

              </form>


        </div>
      
      </div>
    </div>
  </div><br><br><br><br><br><br>
   <?php include('footer.php');?>
 </body>