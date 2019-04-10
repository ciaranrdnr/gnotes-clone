<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All -  Gnotes</title>
    <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/all.css') ?>?ts=<?=time()?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Footer.css') ?>?ts=<?=time()?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <ul class="nav navbar-nav float float-xs-right ">
            <li class="nav-item">
                <img src="" alt="">
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" >
            Email@email.com <img src="<?=base_url('assets/account.png')?>" style="Height:36px!important;"></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Change password</a>
                        <a class="dropdown-item" href="#">Premium Account</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="#">Signout</a>

                    </div>
            </li>
        </ul>
    </nav>
    <div class="sidenav">
        
        <a href="#">About</a>
        <div class="btn-group">
        <button type="button" class="btn b1" >New Note</button>
        <button type="button" class="btn dropdown-toggle dropdown-toggle-split b2" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Tablet</a>
            <a class="dropdown-item" href="#">Smartphone</a>
        </div>
        </div>
        <a href="#">All</a>
        <a href="#">Tags</a>
        <a href="#">Add Tag</a>
        <hr class="">
        <a href="">Trash</a>
    </div>
</div>
</body>
</html>
