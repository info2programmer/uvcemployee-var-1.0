  <div class="container-fluid"> 
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>IMAGE GALLERY</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> GALLERY </h2>
                        
                    </div>
                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                        <?php
                            if(isset($result)>0){
                                foreach ($result as $object) {
                                echo "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'> <a href='../".$object->pic_path."' data-sub-html='Demo Description'> <img class='img-responsive thumbnail' src='../".$object->pic_path."' /> </a> </div>";
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>