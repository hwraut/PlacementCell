<?php
session_start();
if(isset($_SESSION['name'])){
 echo "<script>window.location='index.php';</script>";
	
}
?><!DOCTYPE HTML>
<html>
<head>
<title></title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' >
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' >
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" >
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
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			
		</div>
	</div>
</div><!-- end main -->
<?php
//include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function


 if(isset($_POST['username']) && isset($_POST['password']))
            {
        $name=$_POST['username'];
        $password=$_POST['password']; 

        if ($obj->CheckLogin($name,$password)==TRUE) // Here we call the CheckLogin function for admin login through the object        
        {
            $_SESSION['email']=$name;
		
    
  	$obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$sql = $obj->db->prepare("select * from student where email='$name'");
	$sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		 $_SESSION['name']=$row['first_name'];
		 $_SESSION['id']=$row['ID'];
		  $_SESSION['branch']=$row['branch'];
		 $_SESSION['sem']=$row['year'];
	}
	echo "<script>window.location='index.php';</script>";
	}
        else
        {
        echo "<script>alert('Incorrect Username and Password');</script>";
        }

} ?>

<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>Our Features :</h2>
      				<address>
						 <p>EASY TO USE</p><hr>
						 <p>FORUM</p><hr>
						 <p>SECURED LOGIN</p><hr>
				   		<p>EASY TO USE</p><hr>
				   		
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Login</h2>
					    <form method="post" action="login.php">
					    	<div>
<span>Email</span>
<span><input type="text" name="username" required class="form-control" id="userName"></span>
						    </div>
						    <div>
						    	<span>Password</span>
<span><input type="password" name="password" required class="form-control" id="inputEmail3"></span>
						    </div>
						   
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
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