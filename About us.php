<?php
    session_start();
    
    if(isset($_POST['submit'])) {
        require 'PHPMailer/PHPMailerAutoload.php';
        
        function sendmail($to, $from, $fromName, $message) {
            $mail = new PHPMailer();
            $mail->setFrom($from, $fromName);
            $mail->addAddress($to);
            $mail->Subject = 'CodingStart.in - Contact Form';
            $mail->Body = $message;
            $mail->isHTML(false);

            return $mail->send();
        }

        $to = 'code1shop@gmail.com';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $body = $_POST['message'];
        
        if(sendmail($to, $email, $name, $body)) { ?>
            <script type="text/javascript">
                alert('Thank you for the Feedback Message. We will contact you shortly.');
            </script>
        <?php
        } else { ?>
            <script type="text/javascript">
                alert('Message not sent. Please, try again');
            </script>
        <?php
        }  
    }//main if end
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingStart | About Us</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="description" content="" />
    <!--for searching and indexing-->
    <meta name="robots" content="index,follow" />
    <!--Links for css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/download.css">
    <link rel="stylesheet" type="text/css" href="css/MediaQuery.css">
    <link rel="stylesheet" href="css/jquery.materialripple.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
</head>
<body>
    <?php include_once 'header.php'; ?>
    <!--Start container-->
    <div class="container" id="main-container">
        <img src="images/contactus.jpg"/ width="100%" id="banner-img"><br>      
    </div><!--End Main container-->

    <!--start main conent container-->
    <div class="container content-container">
        <div class="page-header">
            <h2 class="text-center text-primary">About Me</h2>
        </div>
        <p>Hi, i am Anil Kumar –SR. web designer & developer from Bharatpur, Rajasthan, India. I design, develop and deliver stylish, clean and creative freelance website. I can work closely with you as a freelancer web designer to “Take your business online, “Get your message across”, and “Make your website work for you”. <br/>I’m a total stickler for web standards, clean/efficient code, and modern design at <a class=" text-link" href="https://www.codingstart.in">CodingStart.</a></p>
        <br>
        <div class="page-header">
            <h2 class="text-center text-primary">Our Team (Me)</h2>
        </div>
        <div class="row profile-box">
            <div class="col-md-12 col-sm-12 plugin-box">
                <center><img class="img-circle" src="images/anil.jpg" width="150px">
                <h2>Anil Kumar</h2>
                <footer>Web Designer & Developer</footer>
                <p style="line-height: 25px;">
                Websites: <a href="http://www.codingstart.in">CodingStart</a>,
                                 <a href="http://www.amazingweb.ga">Amazing Web</a>,
                                 <a href="http://www.educab.in">Educates</a><br>

                Email: <a href="mailto:http://Anilk1sagar@gmail.com">Anilk1sagar@gmail.com</a><br>
                <a href="mailto:http://code1shop@gmail.com">code1shop@gmail.com</a><br> 
                Facebook: <a href="http://www.facebook.com/Anilk1sagar">Anilk1sagar</a><br>
                Mobile: +91-7728055098
                </p></center>
            </div>
        </div><!--End row-->


        <!--contact us-->
        <div class="page-header">
            <h2 class="container_heading text-center text-primary">Contact Us. <small>Contact us for more</small></h2>
        </div><!--End page-header-->
        <div class="row">
            <div class="col-lg-5 col-sm-4">
                <p>Send us a message</p>
                <address>
                    <strong>Contact Me</strong></br>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> <small>Jaipur, Rajasthan</small><br>
                    <i class="fa fa-mobile" aria-hidden="true"></i> <small>+91 7728055098</small><br>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> <small>Anilk1sagar@gmail.com</small><br>
                </address>
            </div>
            <div class="col-lg-7">
                <div class="contact_container">
                    <form class="form-horizontal" role="form" method="POST" action="About us.php">
                        <div class="field">
                            <input type="text" name="name" class="input_field" required>
                            <span class="bar"></span>
                            <span class="label">Name</span>
                        </div><br><!-- End Form-group-->
                        <div class="field">
                            <input type="email" name="email" class="input_field" required>
                            <span class="bar"></span>
                            <span class="label">Email</span>
                        </div><br><!-- End Form-group-->

                        <div class="field">
                            <textarea name="message" class="textarea_field" required></textarea>
                            <span class="bar"></span>
                            <span class="label">Message</span>
                        </div><!-- End Form-group-->
                        <input type="submit" name="submit" value="Send" class="submit_btn">
                    </form>
                </div><!--End Code box-->
            </div>
        </div><!--End row-->

        <div class="page-header">
            <h2 class="container_heading text-center text-primary">Privacy Policy.</h2>
        </div><!--End page-header-->
        <div class="row">
            <div class="col-md-12 privecy_box">
                <p>This Privacy Policy governs the manner in which CodingStart collects, uses, maintains and discloses information collected from users (each, a "User") of the http://www.codingstart.in website ("Site").</p>

                <h3>Personal identification information</h3>
                <p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, and in connection with other activities, services, features or resources we make available on our Site.Users may be asked for, as appropriate, email address. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>

                <h3>Non-personal identification information</h3>
                <p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>

                <h3>Web browser cookies</h3>
                <p>Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p>

                <h3>How we use collected information</h3>
                <p>Codeshop may collect and use Users personal information for the following purposes:</p>
                <ul>
                  <li>
                    <i>To run and operate our Site</i><br/>
                    We may need your information display content on the Site correctly.
                  </li>
                  <li>
                    <i>To improve customer service</i><br/>
                    Information you provide helps us respond to your customer service requests and support needs more efficiently.
                  </li>
                  <li>
                    <i>To send periodic emails</i><br/>

                  </li>
                </ul>

                <h3>How we protect your information</h3>
                <p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>

                <h3>Sharing your personal information</h3>
                <p>We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above. </p>

                <h3>Electronic newsletters</h3>
                <p>If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc.</p>

                <h3>Third party websites</h3>
                <p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licencors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.</p>

                <h3>Compliance with children's online privacy protection act</h3>
                <p>Protecting the privacy of the very young is especially important. For that reason, we never collect or maintain information at our Site from those we actually know are under 13, and no part of our website is structured to attract anyone under 13.</p>

                <h3>Changes to this privacy policy</h3>
                <p>Codeshop has the discretion to update this privacy policy at any time. When we do, we will post a notification on the main page of our Site. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p>

                <h3>Your acceptance of these terms</h3>
                <p>By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes. This policy was generated using <a href="http://privacypolicies.com" target="_blank">PrivacyPolicies.Com</a></p>

                <h3>Contacting us</h3>
                <p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us.</p>

                <p>This document was last updated on November 01, 2015</p>
            </div><!--End col-->
        </div><!--End row-->
        <hr>

    </div><!-- End Content container -->

    <?php include_once 'footer.php'; ?>
</body>
</html>