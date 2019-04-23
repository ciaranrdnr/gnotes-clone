<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All - GNotes</title>
    <link rel="icon" href="<?=base_url('assets/gnotes.png') ?>" type="image/gif" sizes="20x20">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/all.css') ?>?ts=<?=time()?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/Footer.css') ?>?ts=<?=time()?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
</head>
<body>
<div>
    <nav class="navbar fixed-top">
            <a class="navbar-brand" href="<?=base_url()?>">
            <img src="<?=base_url('Assets/logo-white.png')?>" width="108px">
            </a>
            <ul class="nav navbar-nav float float-xs-right ">
                <li class="nav-item dropdown">
                  <img class="sort" src="<?= base_url('assets/sort.png')?>" alt="" style="width: 5%; height:5%; margin: 0 0 0% -10%; padding: 10px 0 10px 0px;">
                    
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" style="margin-top: -40px; "><?=$this->session->userdata('email')?><img src="<?=base_url('assets/account.png')?>" style="Height:36px!important; margin-left:10px;"></a>
                        <div class="dropdown-menu">
                            <?php 
                            $rows = $this->db->query("SELECT * FROM tubes where email='".$this->session->email."'")->row_array();   
                            ?>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal<?php echo "$rows[id]"; ?>">
                            Change password </a>
                            <a class="dropdown-item" href="#">Premium Account</a>
                            <a class="dropdown-item" href="#">Help</a>
                            <a class="dropdown-item" href="#">Signout</a>

                        </div>
                </li>
            </ul>
        </nav>
<?php $this->load->view('Nav_view')?>
  <div style="width:100%; height:100%; padding: 200px; background-color: white;">
    <img class="bgr"src="<?= base_url('assets/bg.png')?>" alt="" style="margin-left:470px; margin-top:-30px;"> 
   <div style="margin-left: 420px; color: #747474;">
      <p class="bgg" style="">Haven't written anything yet.</p>   
      <p class="bggg">Click "New Note" to write something.</p>
    </div>
  
  </div>

  <div class="change">
          <!-- Modal -->
          <?php 
            $rows = $this->db->query("SELECT * FROM tubes where email='".$this->session->email."'")->row_array();   
          ?>
        <div style="" class="modal fade" id="exampleModal<?php echo "$rows[id]"; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog " role="document">
            <div class="modal-content" style="">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url();?>Auth_controller/proses_edit" method="post" style="">
            
                <input type="hidden" name="id" value="<?php echo "$rows[id]"; ?>">
                <input type="Password" id="inputPassword" class="form-control" name="Password" placeholder="Current password" required><br>
                <input type="Password" id="inputPassword" class="form-control" name="NewPassword" placeholder="New password" required><br>
                <input type="Password" class="form-control" id="Re-inputPassword" placeholder="Confirm new password" required>
              </div>
              <div class="modal-footer">
                <button style="background-color: #eee; color:#000 !important; width: 100px; height:35px; border:none;" type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button style="background-color: #00C28B; width: 100px; height:35px; border:none;" type="submit" class="btn btn-primary">OK</button>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</div>
    
</body>
</html>