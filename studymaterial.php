<?php 
session_start();
?>
<?php include('headafterlogin.php');?>

    <div class="row">
      
      <?php include ('studymaterialmenu.php');?>
	  
      <div class="col-md-10">
      <h3 class="welcome">Welcome <span style="color:#2484A4;"> <?php echo $_SESSION['username'];    ?>  </span></h3>
        <?php $username=$_SESSION['username'];   ?>

       
<br>
<h1>Books Purchased </h1>

   <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>               
                <th>Name</th>    
                <th>Author</th>
                <th>Date Purchased</th>
                <th>Edition</th>
                <th>ISBN</th>    
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT bid,booklist.name,booklist.Author,borrowers.date_of_taken,booklist.Edition,booklist.ISBN FROM borrowers,booklist WHERE borrowers.isbn = booklist.ISBN and  borrowers.username = '$username'");
                     if($data === FALSE) { 
          die(mysql_error()); // TODO: better error handling
        }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>               
                <?php $bid = $row['bid']; ?>
                <td><?PHP echo  $row['name']; ?></td> 
                <td><?php echo  $row['Author'];?></td>
                <td><?PHP echo  $row['date_of_taken']; ?></td>                
                <td><?PHP echo  $row['Edition']; ?></td>
                <td><?PHP echo  $row['ISBN'];?></td>
                
                              
              </tr>
              <?php } ?>
  
        </table>    
        
      </div>
    </div>

    
  </div> 
  <br><br><br><br><br><br>
 <?php include('footer.php');?>