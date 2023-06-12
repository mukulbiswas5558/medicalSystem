<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/dist/img/web_logo.png" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/contact.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script >
    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

<style >
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
  .contact-form {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    border-top-right-radius: 10% 50%;
    border-bottom-right-radius: 10% 50%;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>Login" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Serampore HOSPITALS</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>Login" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>

          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>AboutUs" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>Contact" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>








    <div class="container contact-form" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="contact.php">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" onkeydown="return alphaOnly(event);" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" minlength="10" maxlength="10" required />
                        </div>
                        <div class="form-group" >
                            <input type="submit" name="btnSubmit" class="btnContact"   value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

</body>
</html>


