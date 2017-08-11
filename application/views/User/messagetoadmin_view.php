<?php
if(isset($result)>0)
{
    foreach ($result as $object ) {

        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="left-box">
                        <div class="comment-form">
                            <h4>Massege To Admin</h4>
                            <?php if($this->session->flashdata('validationerror')): ?>
                            <div class='col-sm-12'>
                              <div class='row text-center'>
                                <div class='alert alert-danger'>
                                  <strong>Error!</strong> <?php echo $this->session->flashdata('validationerror'); ?>
                                </div>
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php if($this->session->flashdata('SuccessMsg')):?>
                                <?php echo $this->session->flashdata('SuccessMsg'); ?>
                            <?php endif; ?>
                            <?php
                            $formattribute=array(
                                'id' => 'commentform',
                                'class' => 'ft-fm-2 mtt40'
                                );
                            echo form_open('home/msgtoadmin',$formattribute);
                            ?>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php
                                        $txtareaAttribute=array(
                                            'rows' => '4',
                                            'class' => 'form-control no-resize',
                                            'placeholder' => 'Please type what you want...',
                                            'name' => 'txtMessage'
                                            );
                                        echo form_textarea($txtareaAttribute);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo form_hidden('txtMessageBy',$object->name);
                            ?>
                            <?php
                            $buttonAttribute=array(
                                'type' => 'submit',
                                'name' => 'btnSendMessage',
                                'class' => 'btn btn-raised btn-primary',
                                'value' => 'SUBMIT'
                                );

                            echo form_submit($buttonAttribute);
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <?php
    }}
    ?>