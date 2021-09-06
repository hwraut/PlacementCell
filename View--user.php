<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html><?php
session_start();
  include 'Application/DB_Functions.php';
  $obj= new Connections();
			
?>
<!DOCTYPE html>
<html class=" ">
<head>

        <title> Admin</title>


        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/responsive-tables/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
 
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
         <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title"> Students Listing</h1>                            </div>

        <a href="user-dashboard.php" class="btn btn-primary" style="float:right;"> Back</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                <div class="col-md-12">
                                        
                              
                                    </div>
                                
                                <h2 class="title pull-left"> Student's  List</h2>
                                <div class="actions panel_actions pull-right">
                                    
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
 <form action="" method="POST" style="float:left; margin:10px;">
     <select class="form-control" style="width:200px;" required name="percentage">
     <option  value="">Select Criteria</option>
     <option  value="40">Above 40% All time</option>
     <option  value="50">Above 50% All time</option>
     <option  value="55">Above 55% All time</option>
     <option  value="60">Above 60% All time</option>
     <option  value="65">Above 65% All time</option>
     <option  value="70">Above 70% All time</option>
     <option  value="75">Above 75% All time</option>
     <option  value="80">Above 80% All time</option>
     </select><br>
     <input type="submit" value="Search" class="btn btn-info">
     </form> 
     
     
     &nbsp;&nbsp;&nbsp;
      <form action="" method="POST" style="float:left;margin:10px;">
   <input type="text" name="name" class="form-control" required placeholder="Search By Name"><br>
     <input type="submit" value="Search" class="btn btn-info">
     </form> 
     
     
     
        
                                        <div class="table-responsive" data-pattern="priority-columns">
                                        
                                   
        
          <?php
												
			if(isset($_POST['percentage'])){		?>
                                                                            
                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                      
                                                         <th data-priority="1">First name</th>
                                                         <th data-priority="2">Last Name</th>
                                                         <th data-priority="3">Email</th>
                                                       
                                                        <th data-priority="5">Branch</th>
                                                        
                                                     <th data-priority="5">College</th>
                                                      <th data-priority="5">city</th>
                                                      <th data-priority="5">Status</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               <?php							
		$percentage=$_POST['percentage'];										

  $obj= new Connections();
 $sql1 = $obj->db->prepare("select * from profile where tenthper>$percentage AND 
 twelthper>$percentage AND fst>$percentage AND second>$percentage AND third>$percentage");
		
		$sql1->execute();
	$sql1->rowCount();
			
		    while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
				
				$user_id=$row1['user_id'];
				
  
  $sql = $obj->db->prepare("select * from student where ID='$user_id'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
                        <th><?php echo $row['first_name']; ?></th>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['college']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                       <td>
                       <?php if($row['status']=='1'){ ?>
                       <a href="" class="btn btn-info" disabled>Approved</a>
					   <?php }else{ ?>
                       
                        <a href="" class="btn btn-danger" disabled>Not Approved</a>
                       <?php } ?>
                       </td>
                                                                  
                                                    </tr>      
                                          <?php }}?>       
                                                </tbody>
                                            </table>
                                            
                                            
                                            <?php } ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
       <?php
												
			if(isset($_POST['name'])){		?>
                                                                            
                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                      
                                                         <th data-priority="1">First name</th>
                                                         <th data-priority="2">Last Name</th>
                                                         <th data-priority="3">Email</th>
                                                       
                                                        <th data-priority="5">Branch</th>
                                                        
                                                     <th data-priority="5">College</th>
                                                      <th data-priority="5">city</th>
                                                      <th data-priority="5">Status</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               <?php							
		$name=$_POST['name'];										
 $sql = $obj->db->prepare("select * from student where first_name like '%$name%' OR last_name like '%$name%'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
                        <th><?php echo $row['first_name']; ?></th>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['college']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                       <td>
                       <?php if($row['status']=='1'){ ?>
                       <a href="" class="btn btn-info" disabled>Approved</a>
					   <?php }else{ ?>
                       
                        <a href="" class="btn btn-danger" disabled>Not Approved</a>
                       <?php } ?>
                       </td>
                                                                  
                                                    </tr>      
                                          <?php }?>       
                                                </tbody>
                                            </table>
                                            
                                            
                                            <?php } ?>                                        
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </div>  


                                    </div>
                                </div>
                            </div>
                        </section></div>




<?php    

if(isset($_GET['id']))
{
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$id=$_GET['id'];
$table="user";
if($obj->Update($id,$table)==1)
{
	echo "<script>window.location='User-Authenticate.php?id1=done';</script>";
}

}


?> 

                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                   


                    <h4 class="group-head">Favourites</h4>
                    
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/responsive-tables/js/rwd-table.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 


    </body>

</html>


