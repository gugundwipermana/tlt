<div class="main">
  <div class="page about">
      <div class="container" style="width: 80%; text-align: left;">
      <div style="margin-top: 55px;"></div>

      <?php
      $jum = 0;
      foreach ($cari as $key => $value) {

        if ($value['content_name']){
                ?>
                  <strong><?php echo strtolower($value['content_name']); ?></strong>
                </br>
                <?php
        }


        if ($this->uri->segment(1) == "id") {



              # INDONESIA
              if ($value['content_1_id']){
                ?>
                <a href="<?php echo $value['link_id']; ?>">
                  <strong><?php echo strtolower($value['content_1_id']); ?></strong>
                </a>
                </br>
                
                <?php
                if (!empty($value['content_2_id'])){
                  ?>
                  <div>
                <a href="<?php echo $value['link']; ?>">
                <h2><?php echo substr($value['content_2_id'], 0, 1000); ?></h2>
                </a>
                </div>
                  <?php
                }

                if (!empty($value['content_3_id'])){
                  ?>
                  <div><?php echo substr($value['content_3_id'], 0, 1000); ?></div></br>
                  <?php
                }

                if (!empty($value['content_4_id'])){
                  ?>
                  <div><?php echo substr($value['content_4_id'], 0, 1000); ?></div></br>
                  <?php
                }

                if (!empty($value['content_5_id'])){
                  ?>
                  <div><?php echo substr($value['content_5_id'], 0, 1000); ?></div></br>
                  <?php
                }
              }

      } else {

        
            ?>
            <a href="<?php echo $value['link']; ?>">
              <strong><?php echo substr(strtolower($value['content_1']), 0, 1000); ?></strong>
            </a>
            </br>

            <?php
            if (!empty($value['content_2'])){
              ?>
              <div>
              <a href="<?php echo $value['link']; ?>">
              <h2><?php echo substr($value['content_2'], 0, 35); ?></h2>
              </a>
              </div>
              <?php
            }

            if (!empty($value['content_3'])){
              ?>
              <div><?php echo substr($value['content_3'], 0, 1000); ?></div></br>
              <?php
            }

            if (!empty($value['content_4'])){
              ?>
              <div><?php echo substr($value['content_4'], 0, 1000); ?></div></br>
              <?php
            }
            
            if (!empty($value['content_5'])){
              ?>
              <div><?php echo substr($value['content_5'], 0, 1000); ?></div></br>
              <?php
            }

        }

        echo "<div style='width:100%; height: 1px; background: #bbb; margin: 5px 0;'></div>";

        $jum = $jum + 1;
      }

      if($jum < 1) {
        echo "<h2>No items match your search.</h2>";
      }

      //print_r($cari);
      ?>
      </div>
  </div>
</div>