<?php
session_start();
?><!DOCTYPE HTML>
<html>
<head>
<title>Online Forum System</title>
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
			<h2>Notification Section</h2>
          
            <hr>
            
           <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped" style="font-size:16px;">
                                                <thead>
                                                    <tr>
                                                      
                                                         <th data-priority="1">Sr No.</th>
                                                         <th data-priority="2">Notification Title</th>
       <th data-priority="2">Notification Details</th>                                                  
                                                       
                        <th data-priority="2">Date</th>                                                  
                                                       
                                                         
                                                        
                                                     
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
 <?php	

    //include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from  notification ORDER BY ID DESC");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
 <th><?php echo $row['ID']; ?></th>
						<th><?php echo $row['title']; ?></th>
                        <td><?php echo $row['notice']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                   
                        
                                                         
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