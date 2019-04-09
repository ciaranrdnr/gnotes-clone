<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy -  Gnotes</title>
    <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Privacy.css') ?>?ts=<?=time()?>">
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
<p>Our privacy policy explains how information is collected, used and disclosed by GNotes with respect to your access and use of GNotes’s services through our mobile &amp; web application (referred to below as “GNotes”).</p>
</div>
    <div class="section">
        <h5 style="">What Information Do We Collect?</h5>
        <p style="">We collect certain information you provide to us when using GNotes, such as when you send us an email or post information on our Google Groups, the information includes:</p>
        <p><strong>“Personal Information”</strong> is the information that you provide to us that personally identifies you, such as your name, phone number or email address.  GNotes does not collect or require users to provide Personal Information.</p>
        <p><strong>“Non-Personal Information”</strong> is the information that cannot be directly associated with a specific person or entity. Non-Personal Information includes but is not limited to your device’s configuration, the package ID and version of GNotes that you use.</p>
    </div>
    <div class="section">
        <h5>How Do We Use the Information We Collect?</h5>
        <p>We use the information collected through GNotes for the purposes described below:</p>
        <ul>
            <li>to provide our services or information you request, and to process and complete any transactions;</li>
            <li>to respond to your emails, submissions, questions, comments, requests, and complaints and provide customer service;</li>
            <li>to monitor and analyze usage and trends, and to personalize and improve GNotes and your experiences when you use GNotes;</li>
            <li>to push you confirmations, updates, security alerts, and support and administrative messages and otherwise facilitate your use of, and our administration and operation of, our services;</li>
        </ul>
    </div>
    <div class="section">
        <h5>What Information Do We Share With Third Parties?</h5>
        <p>We will not share the personal information we have collected from you.</p>
        <p>We are not responsible for the actions of service providers or other third parties, nor are we responsible for any additional information you provide directly to any third parties.</p>
    </div>
    <div class="section">
        <h5>Links to Other Sites</h5>
        <p>GNotes may contain links to other sites. Any information you provide on those sites is provided directly to the owner of that site and is subject to that party's privacy policy. Our privacy policy does not apply to such sites, and we are not responsible for the content or privacy and security practices and policies of those sites.</p>
    </div>
    <div class="section">
        <h5>Changes</h5>
        <p>Any information that is collected is subject to the privacy policy in effect at the time such information is collected. We may, however, modify and revise our privacy policy from time-to-time. If we make any material changes to this policy, we will notify you of such changes by posting them on GNotes or by sending you an email or other notification, and we will indicate when such changes will become effective. By continuing to access or use GNotes after those changes become effective, you are agreeing to be bound by the revised policy.</p>
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
