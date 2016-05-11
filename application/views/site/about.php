<div class="main">
  <div class="page about">

                   <img src="<?php echo base_url('assets/images/upload/'.$about[0]['image_name']); ?>" width="100%">
                    
                    <div class="container">
                            <p class="txt-space3 font-bold"><?php echo $about[0]['content_1']; ?></p>
                            <h2 class="h2-dinamis"><span class="font-merah"><?php echo $about[0]['content_2']; ?></span></h2>
                            <!-- <h3 class="h3-dinamis"><span class="font-merah">a New Icon of Indonesia</span></h3> -->
                            <div class="line"></div>
                            <?php echo $about[0]['content_3']; ?>
                            <div class="spasi30"></div>
                      </div>

                      <div class="container bos">
                            <div class="row">
                            <?php
                            foreach ($bod as $key => $bos) {
                              ?>
                              <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                  <img src="<?php echo base_url('assets/images/upload/'.$bos['image_name']); ?>" alt="...">
                                  <div class="caption">
                                    <p class="title"><?php echo $bos['content_1']; ?></p>
                                    <p><?php echo $bos['content_2']; ?></p>
                                  </div>
                                </div>
                              </div>
                              <?php
                            }
                            ?>
                              
                    </div>
                 
              </div>
              <div class="spasi30"></div>

              <a href="<?php echo base_url($bahasa.'#2'); ?>"><img src="<?php echo base_url('assets/dist/img/btn-back.png') ?>" width="40"></a>
</div>
</div>