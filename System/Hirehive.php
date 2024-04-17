<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HireHive - Job Portal</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/image		s/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="HireHive" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/ico/favicon.png">


	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

	
</head>

  <style>
  
    .autofit2 {
	height:70px;
	width:400px;
    object-fit:cover; 
  }
  
      .autofit3 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
    </style>
    <style>
        body{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    background-color: #f8f8f8;
}

*{
    box-sizing: border-box;
}

a{
    text-decoration: none;
}

#team{
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.heading {
    font-size: 1.3rem;
    color: #2c2c2c;
    font-weight: 500;
    display: flex;
    align-items: center;
    margin: 20px;
}

.heading i{
    background-color: #333;
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 0.9rem;
    margin: 0 20px;
}

.box{
    width: 266px;
    height: 340px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    position: relative;
}
.Team{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;

}


.top-bar{
    width: 50%;
    height: 4px;
    position: absolute;
    left: 50%;
    top:0;
    transform: translate(-50%);
    background-color: #333;
    border-radius: 0 0 10px 10px;
}

.verify{
     color: #333;
}

.nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.nav .heart{
   color: rgba(155,155,155);
}

.nav .heart:before {
    content: '\f004';
    font-family: fontAwesome;
    line-height: 30px;
    z-index: 1;
    cursor: pointer;
}
.nav .heart-btn{
    display: none;
}

.details {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.details img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    object-fit: cover;
    object-position: center;
}

.details p{
    font-size: 0.8rem;
    color: #7a7a7a;
    margin: 5px 0;

}

.btn{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn a{
    height: 45px;
    width: 45px;
    border-radius: 10px;
    font-size: 22px;
    line-height: 45px;
    color: #333;
}

.btn a i {
    padding-left: 13px;
}

.btn a:hover {
    color: #fff;
    background-color: #333;
    transition: all ease 0.3s;
}

.box:hover{
    transform: scale(1.01);
    transition: all ease 0.1s;
}

@media(max-width:612px){
    .box{
        flex-grow: 0.7;
    }
}
        </style>
<body class="home">


	<div id="introLoader" class="introLoading"></div>

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
						<a href="Hirehive.php"><img src="images/logo.png" alt="Logo" /></a>

						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="./">Home</a>
								
							</li>
							
							<li>
								<a href="job-list.php">Job List</a>

							</li>
							
							<li>
								<a href="employers.php">Employers</a>
							</li>
							
							<li>
								<a href="employees.php">Employees</a>
							</li>
							
							<li>
								<a href="contact.php">Contact Us</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
						<?php
						if ($user_online == true) {
						print '
						    <li><a href="logout.php">logout</a></li>
							<li><a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						
						?>

						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Employer</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Employee</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>

			
		</header>

		<div class="main-wrapper">
		
			<div class="hero" style="background-image:url('images/hero-header/01.jpg');">
				<div class="container">
                    <h2 style="color: white ; text-align: center; font-family: 'Times New Roman', serif;"><i>About</i><br></h2>
                     <h1 style="color: white ; text-align: center; font-family: 'Times New Roman', serif;">HireHive</h1>
                    <p>HireHive is a leading web development company.<br> A team of experienced developers, designers, and digital strategists, we strive to transform your ideas into reality.</p>
					</div>
				
			</div>    
      <div class="Team">
          <div class="box">
              <div class="top-bar"></div>

                  <div class="details">
                      <img src="images/default.jpg  " alt="">
                      <strong style=" text-align: center;"><a href="https://newsite.gmit.edu.in/" style="color: black ; text-align: center; font-family: 'Times New Roman', serif;"> Student's of GMIU </a></strong>
                      <p style="color: black ; text-align: center;">info@gmit.edu.in</p>
                  </div>

                  <div class="btn">
                      <a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a>
                      <a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a>
                      <a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a>
                  </div>
              </div>
              
              <div class="box">
              <div class="top-bar"></div>

                  <div class="details">
                      <img src="images/default.jpg  " alt="">
                      <strong style=" text-align: center;"><a href="https://newsite.gmit.edu.in/" style="color: black ; text-align: center; font-family: 'Times New Roman', serif;"> Under guidance Teacher of GMIU </a></strong>
                      <p style="color: black ; text-align: center;">info@gmit.edu.in</p>
                  </div>

                  <div class="btn">
                      <a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a>
                      <a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a>
                      <a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a>
                  </div>
              </div>
			

							

				
			
		</div>
			


			
			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
										<div class="footer-about-us">
											<h5 class="footer-title">About HireHive</h5>
											<p>HireHive is a job portal, online job management system developed by HireHive..</p>
										
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">Home</a></li>
											<li><a href="job-list.php">Job List</a></li>
											<li><a href="employers.php">Employers</a></li>
											<li><a href="employees.php">Employees</a></li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="#">Go to top</a></li>

										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">HireHive Contact</h5>
								
								<p>Address :GMIU,Bhavnagar</p>
								<p>Email : <a href="rudrabhatt151004@gmail.com">rudrabhatt151004@gmail.com</a></p>
								<p>Phone : <a href="tel:+918128814005">+91 8128814005</a></p>
								

							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
					
							<div class="col-sm-4 col-md-4">
							
								<ul class="bottom-footer-menu">
									<li><a href="Hirehive.php">Developed by HireHive</a></li>
								</ul>
							
							</div>
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>


	</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>


<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>


</html>