<div class="sidenav">
        <div class="btn-group">
        <a href="<?= base_url('')?>auth_controller/new">
        <button type="button" class="btn b1" >
        New Note</button>
        </a>
        <button type="button" class="btn dropdown-toggle dropdown-toggle-split b2" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <div class="dropdown-menu ardown" >
            <a class="dropdown-item" href="<?= base_url();?>Auth_controller/allcontrol">Note</a>
            <a class="dropdown-item" href="#">Checklist</a>
            <hr>
            <a class="dropdown-item" href="#">Folder</a>
        </div>
        </div>
        <style>
            ul {
            list-style-image: url('../assets/trans.png');
            
            }
        </style>
        <div class="bisa">
                <ul> 
                    <li class="folder all">
                        <div class="borderr">
                        <a href="<?= base_url();?>Auth_controller/all" style="">
                        <img src="<?=base_url('assets/all.svg')?>" alt="">
                        <span class="name">All</span> </a>
                        </div>
                    </li>
                </ul>
                
                <ul>
                    <li class="folder tags">
                        <div class="tag-list borderr" >
                            <a data-toggle="collapse" class="panel-title folder-item" href="#collapseAdd">
                            <img src="<?=base_url('assets/tag.svg')?>" alt=""> <span class="name"> Tags</span>
                            </a>
                        </div>
                        <div class="add borderr" id="collapseAdd"class="panel-collapse collapse">
                            <a class="panel-body" href="#">
                            <img src="<?=base_url('assets/plus.svg')?>" alt=""> <span class="name">Add Tag</span>
                            </a>  
                            </div>
                    </li>
                </ul> 
                <!-- <a href="#">Add Tag</a> -->
                <hr class="">
                <ul>
                    <div class="borderr">
                        <a href="<?= base_url();?>Auth_controller/trash"><img src="<?=base_url('assets/trash.svg')?>" alt=""> 
                        <span class="name">Trash</span>
                        </a>
                    </div>
                    

                </ul>
        </div>
    </div>