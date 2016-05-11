<div class="main">
    <section class="page building-detail">

        <img src="<?php echo base_url('assets/images/upload/'.$buildingspec[0]['image_name']); ?>" width="100%">

        <div class="container">
            <p class="txt-space3 font-bold MyriadPro-Regular" style="font-size: 15px; color: #666;"><?php echo  $buildingspec[0]['content_1']; ?></p>
            <div class="line"></div>

            <div class="two-column">
                


                    <?php
                    foreach ($specification as $key => $rw) {
                        ?>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong><?php echo $rw['content_1']; ?></strong>
                            </div>
                            <div class="col-xs-6">
                                <?php echo $rw['content_2']; ?>
                                &nbsp;
                            </div>
                        </div>

                        
                        <?php
                    }
                    ?>
                   
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>


            </div>

            <div class="spasi30"></div>
                <a href="<?php echo base_url($bahasa.'#2'); ?>"><img src="<?php echo base_url('assets/dist/img/btn-back.png'); ?>" width="40"></a>
            </div>
                 
    </section>
</div>