<?php
if($this->session->flashdata('msg')){
    $msg=$this->session->flashdata('msg');
    echo "<script>alert('".$msg."');</script>";
}
if($this->session->flashdata('postmsg')){
    $msg=$this->session->flashdata('postmsg');
    echo "<script>alert('".$msg."');</script>";
}
if(isset($result)>0){
 foreach ($result as $object) {

    ?>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 p-l-0 p-r-0">
                <section class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="<?php echo base_url(); ?>assets/images/dp/<?php echo $object->imgpath; ?>" style="height: 135px;width:120px;" alt="" /> </div>
                            <h4 class="mb-0"><strong><?php echo $object->name; ?></strong></h4>
                            <span class="text-muted"><?php echo $object->designation; ?></span>
                            <input type="hidden" name="txtUserId" id="txtUserId" value="<?php echo $object->emp_id; ?>">
                            <div class="mt-10">
                                <a href="messagetoadmin" class="btn btn-raised btn-default bg-blush btn-sm">Message</a>
                                <button class="btn btn-raised btn-default bg-green btn-sm">Block</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="profile-sub-header">
                        <div class="box-list">
                            <?php
                            $Fromattribute=array(
                                'enctype' => 'multipart/form-data',
                                'name' => 'form1'
                                );
                            echo form_open_multipart('home/uploadGallery',$Fromattribute); 
                            ?>
                            <ul class="text-center">
                                <li> <a href="#" class=""><i class="zmdi zmdi-email"></i>
                                    <p style="text-align:center;">My Inbox</p>
                                </a> </li>
                                <li> <a href="javascript:void(0);" class=""  onclick="document.getElementById('fileGallery').click();"><i class="zmdi zmdi-camera"></i>
                                    <p style="text-align:center;">Gallery</p>
                                </a> </li>
                                <li> <a href="javascript:void(0);" onclick="document.getElementById('fileGallery').click();"><i class="zmdi zmdi-attachment"></i>
                                    <p style="text-align:center;">Add Photo</p>
                                </a> </li>
                                <li> <a href="#"><i class="zmdi zmdi-format-subject"></i>
                                    <p style="text-align:center;">Add New Event</p>
                                </a> </li>
                            </ul>
                            <?php
                            $fileUpdate=array(
                                'id' => 'fileGallery',
                                'name' => 'fileGallery',
                                'style' => 'visibility: hidden;',
                                'onchange' => 'document.form1.submit();'
                                );
                            echo form_upload($fileUpdate);
                            ?>
                            <input type="hidden" name="txtName" value="Saikat Bhadury">
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>About Me</h2>
                    </div>
                    <div class="body">
                        <h5>Name :<?php echo $object->name; ?><br/>Position : <?php echo $object->designation; ?><br/>Mobile :<?php echo $object->phone; ?></h5>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>My Portfolio Status</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled">
                            <li>
                                <div>Adobe Photoshop</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Corel Draw</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML/CSS/JS</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Video Editing</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active"><a href="#mypost" data-toggle="tab" aria-expanded="false">My Post</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="mypost">
                                <div class="wrap-reset">
                                   <div class="mypost-form">
                                      <?php echo form_open_multipart('home/dopost'); ?>
                                      <div class="form-group">
                                        <div class="form-line">
                                            <?php
                                            $txtAreaAttribute=array(
                                                'rows' => 4,
                                                'class' => 'form-control no-resize',
                                                'name' => 'txtPostText'
                                                );
                                            echo form_textarea($txtAreaAttribute);

                                            $uploadImage=array(
                                                'id' => 'uploadImage',
                                                'name' => 'uploadImage',
                                                'style' => 'visibility: hidden;'
                                                );

                                            echo form_upload($uploadImage);

                                            $inputHidden=array(
                                              'type' => 'hidden',
                                              'name' => 'txtName',
                                              'value' => $object->name
                                              );

                                            echo form_input($inputHidden);
                                            ?>

                                        </div>
                                    </div>
                                    <div class="post-toolbar-b"> <a href="javascript:void(0);" tooltip="Add File" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-attachment"></i></a> <a href="javascript:void(0);" tooltip="Add Image" class="btn btn-raised btn-default btn-sm" onclick="document.getElementById('uploadImage').click();"><i class="zmdi zmdi-camera"></i></a>
                                        <?php
                                        $formsubmit=array(
                                            'class'=>'pull-right btn btn-raised btn-success btn-sm',
                                            'tooltip' => 'Post it!',
                                            'name' => 'btnButton',
                                            'value' => 'Post'
                                            );
                                        echo form_submit($formsubmit);
                                        ?>
                                        <!-- <button class="" ="" name="btnButton">Post</button> -->
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                                <div class="mypost-list">
                                    <?php
                                        if(isset($postvar)>0){
                                            foreach ($postvar as $postdata) {
                                               echo "
                                                    <div class='post-box'>
                                                    <div class='post-img'><img src='".$postdata->post_image."' class='img-responsive' alt=''/></div>
                                                    <div>
                                                    <h4>".$postdata->post_text."</h4>
                                                    <p class='mb-0'>".$postdata->name."</p>
                                                    <p> <a href='javascript:void(0);' class='btn btn-raised btn-info btn-sm'><i class='zmdi zmdi-favorite-outline'></i> Like (0) </a></p>
                                                    </div>
                                                    </div><hr/>
                                               ";
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
?>