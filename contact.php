<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//handling form submission//
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');


//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp-mail.outlook.com';                // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'andreas_vasdekis@windowslive.com';  // SMTP username
    $mail->Password = '******';                            // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
        
                
            
        
                
                $mail = new PHPMailer(true);             // Passing `true` enables exceptions
                $mail->setFrom('andreas_vasdekis@windowslive.com', 'Andreas Vasdekis');
                $mail->addAddress('andreas_vasdekis@windowslive.com', 'Andreas Vasdekis'); // php variable ? //
                $mail->isHTML(TRUE);
                $mail->Subject ='Email subject';
                $mail->Body = 'This is the body in plain text for non-HTML mail clients';
                
                $mail->send(); 
                    echo "email sent";
                    }  catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    }
                
        


        ?>       


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Andreas Vasdekis | Web development &amp design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Develompent &amp Design">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript, Responsive Web Design, Porfolio Site">
  <meta name="Andreas Vasdekis">


    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">


    
    <!-- Include fa awseome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom css -->
    <link href="custom.css" rel="stylesheet">

   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- JavaScript Form Validator -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    
    </head>
    <body background="Images/contact.jpg">

        
         <!-- Bootstrap class / δημιουργία του γκρι πλασίου στο header(και γενικά τρόπος δημιουργίας header-menu)-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <!-- Δημιουργία του icon όταν μικραίνει η οθόνη-3 span classes γιατί θέλω τις τρεις γραμμούλες -->
     
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">          
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
        </button>

        
    </div>
      <!-- Δημιουργία του menu -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="home.html"><i class="fa fa-home color-home"></i></a></li>
          
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        
      
        <!-- Social Buttons -->
        <li><a href="https://github.com/AndreasVasd" target="_blank" id="tooltip1" data-toggle="tooltip" title="Github"><i class="fa fa-github color-github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/andreas-vasdekis" target="_blank" id="tooltip2" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin color-linkedin"></i></a></li>
        <li><a href="https://www.twitter.com" target="_blank" id="tooltip3" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter color-twitter"></i></a></li>
        </ul>
        
        
        <!-- Το custom search bar που τοποθετήσαμε -->

      <ul class="nav navbar-nav navbar-right">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        
      </ul>
      </div>
        
        </div>
        </nav>
        
        <!-- Get In Touch -->
        <div class="container">
            <div id="contact">
                <h3><i class="fa fa-users fa-fw-2"></i>Get In Touch</h3>
                <p>Do you have any questions? Please do not hesitate to contact me directly. I will come back to you within matter of hours to help you.</p>
            </div>
        </div>
        
        
       <!-- Form -->
        
        
        <div class="my_form">
        <div class="container">

            <div class="row">

                 <div class="col-sm-8 col-sm-offset-2">  <!-- μετατοπίζω δεξιά κατά offset --> 
                    
                    <form id="contact-form" method="post" action="contact.php" role="form"> <!-- We will send the contact form values via POST to the PHP script called contact.php -->

    <div class="messages"></div> <!-- display the success or error message after sending the form via AJAX -->

    <div class="controls">

        <!-- Standard Bootstrap forms markup is used - rows, columns, form groups. Form groups are Bootstrap helpers that take care of the appropriate vertical spacing in the form. -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <!-- Standard Bootstrap forms markup is used - rows, columns, form groups. Form groups are Bootstrap helpers that take care of the appropriate vertical spacing in the form. -->
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div> <!-- custom error messages -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <!-- Send button -->
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-muted"><strong>*</strong> These fields are required. 
            </div>
        </div>
    </div>
                        

</form>
            </div>
        </div>
            </div>
        </div>
        
        
        <!-- Footer -->
        
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 myCols">
                    <h5>Get started</h5>
                    <hr class="grammi" style="width: 60px;"> <!-- η hr γραμμή -->   <ul>
                    
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Useful Info</h5>
                    <hr class="grammi" style="width: 60px;">
                    <ul class="fa-ul">
                       
                       <li><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Website: <a href="home.html">www.andreas.com</a></li>
                        <li><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;Email: andreas_vasdekis@windowslive.com</li>
                        <li><i class="fa fa-phone-square fa-fw" aria-hidden="true"></i>&nbsp;Phone: +30 6980794725</li>
                    </ul>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Friendly Sites</h5>
                    <hr class="grammi" style="width: 60px;">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
               
            </div>
        </div>
        <div class="social-networks">
            <a href="https://github.com/AndreasVasd" class="github" target="_blank" id="tooltip1" data-toggle="tooltip" title="Github"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/andreas-vasdekis" class="linkedin" target="_blank" id="tooltip2" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.twitter.com" class="twitter" target="_blank" id="tooltip3" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text </p>
        </div>
    </footer>
           
    
    </body>
</html>