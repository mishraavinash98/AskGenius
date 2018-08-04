<?php 
session_start();
$dept='';
$sem='';
if (isset($_POST['dept'])){

$dept=$_POST['dept'];
$sem=$_POST['sem'];

//echo $dept;
}
?>

<?php include('headafterlogin.php');?>

<div class="row">
            
      <?php include ('studymaterialmenu.php');?>
	  
      <div class="col-md-10">
      <h3 class="welcome">Welcome <span style="color:#2484A4;"> <?php echo $_SESSION['username'];?></span></h3>
        <?php $username=$_SESSION['username'];   ?>

       
            <form class="form-horizontal" role="form" action="questpaper.php" method="POST">          
              <div class="col-md-7">
                <div class="form-group">
				<div class="col-sm-10">
                  
                  <select class="form-control" id="dept" name="dept">
                    <option value="select">Select Your Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electronics and Electrical Engineering</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Textile Eng">Textile Engineering</option>
                  </select>
				  
				<select class="form-control" id="sem" name="sem">
					<option value="select">Select Semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="5">6</option>
					<option value="5">7</option>
					<option value="5">8</option>
				</select>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
				<div class="col-md-7">
	
				</div>
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit">Search Papers</button>
                  </div>
                </div>
              </div>

              </form>

              <div class="row">
                <div class="col-md-10">
              <!--Search Result Here--><br><br>
			  

              <h3>All Available Question Papers for <?php echo $_POST['dept'];?> and  <?php echo $_POST['sem'];?></h3>
			  

            <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
			  <th>Subject</th>    
                <th>Exam Year</th>  
				<th>Download Link</th>                  
              </tr>
              <?php
               require 'newcon.php';   //include connection
			   $data = mysqli_query($link,"SELECT * from qestpaper WHERE dept ='$dept' and sem='$sem'; ");
                     
                     if($data === FALSE) { 
				die(mysql_error()); // TODO: better error handling
}
               while($row = mysqli_fetch_array($data)) {?>
              <tr>

			  <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['examyear']; ?></td> 
                <td><a href="<?PHP echo  $row['img_path']; ?>">Download</a></td>
                
              </tr>
              <?php } ?>
  
            </table>
            </div>

          </div>       
  
      </div>
    </div>

 </div> 
  <br><br>
 <?php include('footer.php');?>