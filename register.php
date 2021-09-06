<?php
session_start();
if(isset($_SESSION['name'])){
 echo "<script>window.location='index.php';</script>";
	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PRPCEM T&P PORTAL </title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/web/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<?php include "includes/header.php"; ?>
<?php 
//include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['f_name']))
{
$first_name = $_POST['f_name'];
$middle_name ="";
$last_name = $_POST['l_name'];
$email = $_POST['email'];
$password =$_POST['password'];
$contact = $_POST['contact'];
$branch = $_POST['branch'];
$college = $_POST['college'];
$add = $_POST['add'];
$city = $_POST['city'];
$gender = "";
$dob = "";
$year = "";
$roll_no = $_POST['roll_no'];
$prn_no = $_POST['prn_no'];


if($obj->insert_student($first_name,$middle_name,$last_name,$email,$password,$contact,$branch,$college,$add,$city,$gender,$dob,$year,$roll_no,$prn_no)==1)
{
/*$obj= new Connections(); 
$sql = $obj->db->prepare("select * from student where email='$email'");
$sql->execute();
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	$user_id=$row['ID'];
	$_SESSION['id']=$user_id;
	$_SESSION['email']=$email;
	$_SESSION['name']=$first_name;
}*/

 echo "<script>alert('You have submitted your data Succesfully!! Please Wait for Admin Approval!!');</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}}
 ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<!--<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				     <h2>Our Features :</h2>
      				<address>
						 <p>EASY TO USE</p><hr>
						 <p>FORUM</p><hr>
						 <p>SECURED LOGIN</p><hr>
				   		<p>EASY TO USE</p><hr>
				   		
				   	</address>
				</div>-->
				<div class="col-md-2"></div>
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Registration Form</h2>
					    <form method="post" action="register.php">
					    	<div>
						    	<span>First Name</span>
<span><input type="text" required name="f_name" class="form-control" id="userName">
</span>
						    </div>
                           
                            <div>
						    	<span>Last Name</span>
<span><input type="text" required name="l_name" class="form-control" id="userName">
</span>
						    </div>
						    
                         
                         
                         
                          <div>
						    	<span>Roll Number</span>
<span><input type="text" required name="roll_no" class="form-control" id="userName">
</span>
						    </div>
                            
                            
                             <div>
						    	<span>PRN No</span>
<span><input type="text" maxlength="12" required name="prn_no" class="form-control" id="userName">
</span>
						    </div>
                            
                               
                          <div>
						    	<span>E-mail</span>
						    	<span><input type="text" name="email" class="form-control" id="inputEmail3" required></span>
						    </div>
                             <div>
						    	<span>Password</span>
						    	<span><input type="password" name="password" class="form-control" id="inputEmail3" required> </span>
						    </div>
						   
                           
                            <div>
						    	<span>Mobile No</span>
<span><input type="text" maxlength="10" required name="contact" class="form-control" id="userName">
</span>
						    </div>
                            
                             <div>
						    	<span>Branch</span>
<span><?php 
//include 'Application/DB_Functions.php';  
$obj= new Connections(); 
$sql = $obj->db->prepare("SELECT * FROM  branch");
$sql->execute();
?> 
<select name="branch" class="form-control" required class="form-control">
<option value="">Select Branch</option>
 <?php while($row = $sql->fetch(PDO::FETCH_ASSOC)) { 

 ?>
 <option value="<?php echo $row['ID']; ?>"><?php echo $row['branchs']; ?></option>

 <?php } ?>
 </select> 


</span>
						    </div>
                            
                            
                            
                            
                            
                            
                            
                            
                          
 
 
 
 
                             <div>
						    	<span>College</span>
<span><select required name="college" class="form-control" id="userName">
<option value="Bhartiya Mahavidyalaya Amravati">P.R. POTE College of Engineering and Management </option>
<option value="other">P.R.Patil College of Engineering</option>
</select>
</span>
						    </div>
                            
                             <div>
						    	<span>Address</span>
<span><input type="text" required name="add"  class="form-control" id="userName">
</span>
						    </div>
                            
                            
                            <div>
						    	<span>City</span>
<span><input type="text" name="city" required class="form-control" id="userName">
</span>
						    </div>
                            
                            
                            
                            
                            
                           
                            
                            
                             <div>
						    	<!--<span>Select Year</span>
<span>
<select name="year" class="form-control" required style="width:40%;">
<option value="">Select Semister</option>
 
 <option value="1">
 First Semister</option>
 
 
 
 
 <option value="2">
 Second Semister</option>
 
 <option value="3">
 Third Semister</option>
 
 <option value="4">
 Fourth Semister</option>
 
 <option value="5">
 Fifth Semister</option>
 
 <option value="6">
 Sixth Semister</option>
 
 <option value="7">
 Seventh Semister</option>
 
  <option value="8">
 Eighth Semister</option>

 </select>
</span>-->
						    </div>
                            
                            
                            
                         <div>
						   		<label class="fa-btn btn-1 btn-1e">
                                <input type="submit" value="submit us">
                                </label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>