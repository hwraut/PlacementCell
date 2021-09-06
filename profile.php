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
			<h2>Update your Profile</h2>
        <!--    
          <a href="profile.php" class="btn btn-primary dropdown-toggle" style="float:right;">My Profile</a> 
        -->   
            <hr>
            
                 <!-- FORM START FROM HERE FOR INSERTING --->  
       <form action="" method="post" enctype="multipart/form-data"> 
          <div class="col-md-12 col-sm-12 col-xs-12">

  

  <div class="form-group">
      <label class="form-label" for="field-2">Your 10th Passout</label>
    
      <div class="controls">
      <input type="text"  name="s_name" style="width:25%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="School Name">
      
      
  <select placeholder="Passout Year" style="width:25%;float:left;border:1px solid black;" class="form-control" id="field-2" name="year">
  <option value="" selected="selected">Select Passout Year</option>

  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2015">2016</option>
  <option value="2015">2017</option>
  <option value="2015">2019</option>
  <option value="2015">2020</option>
  <option value="2015">2021</option>
  <option value="2015">2022</option>
  <option value="2015">2023</option>
  <option value="2015">2024</option>
  <option value="2015">2025</option>
  </select>
  &nbsp;&nbsp;&nbsp;&nbsp;
  
  <input type="number" max="99"  name="s_name10thper" style="width:40%; float:left; margin-right:3%;"  class="form-control" id="field-2" placeholder="10th Percentage">
  
  
  
      </div>
  </div>
  
  <br>
  <br><br>
  
   <label class="form-label" for="field-2">Your High-School</label>
    
      <div class="controls">
      <input type="text"  name="h_name" style="width:25%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="School Name">
  <select placeholder="Passout Year" style="width:25%;float:left;border:1px solid black;" class="form-control" id="field-2" name="hyear">
  <option value="" selected="selected">Select Passout Year</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2015">2016</option>
  <option value="2015">2017</option>
  <option value="2015">2019</option>
  <option value="2015">2020</option>
  <option value="2015">2021</option>
  <option value="2015">2022</option>
  <option value="2015">2023</option>
  <option value="2015">2024</option>
  <option value="2015">2025</option>
  </select>
      
      
      <input type="number" max="99"  name="s_name12thper" style="width:40%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="12th Percentage"></div>
  <br><Br><br>
  
  
  
  
  
  <!--
  <div class="form-group">
      <label class="form-label" for="field-2">Currently Working as</label>
    
      <div class="controls">
          <input type="text" required name="working_as" placeholder="Currently Working as"  class="form-control" id="field-2" >
      </div>
  </div>-->
  
  
  
  
  
  
  
  <br><br>

  <div class="form-group">
    
    
      <div class="controls">
       <select style="width:90%;float:left;border:1px solid black;" class="form-control" id="field-2" name="branch">
  <option value="" selected="selected">Branch</option>
  <option value="Computer Science">Computer Science</option>

  <option value="Information Technology">Information Technology</option>
  <option value="Electronics">Electronics</option>
    <option value="Mechanical">Mechanical</option>
      <option value="Civil">Civil</option>
  </select>
      
  
  
      </div>

  
  <br>
  <br><br>
  
  
  
  
  
  <br><br>

  <div class="form-group">
    
    
      <div class="controls">
      <input type="text"  name="First" style="width:20%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="Engineering First Year CGPA" max="99">
      
      
   <input type="text"  name="Second" style="width:20%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="Engineering Second Year CGPA"  max="99">
   
    <input type="text"  name="Third" style="width:20%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="Engineering Third Year CGPA"  max="99">
    
    
   
  
  
      </div>

  
  <br>
  <br><br>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2">Lives in</label>
    
      <div class="controls">
          <input type="text" name="live"   class="form-control" id="field-2" >
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" for="field-2">Home Town</label>
    
      <div class="controls">
          <input type="text"  name="home_town"  class="form-control" id="field-2" >
      </div>
               
      
      <div class="form-group">
      <label class="form-label" for="field-2">Hobby</label>
    
      <div class="controls">
          <input type="text"  name="hobby"  class="form-control" id="field-2" >
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" for="field-2">Profile Photo</label>
    
      <div class="controls">
          <input type="file"  name="file" required class="form-control" id="field-2" >
      </div>
  </div>
     
  <div class="form-group">
      <label class="form-label" for="field-2">Upload CV</label>
    
      <div class="controls">
          <input type="file"  name="file1" required class="form-control" id="field-2" >
      </div>
  </div>
     
 
  

   
  
   <div class="form-group">
                     <label class="form-label" for="field-1"></label>
                     <div class="controls">
                         <input type="submit" class="btn btn-primary" value="Update Profile" id="txtPhone">
                     </div>
                 </div>

                  
          </div>
                  
           </form>
           <!-- FORM END FROM HERE FOR INSERTING --->  
		</div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html><?php
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function
if(isset($_POST['s_name']))
{
$school = $_POST['s_name'];
$passout = $_POST['year'];
$highschool = $_POST['h_name'];
$highschool_passout = $_POST['hyear'];
$currently_working = "";
$lives_in = $_POST['live'];
$from = $_POST['home_town'];
$hobby = $_POST['hobby'];


$pic =$_FILES['file']['name'];
$tmp_file=$_FILES['file']['tmp_name'];
$location="images/";
move_uploaded_file($tmp_file,$location.$pic);

$pic1 =$_FILES['file1']['name'];
$tmp_file1=$_FILES['file1']['tmp_name'];
$location1="images/";
move_uploaded_file($tmp_file1,$location1.$pic1);


$email=$_SESSION['id'];


$branch = $_POST['branch'];
$s_name10thper = $_POST['s_name10thper'];
$s_name12thper = $_POST['s_name12thper'];
$First = $_POST['First'];

$Second = $_POST['Second'];
$Third = $_POST['Third'];
$Final ="-";

if($obj->insert_profile($email,$school,$passout,$highschool,$highschool_passout,$currently_working,$lives_in,$from,$hobby,$pic,$pic1,$branch,$s_name10thper,$s_name12thper,$First,$Second,$Third,$Final)==1)
{	
echo "<script type='text/javascript'>
alert('Profile Updated!!');
</script>";echo "<script>window.location='myprofile.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>
