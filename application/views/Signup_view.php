<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<title>Sign up - GNotes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url('assets/Signup.css') ?>">
  <link rel="stylesheet" href="<?=base_url('assets/Footer.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="text-center" data-gr-c-s-loaded="true">
<div class="user" style="">
  <div class= "container" style="">
    <form class="form-signup" style="">
      <img id="logo" src="<?=base_url('assets/logo.png')?>" width="118.91" height="28.08">
      <div class="input-wrapper">
        <input type="text" id="inputEmail" class="form-control" placeholder="Your email" spellcheck="false">
      </div>
      <div class="input-wrapper">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      </div>
      <div class="input-wrapper">
        <input type="password" id="CPassword" class="form-control" placeholder="Confirm Password" required="">
      </div>
      <button class="btn btn-lg btn-block" type="submit" onclick="validateForm()" style="color:white;">Sign in</button>
      <a class="signup" href="<?= base_url();?>" style>Back to sign in</a>
      <br>
    </form>
    <ul class="download" style="">
        <li><a class="dwnld" href="" ><img src="<?= base_url('assets/andoroid.png')?>" width="5.5%" height="4.8%"> Android</a></li>
        <li> <a class="dwnld" href="" ><img src="<?= base_url('assets/apple.png')?>"  width="4.5%" height="4%"> iPhone</a></li>
        <li><a class="dwnld" href="" ><img src="<?= base_url('assets/chrome.png')?>"  width="5%" height="3.5%"> Chrome</a></li>
    </ul>
  </div>
  
</div>
<?php $this->load->view('footer_view')?>
<!-- </body>
</html> -->