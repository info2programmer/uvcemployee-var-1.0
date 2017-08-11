<?php
if(isset($result)>0)
{
  foreach ($result as $object ) {
?>

    <div class="container-fluid">
        <div class="block-header">
            <h2>Employee Attendance</h2>
        </div>

        <?php
         if($this->session->flashdata('AttendanceMsg')){
              echo $this->session->flashdata('AttendanceMsg');
            }
        ?>

        <!-- experimental Div -->
<div class="login-page authentication">
<div class="col-xs-12 text-center">
            <script async defer id='201729105449208' src='http://widgets.worldtimeserver.com/Public.ashx?rid=201729105449208&theme=Digital&action=clock&wtsid=IN&hex=ff9900&city=&nbsp;&size=small'></script>
        </div>
<div class="card-top"></div>
    <div class="card locked">
    <h2 class="title text-center"><span>Daily</span> Attendance</h2>
       <div class="col-md-5">
          <div class="thumb">
            <img class="media-object" src="<?php echo base_url();?>assets/images/dp/<?php echo $object->imgpath; ?>" height="120px" width="120px" alt="" />            
          </div>
        </div>
        <div class="col-md-7">
            <h3><?php echo $object->name; ?></h3>
            <h5><?php echo $object->designation; ?></h5>
        </div>
        <div class="col-md-12">
           
                <div class="row">                    
                    <div class="col-xs-12 text-center">
                    <?php
                      if($this->user_model->checkattendence())
                      {
                        ?>
                      <form action='endoffice' method='post'>
                       <button class='btn btn-raised waves-effect g-bg-cyan' type='submit' name='btnEnd'>End Office</button>
                       </form>
                      <?php
                      }
                      else{
                        ?>
                        <form action='startoffice' method='post'>
                       <button class='btn btn-raised waves-effect g-bg-cyan' type='submit' name='btnStart'>Start Office </button>
                        </form>
                        <?php
                      }

                      ?>
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