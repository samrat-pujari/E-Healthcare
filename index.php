
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head><title>Smart medical service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #4C4C6D;
          background-color: #E8F6EF;
    }
    h3, h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;      
        font-size: 20px;
        color: #111;
    }input[type=text] {
      width: 130px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-position: 10px 10px; 
      background-repeat: no-repeat;
  /*    padding: 12px 20px 12px 0px;*/
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
  }

  input[type=text]:focus {
      width: 100%;
  }
    .container {
        padding: 80px 120px;
    }
    .carousel-inner img {
  /*    -webkit-filter: grayscale(60%);
        filter: grayscale(60%); */
        width: 100%; 
        margin: auto;
    }
    .carousel-caption h3 {
        color: #fff !important;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
    }
    .bg-1{
        color: #4C4C6D;
        background: url('pic/healthcare.jpg');
    }
    .bg-1::before {
        background: url('pic/Doctor_Time.jpg');
        filter: blur(1px);
    }
    .bg-1 h2 {
    	font-size:36px;
    	font-weight: bold;
    }
    .bg-1 p {
    	font-weight: bold;
    	font-size:20px;
    }
    .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }
    .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    

    .nav-tabs li a {
        color:#999999;
    }

  .navbar-brand {
      float: left;
      height: 50px;
      padding: 0px 0px 0px 15px;
      font-size: 18px;
      line-height: 20px;
  }
  .navbar-brand h1{
  	padding: 0;
  	margin: 0;
      font-weight: bold;
  }


    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #B8DFD8;
        border: 0;
        font-size: 16px !important;
  	font-weight:900;
        letter-spacing: 2px;
        opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand { 
        color: #4C4C6D !important;
    }
    .navbar-nav li a:hover {
        color: #fff !important;
    }
    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }
    .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
    }
    .dropdown-menu li a {
        color: #000 !important;
    }
    .dropdown-menu li a:hover {
        background-color: red !important;
    }
    footer {
        background-color: #B8DFD8;
        color: #4C4C6D;
        padding: 15px;
    }
    footer a {
        color: #4C4C6D;
    }
    footer a:hover {
    color:#FFFF66;
        text-decoration: none;
    }  
    .form-control {
        border-radius: 0;
    }
    textarea {
        resize: none;
    }    
    footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color:#999999;
    }  
    .container-fluid {
        padding: 5px 20px;
    }
    </style></head>

    <?php
  	   include("connection.php");
  error_reporting(0);
   $queryPermission="WHERE permission='Approved'";
    $show_number_pending_request_query = "SELECT * 
                    FROM doctor $queryPermission ";
  				   $run = mysqli_query($db, $show_number_pending_request_query);
  				   $count=mysqli_num_rows($run);
  	

   

  ?>
  <?php    $queryPermission="WHERE permission='Approved' || permission='Added' ";
         $show_approve_request_query = "SELECT * 
                    FROM doctor WHERE permission='Approved' || permission='Added' ";
  $n_query=mysqli_query($db,$show_approve_request_query );
                                while($drow = mysqli_fetch_array($n_query))
  				                  {}
  								    $count=mysqli_num_rows($n_query);
  								  ?>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid ">
      <div class="navbar-header">
        <a class="navbar-brand text-dark" href="#myPage">
        	<h1>E-Healthcare</h1>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">LogIn <span class="caret"></span></a>
            <ul class="dropdown-menu">
                    <li><a href="Doctor/doctor_login.php">Doctor</a></li>
                    <li><a href="Users/login.php">User</a></li>
              	<li><a href="Admin/adminlogin.php">Admin</a></li>
                    </ul>
            </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#location">Hospital Location  <span class="caret"></span></a>
            <ul class="dropdown-menu"> 
          <li> <a href="location map/Nigadi.html">Nigdi</a></li>
        <li>  <a href='location map/chinchwad.html'>Chinchwad</a></li>
         <li> <a href="location map/shivajinagar.html">Shivaji Nagar</a></li>
         <li> <a href="location map/katraj.html">Katraj</a></li>
        

          </ul>
          </li>
          
          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors
            <span class="caret"></span></a>
            <ul class="dropdown-menu">     
       <li> <a href='medicine.php'>Medicine</a></li>
      <li>  <a href='dentist.php'>Dentist</a></li>
        <li> <a href='bone.php'>Orthopedic</a></li>
        <li> <a href="cardiac_electrophysiologist.php">Cardiac electrophysiologist</a></li>
        <li> <a href='cardiologist.php'>Cardiologist</a></li>
        <li> <a href='surgeon.php'>Surgeon</a></li>
       <li>  <a href='gynecologist.php'>Gynecologist</a></li>
       </ul>
          </li>
          <li><a href="disease_prediction.php">Suggest Doctor</a></li>
          <!-- <li> <a href="blog/blog_front_page.php" >Blog</a></li> -->
            
       
     <li> <a href="#contact" onclick="toggleFunction()">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>

  
  
  <div class="jumbotron bg-1">
    <div class="container">
    	<h2>Virtual healthcare means online patient care!</h2>
    	<p>Our highly specialized experts are deeply experienced in treating rare and complex conditions . You can get appointment from here . For getting appointment at first you need to login at this site . If you are not registered already, Please Register here by clicking on Register Button . You can still get locations about other nearest hospitals from here.</p>
    	<p><a class="btn btn-primary btn-lg" href="Users/registration.php" role="button">Register</a></p>
    </div>
  </div>
    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px"  id="contact">
      <h2 class="w3-wide w3-center text-center text-capitalize">CONTACT US</h2>
      <p class="w3-opacity w3-center"><i>If you want to know anythings from us ? Please Drop a note here !</i></p>
      <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
          <i class="fa fa-map-marker" style="width:30px"></i>Pune, Maharashtra<br>
          <i class="fa fa-phone" style="width:30px"></i> Phone: +910000000000<br>
          <i class="fa fa-envelope" style="width:30px"> </i> Email:  admin@gmail.com<br>
        </div>
        <?php
  	  if(isset($_POST["submit"])){
  $c_name = $_POST['name'];
  $c_gmail = $_POST['gmail'];
  $c_text = $_POST['text'];

     
  	 if(empty($c_gmail))
  	   {
  	   $error_msg="Please Provide Your Gmail/Email";
  	   }
  	 
  	   else
  	   
  	   { $comment_query="INSERT INTO comment(name,gmail,text)     
  	                            VALUES('$c_name','$c_gmail','$c_text')" ;
  								mysqli_query($db,$comment_query);
  							$run= $success_msg="Successfully Submitted";
  				
  					
  				
  							 }
  	
  }
  	 
  ?>
        <!--Contact Us-->
        <div class="w3-col m6" >
      <form action = "index.php" method="POST" >
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="name" placeholder="Name" required name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="email" placeholder="Email/Gmail" required name="gmail">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="text">
                 
             <input type ="submit" class="w3-button w3-black w3-section w3-center" name="submit" value="Send MESSAGE"> 
          <?php
  if(isset($error_msg)){echo $error_msg;}
  if(isset($success_msg)){echo $success_msg;}
  	
  ?>
          </form>
        </div>
      </div>
    </div>
    
  <!-- Footer -->
  <footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Copyright<a href="" data-toggle="tooltip" title="e-Healthcare">@e-Healthcare</a></p> 
  </footer>
  <script>
  $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
    
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  })
  </script>

  </body>
  </html>
