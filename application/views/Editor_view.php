<link rel="stylesheet" type="text/css" href="<?=base_url('assets/editor.css') ?>?ts=<?=time()?>">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div style="width:100%; height:523.33px; padding: 0px 0 200px 0px; background-color: white;">
   
   <div class="editor-group" style="width:720px; height:410px; position:absolute; left:400px; top:50px;">
      <div class="editorHeader" style="background-color:white; height:72px; margin-bottom:16px; border-bottom: 0.5px solid #BEBEBE;">
        <div style="display:inline-block;">
            <div class="btn-group back" style="">
            <a href="#">
            <button type="button" class="btn btn-light" style="color: #372020 !important;height:32px; width:74px; border: 1px solid #D8D8D8; border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;">
            Save</button>
            </a>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="border: 1px solid #D8D8D8;height:32px;color: #372020 !important;">
                <span class="caret"></span>
            </button>
                    <div class="dropdown-menu ardown" >
                        <a class="dropdown-item" href="#">Save</a>
                        <a class="dropdown-item" href="#">Discard</a>
                    </div>
                    <div>
                <a class="dropdown-toggle addFolder" href="" id="navbarDropdown" role="button" data-toggle="dropdown" data-target="2" href=""style=""> <img src="<?= base_url('assets/folder.svg')?>" alt="">
                Folder
                </a>
                <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                            Add Folder </a>

                        </div>
                        
                        
                        
            </div>
            <div>
                        <a class="fileUpload right"href="" role="button">
                        <i class='fas fa-paperclip'></i>
                        </a>
                        </div>
          <div>
                        <a class="alarm right"href="" role="button" >
                        <i class="material-icons" style="font-size:20px;">&#xe855;</i>
                        </a>
            </div>
            <div>
                        <a class="trash right"href="" role="button">
                        <i class='fas fa-trash'></i>
                        </a>
            </div>
            
         
            </div>
            
            
            
                        
        </div>
      </div>
      <div class="editorBody" style="height:405px; margin-bottom:16px;">
      <textarea name="note" id="note" cols="95" rows="16" style="border: none;"></textarea>
      </div>
   </div>
  
  </div>