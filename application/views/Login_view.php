<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Sign in - GNotes</title>
  <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url('assets/login.css') ?>">
  <link rel="stylesheet" href="<?=base_url('assets/Footer.css') ?>">
  <script type="text/javascript"src="<?=base_url('assets/tubes.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="text-center" data-gr-c-s-loaded="true">
<div class="user" style="">
  <p class="notif"> <?php echo $this->session->flashdata('notifikasi'); ?> </p> 
  <div class= "container" style="">
    <form class="form-signin" style="" novalidate action="<?= base_url();?>Auth_controller/proses_login" method="post">
      <img id="logo" src="<?=base_url('assets/logo.png')?>" width="118.91" height="28.08">
      <!-- <div class="input-wrapper" autocomplete="true"> -->
        <input type="text" id="inputEmail" class="form-control" name="Email" placeholder="Your email" spellcheck="false" required>
        <div class="invalid-feedback" >
          Email address can't be empty
        </div>
        <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Password" required>
        <div class="invalid-feedback" >
          Password can't be empty
        </div>
        <div class="action">  
        <a class="forget" href="">Forget password</a>
      </div>
      <button class="btn btn-lg btn-block" type="submit"   style="color:white;">Sign in</button>
      
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('form-signin');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
      

    </form>


    <ul class="download" style="">
        <li><a class="dwnld" href="" ><img src="<?= base_url('assets/andoroid.png')?>" width="5.5%" height="5%"> Android</a></li>
        <li> <a class="dwnld" href="" ><img src="<?= base_url('assets/apple.png')?>"  width="4.5%" height="4%"> iPhone</a></li>
        <li><a class="dwnld" href="" ><img src="<?= base_url('assets/chrome.png')?>"  width="3%" height="3%"> Chrome</a></li>
    </ul>
  </div>


     <div>
      <a class="signup" style="position: relative; top:-140px;" href="<?=base_url(); ?>Auth_controller/register">Sign up</a>
    </div>
  
</div>
<?php $this->load->view('footer_view')?>
<!-- </body>
</html> -->