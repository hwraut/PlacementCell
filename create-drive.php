<?php
include "Includes/session.php";

?><!DOCTYPE html>
<html class=" ">
<head>
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->


   <!-- CORE CSS TEMPLATE - END -->
<link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/timepicker/css/timepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datetimepicker/css/datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/ios-switch/css/switch.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/typeahead/css/typeahead.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet" type="text/css" media="screen"/>   

        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
     <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> <script src="typeahead.min.js"></script>
    <script>
	<?php $state=$_GET['state'];
	$dept=$_GET['dept']; ?>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY&state=<?php echo $state; ?>&dept=<?php echo $dept; ?>',
        limit : 10
    });
});
    </script> <style type="text/css">
.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 50px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 18px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 17px 9px;
	width:500px;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 37px;
	padding: 8px 0;
	width: 950px;

}
.tt-suggestion {
	font-size: 16px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
</style><script language="javascript">
    $(document).ready(function () {
        $("#txtdate").datepicker({
            minDate: 0
        });
    });
</script>
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

	
            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Create Drive</h1>                           
                                 </div>


                        </div>
                        
                    </div>
					<a href="Forum.php" style="float:right;" class="btn btn-primary">Back</a>
					
					
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                   
                           
      <div class=".col-md-6">
        
  </div>
  <div class=".col-md-6">
    <div class="panel panel-default">
    <div class="bs-example">

    <form action="" method="POST">
    
    <span style="color:black;">Company Details:</span>
<br>
 <select  name="Company" required id="MainContent_lbSalutation" tabindex="1" style="width:100%;" class="form-control" tabindex="1">
<option value="">Select Company</option>

<?php  
  include 'Application/DB_Functions.php';
  $obj= new Connections();
 
  $sql = $obj->db->prepare("select * from company");
  $sql->execute();
    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    
  ?> 


  <option value="<?php echo $row['ID']; ?>">
  <?php echo $row['company_name']; ?></option>

  <?php } ?>
</select><br>
<span style="color:black;">Date of Drive</span>
<br>
<input type="text" name="Drivedate"  id="txtdate" class="form-control datepicker" data-format="D, dd MM yyyy" required autocomplete="off" tabindex="7">

<br>
<span style="color:black;">Location where Drive Conduct:</span>
<textarea  name="loc" class="form-control"></textarea>
<br>

<span style="color:black;">Company Criteria</span>
<select class="form-control" name="criteria">
<option value="">Select Criteria</option>
<option value="55">Above 55% Criteria Throughout</option>
<option value="60">Above 60% Criteria Throughout</option>
<option value="65">Above 65% Criteria Throughout</option>
<option value="70">Above 70% Criteria Throughout</option>
<option value="75">Above 75% Criteria Throughout</option>
<option value="80">Above 80% Criteria Throughout</option>
<option value="85">Above 85% Criteria Throughout</option>
<option value="0">No Criteria</option>


</select>
<br>



<br>
<span style="color:black;">Describe</span>
<textarea  name="desc" class="form-control"></textarea>
<br><br>

<input type="submit" name="submit" class="btn btn-primary btn-block" ></td></tr>

</form>
                    
               
    </div>
  </div>
  </div>
  </div>
  
  

                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

               


            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
       
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 








<?php

$obj= new Connections(); 
if(isset($_POST['Company'])){

 $company_name = $_POST['Company'];  
  $Drivedate = $_POST['Drivedate'];  
   $loc = $_POST['loc'];  
  $criteria = $_POST['criteria'];   $desc = $_POST['desc'];  
	$obj= new Connections(); 
	  $sql = $obj->db->prepare("select * from company where ID='$company_name'");
  $sql->execute();
    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    $coampaines_name=$row['company_name'];
	}
	$sql =$obj->db->prepare("INSERT INTO `drive` (`company_name`, `companies_names`,`dateofdrive`, `location`, `company_crieria`, `describe`) VALUES (:company_name,:coampaines_name,:Drivedate, :loc,:criteria, :desc)");

$sql->bindParam(':company_name', $company_name);
$sql->bindParam(':coampaines_name', $coampaines_name);
$sql->bindParam(':Drivedate', $Drivedate);
$sql->bindParam(':loc', $loc);
$sql->bindParam(':desc', $desc);
$sql->bindParam(':criteria', $criteria);
$sql->execute();

/*

if($obj->create_company($company_name,$details,$loc,$Website,$Contact,$Email,$Technology)==1)
{	*/

echo "<script type='text/javascript'>
alert('Drive Created!!');
</script>";
/*
}

else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}*/
}
?>		





        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
   

</html>




  <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/moment.min.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/daterangepicker.js" type="text/javascript"></script> <script src="assets/plugins/timepicker/js/timepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/datetimepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" type="text/javascript"></script> <script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script> <script src="assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script> <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/typeahead.bundle.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/handlebars.min.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.multi-select.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.quicksearch.js" type="text/javascript"></script> <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

