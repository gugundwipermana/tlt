<div class="main">
            <section class="page awards">

                   <img src="<?php echo base_url('assets/images/upload/'.$award[0]['image_name']); ?>" width="100%">
                    
                    <div class="container">
                            <p class="txt-space3 font-bold MyriadPro-Regular" style="font-size: 15px; color: #666;"><?php echo $award[0]['content_1']; ?></p>
                            <div class="line"></div>
                           
                            <div class="row">
                              <?php
                              foreach ($awards as $key => $rw) {
                                ?>
                                <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                  <img src="<?php echo base_url('assets/images/upload/'.$rw['image_name']); ?>" alt="...">
                                  <div class="caption">
                                    <p class="title"><?php echo $rw['content_1']; ?></p>
                                    <p><?php echo $rw['content_2']; ?></p>
                                  </div>
                                </div>
                              </div>
                                <?php
                              }
                              ?>
                            </div>

                            <div class="spasi30"></div>

                            <a href="<?php echo base_url($bahasa.'#2'); ?>"><img src="<?php echo base_url('assets/dist/img/btn-back.png'); ?>" width="40"></a>
                    </div>
                 
            </section>
      </div>