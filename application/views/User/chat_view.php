 <?php
 if($this->session->flashdata('errsendmessage'))
 {
    $message=$this->session->flashdata('errsendmessage');
    echo "<script>alert('".$message."');</script>";
 }
 ?>
 <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Skins</a></li>
            <li role="presentation"><a href="#chat" data-toggle="tab">Chat</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">Setting</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required="" autofocus="" />
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="./assets/images/random-avatar4.jpg" alt="" /> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="./assets/images/random-avatar5.jpg" alt="" /> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="./assets/images/random-avatar3.jpg" alt="" /> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="./assets/images/random-avatar4.jpg" alt="" /> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="./assets/images/random-avatar5.jpg" alt="" /> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img class="media-object " src="./assets/images/random-avatar6.jpg" alt="" /> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked="" />
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked="" />
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked="" />
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked="" />
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    </section>
    
    <section class="content">
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="people-list" id="people-list">
            <div class="search">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Search..." />
                    </div>
                </div>
                <button class="btn btn-sm btn-default pull-right visible-xs ml-5" data-toggle="collapse" data-target="#open-chats" aria-expanded="false" aria-controls="collapseExample"><i class="zmdi zmdi-chevron-down"></i></button>                                        
            </div>    

            <ul class="list collapse-xs" id="open-chats">
            <?php
                if(isset($friend)>0){
                    foreach ($friend as $friendlist) {
                        $status="";
                        if($friendlist->isLogin=="1")
                        {
                            $status="Online";
                             echo "
                            <li class='clearfix'><a href='".base_url()."home/chatbox/?id=".$friendlist->emp_id."&name=".$friendlist->name."&image=".$friendlist->imgpath."&sw=Online'><img src='".base_url().'assets/images/dp/'.$friendlist->imgpath."' alt='avatar' hight='55px' width='55px' />
                                <div class='about'>
                                    <div class='name'>".$friendlist->name."</div></a>
                                    <div class='status'> <i class='zmdi zmdi-circle online'></i> ".$status." </div>
                                </div>
                            </li>
                        ";
                        }
                        else{
                             $status="Offline";
                              echo "
                            <li class='clearfix'><a href='".base_url()."home/chatbox/?id=".$friendlist->emp_id."&name=".$friendlist->name."&image=".$friendlist->imgpath."&sw=Offline'><img src='".base_url().'assets/images/dp/'.$friendlist->imgpath."' alt='avatar' hight='55px' width='55px' />
                                <div class='about'>
                                    <div class='name'>".$friendlist->name."</div></a>
                                    <div class='status'> <i class='zmdi zmdi-circle offline'></i> ".$status." </div>
                                </div>
                            </li>
                        ";
                        }
                        // echo "
                        //     <li class='clearfix'><a href='".base_url()."home/chatbox/?id=".$friendlist->emp_id."&name=".$friendlist->name."&image=".$friendlist->imgpath."'><img src='".base_url().'assets/images/dp/'.$friendlist->imgpath."' alt='avatar' hight='55px' width='55px' />
                        //         <div class='about'>
                        //             <div class='name'>".$friendlist->name."</div></a>
                        //             <div class='status'> <i class='zmdi zmdi-circle online'></i> ".$status." </div>
                        //         </div>
                        //     </li>
                        // ";
                    }
                }
            ?>
            </ul>

        </div>
        <div class="chat">
            <?php
                if(isset($_GET['id'])):
            ?>
            <div class="chat-header clearfix"> <img src="<?php echo base_url();?>assets/images/dp/<?php echo $_GET['image']; ?>" hight="55px" width="55px" alt="avatar" />
                <div class="chat-about">
                    <div class="chat-with"><?php echo $_GET['name']; ?></div>
                   <!--  <div class="chat-num-messages">already 1 902 messages</div> -->
                </div>
                <i class="fa fa-star"></i> </div> <?php endif; ?>
            <!-- end chat-header -->
            
            <div class="chat-history">
                <ul>
                <?php
                    if(isset($_GET['id'])):

                        //Auto Refresh Page After 10 Sec
                        $url1=$_SERVER['REQUEST_URI'];
                        header("Refresh: 10; URL=$url1");
                ?>
                <?php if(isset($conversession)>0): ?>
                    <?php foreach ($conversession as $message ) {
                        if($message->from_id!=$_GET['id'])
                        {
                             echo "
                              <li class='clearfix'>
                                <div class='message-data align-right'> <span class='message-data-time'>".$message->time_sent."</span> &nbsp; &nbsp; </div>
                                <div class='message other-message float-right'> ".$message->message."</div>
                            </li>";
                        }
                        else{

                            echo "
                        <li>
                        <div class='message-data'> <span class='message-data-name'></i> ".$_GET['name']."</span> <span class='message-data-time'>".$message->time_sent."</span> </div>
                        <div class='message my-message'> ".$message->message." </div>
                        </li>
                       ";  
                        }
                    } ?>
                <?php endif; ?>
                    <!-- <li class="clearfix">
                        <div class="message-data align-right"> <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp; <span class="message-data-name">Olia</span> <i class="zmdi zmdi-circle me"></i> </div>
                        <div class="message other-message float-right"> Hi Vincent, how are you? How is the project coming along? </div>
                    </li>
                    <li>
                        <div class="message-data"> <span class="message-data-name"><i class="zmdi zmdi-circle online"></i> Vincent</span> <span class="message-data-time">10:12 AM, Today</span> </div>
                        <div class="message my-message"> Are we meeting today? Project has been already finished and I have results to show you. </div>
                    </li>
                    <li class="clearfix">
                        <div class="message-data align-right"> <span class="message-data-time">10:14 AM, Today</span> &nbsp; &nbsp; <span class="message-data-name">Olia</span> <i class="zmdi zmdi-circle me"></i> </div>
                        <div class="message other-message float-right"> Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project? </div>
                    </li>
                    <li>
                        <div class="message-data"> <span class="message-data-name"><i class="zmdi zmdi-circle online"></i> Vincent</span> <span class="message-data-time">10:20 AM, Today</span> </div>
                        <div class="message my-message"> Actually everything was fine. I'm very excited to show this to our team. </div>
                    </li>
                    <li>
                        <div class="message-data"> <span class="message-data-name"><i class="zmdi zmdi-circle online"></i> Vincent</span> <span class="message-data-time">10:31 AM, Today</span> </div>
                        <i class="zmdi zmdi-circle online"></i> <i class="zmdi zmdi-circle online" style="color: #AED2A6"></i> <i class="zmdi zmdi-circle online" style="color:#DAE9DA"></i> </li> -->
                <?php endif; ?>
                </ul>
            </div>
            <!-- end chat-history -->
            <?php
                if(isset($_GET['id'])):
            ?>
            <div class="chat-message clearfix">
            <?php 
                $chatform=array(
                    'name' => 'frmChat',
                    'id' => 'frmChat'
                );
             ?>
            <?php echo form_open('home/sendmessage',$chatform); ?>
                <div class="form-group">
                    <div class="form-line">
                    <?php
                        $chattext=array(
                            'required' => 'required',
                            'class' => 'form-control',
                            'placeholder' => 'comments',
                            'type' => 'text',
                            'name' => 'txtMessage'
                        );
                    ?>
                    <?php echo form_input($chattext); ?>
                    </div>
                </div> 
                <?php $btnSend=array(
                    'type' => 'submit',
                    'class' => 'btn btn-sm btn-raised btn-default pull-right',
                    'value' => 'Send',
                    'name' => 'btnSubmit'
                ); ?> 
                <?php
                    echo form_hidden('id',$_GET['id']);
                    echo form_hidden('name',$_GET['name']);
                    echo form_hidden('image',$_GET['image']);
                ?>              
                <?php echo form_submit($btnSend); ?>
            <?php echo form_close(); ?>
            </div>
            <?php
                endif;
            ?>
            <!-- end chat-message --> 
        </div>
    </div>
    </div>
</section>