<?php include('serveradmin.php') ?>
<?php include 'connectpolice.php';?>
<!DOCTYPE html>
<html>
<head>
<title>RTO ANDHRA PRADESH</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="RTO WEB TEMPLATE" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css2?family=Anek+Latin&family=Source+Sans+Pro&display=swap' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css2?family=Anek+Latin:wght@300;400&family=Source+Sans+Pro&display=swap' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
	<!--header-->
		<div class="header" >
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span> 
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<h1 style="color:white;">RTO Andhra Pradesh</h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
                                    
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<style>
			.header{
				background-color: #2832c2 ;
			}
		</style>
	<!--header-->
	<!-- banner -->
	
<!--banner-->
	<!--content-->
		
			<!--banner-bottom-->
			<!--welcome-->
			<div class="header1">
            <h2>Add Learner License!</h2>
        <br>
            
        </div>
          
        <form  method="post" action="addll.php">
             
             <p>
               <label for="name">Name:</label>
               <input type="text" name="name" id="name">
            </p>
 
             
            <p>
               <label for="guardian">Guardian:</label>
               <input type="text" name="guardian" id="guardian">
            </p>
			<p>
               <label for="guardian_phone_no">Guardian Phone Number</label>
               <input type="text" name="guardian_phone_no" id="guardian_phone_no">
            </p>
			<p>
               <label for="aadhar">Aadhar</label>
               <input type="text" name="aadhar" id="aadhar">
            </p>
            <p>
               <label for="phone_no">Phone Number</label>
               <input type="text" name="phone_no" id="phone_no">
            </p>

			
             
            <p>
               <label for="gender">Gender:</label>
               <input type="text" name="gender" id="gender">
            </p>
 
             
            <p>
               <label for="door_no">door_no:</label>
               <input type="text" name="door_no" id="door_no">
            </p>
			<p>
               <label for="city">city:</label>
               <input type="text" name="city" id="city">
            </p>
			<p>
               <label for="district">district:</label>
               <input type="text" name="district" id="district">
            </p>
			<p>
               <label for="pincode">pincode:</label>
               <input type="text" name="pincode" id="pincode">
            </p>
			<p>
               <label for="dob">dob:</label>
               <input type="date" name="dob" id="dob">
            </p>
			<p>
               <label for="type">type:</label>
               <input type="text" name="type" id="type">
            </p>
            <p>
                <label>Confirm with password</label>
                <input type="password" name="password">
		    </p>
            <input type="submit" name="Submit" value="Submit">
			
         </form>
      </center>
					
					
				
             
     
     
     
        </form>

        <table class="table">
        <thead>
        <tr>
        <th>name</th>
         <th>guardian</th>
        <th>guardian_phone_no</th>
            <th>aadhar</th>
            <th>phone_no</th>
            <th>gender</th>
            <th>door_no</th>
            <th>city</th>
            <th>district</th>
            <th>pincode</th>
            <th>dob</th>
            <th>type</th>
            <th>password</th>
            <th>statuss</th>
            <th>ll_no</th>
        </tr>
        </thead>
        <tbody>
         <?php
          $sql="select * from ll";
          $result=mysqli_query($con,$sql);
          if($result)
          {
           while($row=mysqli_fetch_assoc($result))
           {
            $name=$row['name'];
            $guardian=$row['guardian'];
            $guardian_phone_no=$row['guardian_phone_no'];
            $aadhar=$row['aadhar'];
            $phone_no=$row['phone_no'];
            $gender=$row['gender'];
            $door_no=$row['door_no'];
            $city=$row['city'];
            $district=$row['district'];
            $pincode=$row['pincode'];
            $dob=$row['dob'];
            $type=$row['type'];
            $passw=$row['password1'];
            $statuss=$row['statuss'];
            $ll_no=$row['ll_no'];
            

            echo'
            <tr>
            <th>'.$name.'</th>
            <th>'.$guardian.'</th>
            <th>'.$guardian_phone_no.'</th>
            <th>'.$aadhar.'</th>
            <th>'.$phone_no.'</th>
            <th>'.$gender.'</th>
            <th>'.$door_no.'</th>
            <th>'.$city.'</th>
            <th>'.$district.'</th>
            <th>'.$pincode.'</th>
            <th>'.$dob.'</th>
            <th>'.$type.'</th>
            <th>'.$passw.'</th>
            <th>'.$statuss.'</th>
            <th>'.$ll_no.'</th>
            <td>
            <botton class="btn btn-primary"><a href="updatel.php?updateid='.$aadhar.'" class="text-light">update</a></botton>  
			<botton class="btn btn-primary"><a href="deletel.php?deleteid='.$aadhar.'" class="text-light"> delete</a></botton>
            </td>

            </tr>
            ';
            
           }

          }

         ?>
        

        </tbody>


        </table>

            
			<!--welcome-->
			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="tittle"> </h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<h4 style="color:blue ;">Declaration by Transport Department, Government of Andhra Pradesh.</h4>
								<p>The Transport Department, Government of Andhra Pradesh hereby declares that the demographic details obtained from the Citizen Applicant through Aadhaar eKYC will be used Only for facilitating the business service sought by the Citizen Applicant from Transport department and they will not be shared.</p>
								<p>The Transport Department hereby declares that the contact information viz; mobile number and email obtained from the Citizen Applicant Will be used Only for the purposes of sending alerts and notifications related to the status of the business service sought by the Citizen Applicant and notifications for violating the business service rules and conditions.</p>
								

						</div>
						<div class="col-md-6 student-grid">
							<img src="images/kmap.png" class="img-responsive" alt="Image-2">
						</div>
						<!--<div class="clearfix"></div>-->
					</div>
				</div>
			</div>
			
			<!--student-->
			<!--testimonials-->

			<!--testimonials-->
			<!--news-->

			
		</div> 
		<!--content-->
		<!--footer-->
			<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-8 footer-grid">
							<h4>About Us</h4>
							<p>  Organisation of the Indian government responsible for maintaining a database of drivers and a database of vehicles for Andhra Pradesh.<span>
							    It issues driving licences, organises collection of vehicle excise duty and sells personalised registrations.
                  It also is responsible to inspect vehicle's insurance and clear the pollution test.</span></p>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Information</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Tadepalligudem</li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>1234567890</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:andhrapradesh@rto.com"> andhrapradesh@rto.com</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 10:00 hr to 17:00 hr</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
		<!--footer-->
		<!---copy--->
		<!--	<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
				</div>
			</div> -->
			<!---copy--->
			


</body>
</html>
