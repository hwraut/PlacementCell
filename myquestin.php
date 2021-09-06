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
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>My Forum Question</h2>
            
            <?php if(!isset($_SESSION['name'])){ ?>
		        <a href="login.php" class="btn btn-primary" style="float:right;">Create Question</a><br><br>
                 <?php }else{ ?>
                <a href="create-question.php" class="btn btn-primary" style="float:right;">Create Question</a><br><br>  
                 
                 <?php } ?>
           
            <hr>
            
           <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped" style="font-size:16px;">
                                                <thead>
                                                    <tr>
                                                      
                                                         <th data-priority="1">Question</th>
                                                         <th data-priority="2">Ask by</th>
       <th data-priority="2">Category</th>                                                  
                                                       
                                                        <th data-priority="5">Time</th>
                                                        
                                                          
                                                        
                                                     
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
 <?php	

    //include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			$name=$_SESSION['name'];
  $sql = $obj->db->prepare("select * from  forum where question_owner='$name'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
 <th><a href="Forum_reply.php?id=<?php echo $row['id']; ?>">
						<?php echo $row['question']; ?></a></th>
                        <td><?php echo $row['question_owner']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        
                                                         
                                                    </tr>      
                                          <?php } ?>          
                                                </tbody>
                                            </table>
		</div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html>