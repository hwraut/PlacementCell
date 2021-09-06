<?php
session_start();
?><!DOCTYPE HTML>
<html>
<head>
<title>Online Techinical Forum</title>
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
<style>
input[type=text],select,input[type=number]{border:1px solid black;}
</style>


</head>
<body>
<?php include "includes/header.php"; ?><div class="container" style="width:90%; padding:10px;">
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>My  Profile</h2>
            
          <a href="profile.php" class="btn btn-primary dropdown-toggle" style="float:right;">Update Profile</a> 
           
            <hr>
        <?php	

   // include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$email=$_SESSION['id'];		
  $sql = $obj->db->prepare("select * from profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
		$sql->execute();
		while($row = $sql->fetch(PDO::FETCH_ASSOC)){
		$school=$row['school'];
		$passout=$row['passout'];
		$highschool=$row['highschool'];
		$highschool_passout=$row['highschool_passout'];
		$tenthper=$row['tenthper'];
		$twelthper=$row['twelthper'];
		$fst=$row['fst'];
		$second=$row['second'];
		$third=$row['third'];
		$fourth=$row['fourth'];
		$branchh=$row['branchh'];	
		$currently_working=$row['currently_working'];
		$lives_in=$row['lives_in'];
		$from=$row['from'];
		$hobby=$row['hobby'];		
			$pic=$row['pic'];	 $pic1=$row['cv'];	
		?>      
                 <!-- FORM START FROM HERE FOR INSERTING --->  
       <form action="" method="post" enctype="multipart/form-data"> 
          <div class="col-md-12 col-sm-12 col-xs-12">

  

  <div class="form-group">
  
     
      <img src="images/<?php echo $pic; ?>" style="height:200px; width:200px; border-radius:50%;">
  <h1> <a href="images/<?php echo $pic1; ?>" download>Your CV</a></h1>
    <br><br>
      <div class="controls">
      
  
      <table class="table table-bordered table-hover" style="font-size:22px;">
  <caption>
   
  </caption>
  <tr>
    <td>&nbsp;  
       10th School: <?php echo $school;  ?></td>
    <td>&nbsp; School Passout: <?php echo $passout;  ?></td>
    <td>&nbsp; 10th Percentage: <?php echo $tenthper;  ?></td>
  </tr>
  <tr>
    <td>&nbsp; Highschool: <?php echo $highschool;  ?></td>
    <td>&nbsp; Highschool Passout: <?php echo $highschool_passout;  ?></td>
    <td>&nbsp; 12 th Percentage: <?php echo $twelthper;  ?></td>
  </tr>
  <tr>
    <td>&nbsp;First Year CGPA: <?php echo $fst;  ?></td>
    <td>&nbsp;2nd Year CGPA: <?php echo $second;  ?></td>
    <td>&nbsp;3rd Year CGPA: <?php echo $third;  ?> </td>
  </tr>
  <tr>
    <td>&nbsp; 4th Year CGPA: <?php echo $fourth;  ?></td>
    <td>&nbsp;BRanch: <?php echo $branchh;  ?></td>
    <td>&nbsp;Lives In: <?php echo $lives_in;  ?></td>
  </tr>
  <tr>
    <td>&nbsp;From: <?php echo $from;  ?></td>
    <td>&nbsp;Hobby: <?php echo $hobby;  ?></td>
    <td></td>
  </tr>
  
</table>

  
  
      </div>
  </div>
  
  <br>
 

                  
          </div>
                  
           </form>
           <!-- FORM END FROM HERE FOR INSERTING --->  
           
           
           <?php } ?>
		</div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html>