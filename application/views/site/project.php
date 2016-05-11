<div class="main">
    <section class="page project">

        <div class="container">
            <p class="txt-space3 font-bold"><?php echo $project_team[0]['content_1']; ?></p>
            <h2 class="h2-dinamis"><?php echo $project_team[0]['content_2']; ?></h2>
            <div class="line"></div>

            <div class="two-column">
                <?php
                foreach ($team as $key => $rw) {
                    ?>
                    <p><strong><?php echo $rw['content_1']; ?></strong></p>
                    <p><?php echo $rw['content_2']; ?></p>
                    <p>&nbsp;</p>
                    <?php
                }
                ?>
            </div>

            <div class="spasi30"></div>
                <a href="<?php echo base_url($bahasa.'#2'); ?>"><img src="<?php echo base_url('assets/dist/img/btn-back.png'); ?>" width="40"></a>
            </div>
                 
    </section>
</div>