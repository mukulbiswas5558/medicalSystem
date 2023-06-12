<html>
<head>
	<title>Serampore Hospital</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/dist/img/web_logo.png" />
<!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/style1.css">

<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
    border-radius: 0.75rem;
}
</style>

<script>
 

function alphaOnly(event) {
  var key = event.keyCode;
  alert("f name  Try again!");  
  

  
//   return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var contact = document.getElementById("contact");
    var email = document.getElementById("email");
    var password = document.getElementById("password"); 
    var cpassword = document.getElementById("cpassword"); 
   // alert("pass"+password.value+"cp"+cpassword.value);
    var re = /^(?=.*\d)(?=.*[A-Z])(.{8,30})$/;
    const regex_pattern =      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(fname.value.length<1 && lname.value.length<1 && email.value.length<1 && contact.value.length<1 && password.value.length<1){  
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = 'Required';

        
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = 'Required';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = 'Required';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = 'Required';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'Required';
        return false;
       
        
    } else if(fname.value.length>1 && lname.value.length<1 && email.value.length<1 && contact.value.length<1 && password.value.length<1){
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = 'Required';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = 'Required';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = 'Required';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'Required';
        return false;
        
        
    }else if(fname.value.length>1 && lname.value.length>1 && email.value.length<1 && contact.value.length<1 && password.value.length<1){
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = '';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = 'Required';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = 'Required';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'Required';
        return false;
        
        
    }else if(fname.value.length>1 && lname.value.length>1 && email.value.length>1 && !regex_pattern.test(email.value) && contact.value.length<1 && password.value.length<1){
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = '';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = 'not valid';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = 'Required';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'Required';
        return false;
        
        
    }
    else if(fname.value.length>1 && lname.value.length>1 && email.value.length>1 && regex_pattern.test(email.value) && contact.value.length<1 && password.value.length<1){
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = '';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = '';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = 'Required';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'Required';
        return false;
        
        
    }
    else if(fname.value.length>1 && lname.value.length>1 && email.value.length>1 && regex_pattern.test(email.value) && contact.value.length>1 && password.value.length<1){
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = '';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = '';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = '';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'Required';
        return false;
        
        
    }
    else if(fname.value.length>1 && lname.value.length>1 && email.value.length>1 && regex_pattern.test(email.value) && contact.value.length>1 && password.value.length>1 && !re.test(password.value)){
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = '';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = '';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = '';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = 'not valid';
        return false;
        
        
    }
   
   
    else if(password.value != cpassword.value){
        alert("yes");
        document.getElementById('fmessage').style.color = '#f55252';
        document.getElementById('fmessage').innerHTML = '';
        document.getElementById('lmessage').style.color = '#f55252';
        document.getElementById('lmessage').innerHTML = '';

        document.getElementById('emessage').style.color = '#f55252';
        document.getElementById('emessage').innerHTML = '';

         document.getElementById('cmessage').style.color = '#f55252';
        document.getElementById('cmessage').innerHTML = '';

        document.getElementById('pmessage').style.color = '#f55252';
        document.getElementById('pmessage').innerHTML = '';
        document.getElementById('message').style.color = '#f55252';
        document.getElementById('message').innerHTML = 'Not match';
    return false;

    }
    else {
        document.getElementById('message').style.color = '#5dd05d';
       // document.getElementById('message').innerHTML = 'Matched';
        return true; 
    }

    // document.getElementById('fmessage').style.color = '#5dd05d';
    // document.getElementById('fmessage').innerHTML = 'Matched';

    // document.getElementById('pmessage').style.color = '#5dd05d';
    // document.getElementById('pmessage').innerHTML = 'Matched';

    // document.getElementById('lmessage').style.color = '#5dd05d';
    // document.getElementById('lmessage').innerHTML = 'Matched';

    // document.getElementById('cmessage').style.color = '#5dd05d';
    // document.getElementById('cmessage').innerHTML = 'Matched';

    // document.getElementById('emessage').style.color = '#5dd05d';
    // document.getElementById('emessage').innerHTML = 'Matched';
    


}

