<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term of Service -  GNotes</title>
    <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Tos.css') ?>?ts=<?=time()?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Footer.css') ?>?ts=<?=time()?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
<nav class="navbar fixed-top">
    <a class="navbar-brand" href="<?=base_url()?>">
    <img src="<?=base_url('Assets/logo-white.png')?>" width="108px">
    </a>
    <ul class="nav navbar-nav pull-right ">
        <li class="nav-item">
        <a class="nav-link signin" href="<?=base_url()?>">Sign in</a>
        </li>
    </ul>
</nav>
<div class="user">
<div class="section s">
<p>By using the GNotes service you are agreeing to be bound by thw following terms and conditions ("Terms of Use").</p>
</div>
    <div class="section">
        <h5 style="">Basic Terms</h5>
        <ol>
        <li>You are responsible for any activity that occurs in your GNotes app.</li>    
        <li>You are responsible for keeping your password secure.</li>
        <li>You may not use the GNotes service for any illegal or unauthorized purpose. International users agree to comply with all local laws regarding online conduct and acceptable content.</li>
        <li>You must not modify, adapt or hack GNotes or modify another website so as to falsely imply that it is associated with GNotes.</li>
        <li>You must not, in the use of GNotes, violate any laws in your jurisdiction (including but not limited to copyright laws).</li>
    </ol>
    </div>
    <div class="section">
        <h5>General Conditions</h5>
        <p>We use the information collected through GNotes for the purposes described below:</p>
        <ol>
            <li>We reserve the right to modify or terminate the GNotes service for any reason, with or without notice at any time.</li>
            <li>We reserve the right to alter these Terms of Use at any time. If the alterations constitute a material change to the Terms of Use, we will notify you via internet mail according to the preference expressed on your account. What constitutes a "material change" will be determined at our sole discretion, in good faith and using common sense and reasonable judgement.</li>
            <li>We reserve the right to refuse service to anyone for any reason at any time.</li>
        </ol>
    </div>
</div>
<div class="container co">
    <ul class="download" style="">
        <li><a class="dwnld" href="https://play.google.com/store/apps/details?id=org.dayup.gnotes" ><img src="<?= base_url('assets/andoroid.png')?>" width="1.5%" height="1.5%"> Android</a></li>
        <li> <a class="dwnld" href="https://itunes.apple.com/us/app/gnotes/id569843819?mt=8" ><img src="<?= base_url('assets/apple.png')?>"  width="1.5%" height="1.5%"> iPhone</a></li>
        <li><a class="dwnld" href="https://chrome.google.com/webstore/detail/gnotes/idpclaojcopihmplcfnmgfkllldpajen" ><img src="<?= base_url('assets/chrome.png')?>"  width="1.5%" height="1.5%"> Chrome</a></li>
    </ul>
</div>
    </div>
    
    <?php $this->load->view('footer_view')?>