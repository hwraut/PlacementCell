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
</head>
<body>
<?php include "includes/header.php"; ?><div class="container" style="width:90%; padding:10px;">
<div class=""><!-- start main -->
	<div class="">
		<div class="">
			<h2>Company details</h2>
            
         
          
          <div class="row">   
          
 <?php	

    //include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$i=0;		
  $sql = $obj->db->prepare("select * from drive");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
				$i++;
			 $company_crieria=$row['company_crieria'];
	 $comp_id=$row['company_name'];
			?> 
    <div class="col-md-4">
      <div class="thumbnail">
      
          <img src="images/11.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p align="center"><?php echo $row['companies_names']; ?></p><br>
            <a href="campus-drive.php?appliedid=<?php echo $row['id']; ?>&per=<?php echo $company_crieria; ?>&compid=<?php echo $comp_id; ?>" class="btn btn-info btn-block">Apply Now</a>
         <br>
         
    <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Company Details</button>     
          </div>
       
      </div>
    </div>
   

 <div class="modal fade" id="myModal<?php echo $i; ?>" role="dialog">
    <div class="modal-dialog">
   <?php  $sql1 = $obj->db->prepare("select * from company where ID='$comp_id'");
		$sql1->execute();
		 while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)){ 
			$company_name=$row1['company_name'];
			$company_details=$row1['company_details'];
			$company_headoffice_loc=$row1['company_headoffice_loc'];
			$company_website=$row1['company_website'];
			$company_contact=$row1['company_contact'];
			$company_email=$row1['company_email'];
			$technology_details=$row1['technology_details'];
			?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Company Details</h4>
        </div>
        <div class="modal-body" style="font-size:18px;">
          <p><?php echo  $company_name; ?></p>
            <p>Details: <?php echo  $company_details; ?></p>
              <p>Location: <?php echo  $company_headoffice_loc; ?></p>
                <p>Website: <?php echo  $company_website; ?></p>
                  <p>Company Contact: <?php echo  $company_contact; ?></p>
                    <p>Company Email: <?php echo  $company_email; ?></p> 
                    <p>Technology: <?php echo  $technology_details; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
 
                                              <?php } ?>
		 </div>   </div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html>

  
  
  


<?php if(isset($_GET['appliedid'])){
	$id=$_GET['appliedid'];$comp_idd=$_GET['compid'];$company_crieria=$_GET['per'];
	$usersid=$_SESSION['id'];
	 $obj= new Connections();
	 $sql = $obj->db->prepare("select * from profile where user_id='$usersid' ORDER  BY ID DESC LIMIT 1");
	 $sql->execute();
	 while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	  $tenthper=$row['tenthper'];		
	 $twelthper=$row['twelthper'];		
	 $fst=$row['fst'];
	 $second=$row['second'];
	 $third=$row['third'];		
	
	 }
	 
	 
	if($company_crieria<=$tenthper && $company_crieria<=$twelthper && $company_crieria<=$fst && $company_crieria<=$second && $company_crieria<=$third){
	
	
	 
	  $sql = $obj->db->prepare("select * from applied where drive_id='$id' AND student_id='$usersid'");
	 $sql->execute();
	 $count=$sql->rowCount();
		
	if($count>=1){
	echo "<script>alert('You Have Already Applied!');</script>";	
		}else{
			
	$sql = $obj->db->prepare("INSERT INTO `applied` (`drive_id`, `student_id`,`company_id`) VALUES ('$id', '$usersid', '$comp_idd')");
	 $sql->execute();		
		echo "<script>alert('You Have Applied Succesfully!');</script>";
	}
	
		
	echo "<script>window.location.href='campus-drive.php';</script>";
				
			
		}else{
			echo "<script>alert('You are Not Eligible to Apply this job!!');</script>";
		echo "<script>window.location.href='campus-drive.php';</script>";
		
			}
	 
	 
	 
	
	} 
	
	
	
	
	
	
	?>