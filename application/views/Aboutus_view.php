<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us -  Gnotes</title>
    <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Aboutus.css') ?>?ts=<?=time()?>">
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
    <img class="banner" src="<?=base_url('Assets/Aboutus.png')?>">
</div>
<div class="container" >
    <div class="row">
    <div class="col-lg g1">
    
    <ul class="" style="">
    <h6>Features</h6>
        <li>Practical: simple, stable and safety.</li>
        <li>Plentiful: supports text, images, handwriting, graffiti and other rich record type of notes.</li>
        <li> Sync: you can sync your notes with GNotes App on Android and iOS</li>
    </ul>
    </div>
    <div class="col-lg g2">
    <h6>Get GNotes on :</h6>
    <a class="get" href="<?=base_url(); ?>">WEB</a>
    <br>
    <a class="get" href="https://play.google.com/store/apps/details?id=org.dayup.gnotes">Android - Google Play</a>
    <br>
    <a class="get" href="https://itunes.apple.com/us/app/gnotes/id569843819?mt=8">iPhone/iPad -  App Store</a>
    </div>
    <div class="col-lg g3">
    <h6>Feedback:</h6>
    <a class="get" href="">Help</a>
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
