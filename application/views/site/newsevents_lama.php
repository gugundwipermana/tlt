<div class="main">
            <section class="page about">

                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php
                        $active = "active";
                        foreach ($detail_newsevent as $key => $rw) {
                          if ($key > 0) { $active = ""; }
                          ?>
                          <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>" class="<?php echo $active; ?>"></li>
                          <?php
                        }
                        ?>
                        
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <?php
                        $active = "item active";
                        foreach ($detail_newsevent as $key => $rw) {
                          if ($key > 0) { $active = "item"; }
                          ?>
                          <div class="<?php echo $active; ?>">
                          <img src="<?php echo base_url('assets/images/upload/'.$rw['image_name']); ?>" width="100%" alt="...">
                          <div class="carousel-caption">
                            
                          </div>
                        </div>
                          <?php
                        }
                        ?>
                        
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    
                    <div class="container">
                            <p class="txt-space3"><?php echo $detail_newsevent[0]['content_1']; ?></p>
                            <h3 class="h3-dinamis"><span class="font-merah"><?php echo $detail_newsevent[0]['content_2']; ?></span></h3>
                            <!-- <h3 class="h3-dinamis"><span class="font-merah">Telkom Landmark Tower</span></h3> -->
                            <div class="line"></div>
                            <?php echo $detail_newsevent[0]['content_3']; ?>
                            
                            <div class="spasi30"></div>

                            <a href="<?php echo base_url($bahasa.'#6'); ?>"><img src="<?php echo base_url('assets/dist/img/btn-back.png'); ?>" width="40"></a>
                    </div>
                 
            </section>
      </div>