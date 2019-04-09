<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
  <title>Sign in - GNotes</title>
  <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/login.css') ?>?ts=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Footer.css') ?>?ts=<?=time()?>">
  <script type="text/javascript"src="<?=base_url('assets/tubes.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="text-center" data-gr-c-s-loaded="true">
<div class="user" style="">   
  <div class= "container" style="">
     <form class="needs-validation" id="" novalidate>
      <img id="logo" src="<?=base_url('assets/logo.png')?>" width="119" height="26">
  <div class="">
    <div class="float-container">
      <input type="Email" class="form-control" id="inputEmail" placeholder="Your email" required>
        <label class="invalid-feedback "for="inputEmail">Email Address can't be empty  </label>
    </div>
  </div>
  <div class="">
    <div class="float-container">
      <input type="Password" class="form-control" id="inputPassword" placeholder="Password" required>
      <label class="invalid-feedback" for="inputPassword"> Password can't be empty</label>
   
    </div>
    <div class="action">  
        <a class="forget" href="" style="">Forget password</a>
      </div>
  </div>
  <button class="btn btn-lg btn-block btn" type="submit" style="">Sign in</button>
</form>
<div class="signup signup-center">
      <a class="signup" href="<?=base_url('signup')?>">Sign up</a>
</div>
    <ul class="download" style="">
        <li><a class="dwnld" href="" ><img src="<?= base_url('assets/andoroid.png')?>" width="4.5%" height="4%"> Android</a></li>
        <li> <a class="dwnld" href="" ><img src="<?= base_url('assets/apple.png')?>"  width="3.8%" height="3.6%"> iPhone</a></li>
        <li><a class="dwnld" href="" ><img src="<?= base_url('assets/chrome.png')?>"  width="4.2%" height="3.3%"> Chrome</a></li>
    </ul>
  </div>
  
</div>

<?php $this->load->view('footer_view')?>