function checkdoc()
{
    var docusername = document.getElementById("docusername");
    var docpassword = document.getElementById("docpassword");
    if(docusername.value.length<1 && docpassword.value.length<1){  
        document.getElementById('documessage').style.color = '#f55252';
        document.getElementById('documessage').innerHTML = 'Required';

        
        document.getElementById('docpmessage').style.color = '#f55252';
        document.getElementById('docpmessage').innerHTML = 'Required';

    
        return false;
       
        
    } else if(docusername.value.length<1){
        document.getElementById('docpmessage').style.color = '#f55252';
        document.getElementById('docpmessage').innerHTML = '';
        document.getElementById('documessage').style.color = '#f55252';
        document.getElementById('documessage').innerHTML = 'Required';

       
        return false;
        
        
    }
    else if(docpassword.value.length<1){

        document.getElementById('documessage').style.color = '#f55252';
        document.getElementById('documessage').innerHTML = '';
        document.getElementById('docpmessage').style.color = '#f55252';
        document.getElementById('docpmessage').innerHTML = 'Required';

       
        return false;


    }
   
    else {
        
        return true; 
    }

    // document.getElementById('fmessage').style.color = '#5dd05d';
    // document.getElementById('fmessage').innerHTML = 'Matched';

    // document.getElementById('pmessage').style.color = '#5dd05d';
    // document.getElementById('pmessage').innerHTML = 'Matched';

    // document.getElementById('lmessage').style.color = '#5dd05d';
    // document.getElementById('lmessage').innerHTML = 'Matched';

    // document.getElementById('cmessage').style.color = '#5dd05d';
    // document.getElementById('cmessage').innerHTML = 'Matched';

    // document.getElementById('emessage').style.color = '#5dd05d';
    // document.getElementById('emessage').innerHTML = 'Matched';
    


}
function checkad()
{
    var adusername = document.getElementById("adusername");
    var adpassword = document.getElementById("adpassword");
    if(adusername.value.length<1 && adpassword.value.length<1){  
        document.getElementById('adumessage').style.color = '#f55252';
        document.getElementById('adumessage').innerHTML = 'Required';

        
        document.getElementById('adpmessage').style.color = '#f55252';
        document.getElementById('adpmessage').innerHTML = 'Required';

    
        return false;
       
        
    } else if(adusername.value.length<1){
        document.getElementById('adpmessage').style.color = '#f55252';
        document.getElementById('adpmessage').innerHTML = '';
        document.getElementById('adumessage').style.color = '#f55252';
        document.getElementById('adumessage').innerHTML = 'Required';

       
        return false;
        
        
    }
    else if(adpassword.value.length<1){

        document.getElementById('adumessage').style.color = '#f55252';
        document.getElementById('adumessage').innerHTML = '';
        document.getElementById('adpmessage').style.color = '#f55252';
        document.getElementById('adpmessage').innerHTML = 'Required';

       
        return false;


    }
   
    else {
        
        return true; 
    }

   
    


}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
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

	

<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                        <img src="<?php echo base_url();?>assets/dist/img/web_logo.png" alt=""/>
                        <h3>Welcome</h3>
                       
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <form method="post" action="<?php echo base_url(); ?>Registration">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" id="fname" name="fname"  /><span id='fmessage'></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email"  name="email"  /><span id='emessage'></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" /><span id='pmessage'></span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="<?php echo base_url(); ?>PatientLogin">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" id="lname" /><span id='lmessage'></span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel"  id="contact" name="contact" class="form-control" placeholder="Your Phone *"  /><span id='cmessage'></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword" /><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>
                                   
                                 
                                    <?php if ($this->session->flashdata('success')) { ?>

                                        <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <strong><?php echo $this->session->flashdata('success'); ?></strong>
                                        </div>

                                        <?php } ?>

                                        <?php if ($this->session->flashdata('error')) { ?>

                                        <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <strong><?php echo $this->session->flashdata('error'); ?></strong>
                                        </div>

                                    <?php } ?>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="<?php echo base_url(); ?>verifylogin">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" id="docusername" name="username"/><span id='documessage'></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="docpassword" name="password" /><span id='docpmessage'></span>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" onclick="return checkdoc();" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="<?php echo base_url(); ?>verifylogin">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" id="adusername" name="username" /><span id='adumessage'></span>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="adpassword" name="password"/><span id='adpmessage'></span>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" onclick="return checkad();" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  