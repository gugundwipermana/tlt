<div class="main" style="height:100%;">
	<section class="page landing">
		<!-- ANIMATION -->

        <div id="landing-anime" style="position:absolute;width:100%; height:100%; background-image:url(<?php echo base_url("assets/images/upload/".$home[0]['image_name']); ?>); background-size: cover; background-position: center;">
                            <div class="overlay" style="position:absolute; width:100%; height: 100%;">
                                    <div class="box-middle-vertical">
                                            <div id="text-one">

                                                <p class="h1-dinamis"><span class="font-normal"><?php if (!empty($home[0]['content_1'])) { echo $home[0]['content_1']; } ?></span></p>
                                                <!-- <p class="h1-dinamis"><span class="font-normal">&nbsp;</span></p> -->

                                            </div>
                                            <div id="text-two" style="position: absolute; top:-10px;">
                                                <p class="h1-dinamis"><span class="font-normal"><?php if (!empty($home[0]['content_2'])) { echo $home[0]['content_2']; } ?></span></p>
                                                <!-- <p class="h1-dinamis"><span class="font-normal">from Telkom Group</span></p> -->
                                            </div>
                                            <div id="text-three" style="position: absolute; top:-10px;">
                                                <p class="h1-dinamis"><span class="font-normal"><?php if (!empty($home[0]['content_3'])) { echo $home[0]['content_3']; } ?></span></p>
                                                <!-- <p class="h1-dinamis"><span class="font-normal">Prestigious Landmark</span></p> -->
                                            </div>
                                    </div>
                                   
                                    <div class="" id="land-logo" style="position: absolute;top:60px; left:10%;">
                                            <img src="<?php echo base_url('assets/dist/img/logo-white.png') ?>"  width="150">
                                    </div>
                            </div>
                    </div>

        <!-- END -->

        <div id="slides">
            <div class="slides-container">
                <?php
                for ($i=1; $i<count($home); $i++){
                    ?>
                    <li class="slides-item">
                        <img src="<?php echo base_url('assets/images/upload/'.$home[$i]['image_name']); ?>" alt="">
                        <div class="overlay" style="position:absolute; width:100%; height: 100%;">
                            <div class="box-middle-vertical">
                                <p class="h1-dinamis"><span class="font-normal"><?php echo $home[$i]['content_1']; ?></span></p>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="box-scroll-down">
            <p>Scroll Down</p>
            <span class="li-nav"><a href="#2" data-index="2"><img src="<?php echo base_url('assets/dist/img/chevron-down.png'); ?>" width="45"></a></a></span>
        </div>
	</section>

    <section class="page buildings">
        <div class="box-middle-vertical">
            <div class="container">
                <p class="txt-space3"><?php echo $building[0]['content_1']; ?></p>
                <h1 class="h2-dinamis"><?php echo $building[0]['content_2']; ?></h1>
                <div class="line"></div>
                <p class="line-150">
                <?php echo $building[0]['content_3']; ?>
                </p>
            </div>
            <div class="container ct">
                <div class="row spasinull">
                    <div class="col-sm-3 col-xs-3 spasinull">
                        <a href="<?php echo base_url($bahasa.'about'); ?>" class="thumbnail">
                            <img src="<?php echo base_url('assets/dist/img/about.png'); ?>" alt="...">
                            <div class="caption">
                                <p><?php echo $about[0]['content_1']; ?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-3 spasinull">
                        <a href="<?php echo base_url($bahasa.'awards'); ?>" class="thumbnail">
                            <img src="<?php echo base_url('assets/dist/img/awards.png'); ?>" alt="...">
                            <div class="caption">
                                <p><?php echo $award[0]['content_1']; ?></p>
                            </div>
                        </a>
                    </div>
                                      
                    <div class="col-sm-3 col-xs-3 spasinull">
                        <a href="<?php echo base_url($bahasa.'building'); ?>" class="thumbnail">
                            <img src="<?php echo base_url('assets/dist/img/buildings.png'); ?>" alt="...">
                            <div class="caption">
                                <p><?php echo $buildingspec[0]['content_1']; ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 spasinull">
                        <a href="<?php echo base_url($bahasa.'project'); ?>" class="thumbnail">
                            <img src="<?php echo base_url('assets/dist/img/project.png'); ?>" alt="...">
                            <div class="caption">
                                <p><?php echo $project_team[0]['content_1']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page locations">

        <!-- <div class="atas"> -->
        <div id="googleMap"></div>
                      <!-- </div> -->
        <div class="bawah">
            <div class="container" style="">
                <div class="box">
                    <p class="txt-space3"><?php echo $location[0]['content_1']; ?></p>
                    <h2 class="h2-dinamis spasinull"><?php echo $location[0]['content_2']; ?></h2>

                    <div class="line"></div>
                    <p class="font-MyriadPro-Bold font-white"><?php echo $location[0]['content_3']; ?></p>
                    <?php echo $location[0]['content_4']; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="page floorplan" style="color: white;">
        <div class="row ">
            <div class="col-sm-6 spasinull">
                <div class="container floor" style="">
                    <div class="box">
                        <p class="txt-space3"><?php echo $floorplan[0]['content_1']; ?></p>
                        <h2 class="h2-dinamis spasinull"><?php echo $floorplan[0]['content_2']; ?></h2>
                        <div class="line text-desc"></div>
                        <div class="text-desc">
                        <?php echo $floorplan[0]['content_3']; ?>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="spasinull">
                <div class="box-image">
                    <img src="<?php echo base_url('assets/dist/img/floorplan_asli_titik.png'); ?>" id="images" usemap="#imagesmap" class="map">
                </div>

                <map name="imagesmap">
                    <area class="maparea" id="satu" shape="circle" coords="246,106,40,40" title="High" data-maphilight='{"fillColor":"00ff00","shadow":true,"shadowBackground":"ffffff","alwaysOn":true}'>
                    <area class="maparea" id="dua" shape="circle" coords="367,313,40,40" title="Middle" data-maphilight='{"fillColor":"00ff00","shadow":true,"shadowBackground":"ffffff","alwaysOn":true}'>
                    <area class="maparea" id="tiga" shape="circle" coords="223,484,40,40" title="Left" data-maphilight='{"fillColor":"00ff00","shadow":true,"shadowBackground":"ffffff","alwaysOn":true}'>
                    <area class="maparea" id="empat" shape="circle" coords="379,477,40,40" title="Right" data-maphilight='{"fillColor":"00ff00","shadow":true,"shadowBackground":"ffffff","alwaysOn":true}'>
                </map>

                <div class="maparea-isi satu" id="satu-isi">
                    <img src="<?php echo base_url("assets/images/upload/".$zone_floorplan[0]['image_name']); ?>" height="100">
                    <h3><?php echo $zone_floorplan[0]['content_1']; ?></h3>
                    <botton class="f-read btn-border-white" data-toggle="modal" data-target="#myModal0">READ MORE</botton>
                    <div class="line-arah"></div>
                </div>
                
                <div class="maparea-isi dua" id="dua-isi">
                    <img src="<?php echo base_url("assets/images/upload/".$zone_floorplan[1]['image_name']); ?>" height="100">
                    <h3><?php echo $zone_floorplan[1]['content_1']; ?></h3>
                    <botton class="f-read btn-border-white" data-toggle="modal" data-target="#myModal1">READ MORE</botton>
                    <div class="line-arah"></div>
                </div>
                
                <div class="maparea-isi tiga" id="tiga-isi">
                    <img src="<?php echo base_url("assets/images/upload/".$zone_floorplan[2]['image_name']); ?>" height="100">
                    <h3><?php echo $zone_floorplan[2]['content_1']; ?></h3>
                    <botton class="f-read btn-border-white" data-toggle="modal" data-target="#myModal2">READ MORE</botton>
                    <div class="line-arah"></div>
                </div>
                
                <div class="maparea-isi empat" id="empat-isi">
                    <img src="<?php echo base_url("assets/images/upload/".$zone_floorplan[3]['image_name']); ?>" height="100">
                    <h3><?php echo $zone_floorplan[3]['content_1']; ?></h3>
                    <botton class="f-read btn-border-white" data-toggle="modal" data-target="#myModal3">READ MORE</botton>
                    <div class="line-arah"></div>
                </div>
            </div>
        </div>

        <?php 
        for($i=0; $i<count($zone_floorplan); $i++){
            $parent = $zone_floorplan[$i]['id'];
            ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body"> <!-- style="max-height: 90%; overflow-y: scroll;" -->

                            <div class="page floor-detail">
                                <div class="row">
                                    <a href="#" class="floor-tab show-floor">FLOORPLAN</a><a href="#" class="floor-tab show-des active">DESCRIPTION</a>

                                    <div class="col-sm-6 image-floor hid">
                                        <div class="container">
                                            <div class="box mod">
                                                <div class="tab-content">
                                                <?php
                                                $j = 1;
                                                $active = "in active";
                                                foreach ($image_floorplan as $key => $imf) {
                                                    if ($j > 1) { $active =""; }
                                                    if ($imf['parent'] == $parent) {
                                                        ?>
                                                        <div role="tabpanel" class="t<?php echo $j. ' tab-pane '. $active; ?>">
                                                            <img src="<?php echo base_url('assets/images/upload/'.$imf['image_name']); ?>" class="img-responsive floor-prev-image" alt="Responsive image">
                                                        </div>                                                    
                                                        <?php
														$j++;
                                                    }
                                                }
                                                ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div> <!-- end col sm -->

                                    <div class="col-sm-6" style="padding: 0px;">
                                        <div class="container" style="">
                                            <div class="box mod">

                                            <div class="floor-desc">

                                                <p  class="txt-space3"><?php echo $zone_floorplan[$i]['content_2']; ?></p>
                                                <h2 class="h2-dinamis spasinull"><?php echo $zone_floorplan[$i]['content_3']; ?> </h2>
                                                <div class="line"></div>
                                                
                                                                      <!-- Tab panes -->
                                                <div class="tab-content f-location">
                                                    <?php
                                                    $j = 1;
                                                    $activea = "in active";
                                                    foreach ($image_floorplan as $key => $imf) {
                                                        if ($j > 1) { $activea =""; }
                                                        if ($imf['parent'] == $parent) {
                                                        ?>
															<div role="tabpanel" class="t<?php echo $j. ' tab-pane '. $activea; ?>">
																<?php echo $imf['content_1']; ?>
															</div>
                                                        <?php
															$j++;
                                                        }
                                                    }
                                                    ?>
                                                    
                                                </div>

                                                <div class="spasi30"></div>
                                            </div>

                                                <ul class="floor-nav">
                                                    <?php
                                                    $j = 1;
                                                    $activeb ="active";
                                                    foreach ($image_floorplan as $key => $imf) {
                                                        if ($j > 1) { $activeb =""; }
                                                        if ($imf['parent'] == $parent) {
                                                            ?>
                                                            <li role="" class="<?php echo $activeb ?>"><a href=".t<?php echo $j; ?>" aria-controls="t<?php echo $j; ?>" role="tab" data-toggle="tab"><img src="<?php echo base_url('assets/images/upload/'.$imf['image_name']); ?>" width="22%" style="-webkit-filter: invert(100%);"></a></li>
                                                            <?php
															$j++;
                                                        }
                                                    }
                                                    ?>
                                                    
                                                </ul>
                                            </div> <!-- end box -->
                                        </div>
                                    </div> <!-- end col sm -->
                                </div> <!-- end row -->

                                <div style="text-align: center;">
                                    <a href="" data-dismiss="modal"><img src="<?php echo base_url('assets/dist/img/btn-back-white.png'); ?>" width="40"></a>
                                    <div class="spasi30"></div>
                                </div>

                            </div> <!-- end page floor detail -->
                        </div> <!-- end modal body -->                           
                    </div> <!-- end modal content -->
                </div>
            </div>
            <?php
        }
        ?>
    </section>

    <section class="page facilities">
        <div id="facCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <?php
                $factive = "active";
                foreach ($facilities as $key => $facility) {
                    if ($key > 0) { $factive = ""; }
                    ?>
                    <div class="item <?php echo $factive; ?>">
                        <div class="fill" style="background-image:url('<?php echo base_url('assets/images/upload/'.$facility['image_name']); ?>');"></div>
                        <div class="carousel-caption">
                            <h2><?php echo $facility['content_1']; ?></h2>
                        </div>
                    </div>
                    <?php
                }
                ?>
                
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#facCarousel" data-slide="prev">
                <span class="fac-control icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#facCarousel" data-slide="next">
                <span class="fac-control icon-next"></span>
            </a>

            <!-- SLICK ===========================  -->
            <div id="show-box-fac" class="active"></div>
            <div id="box-fac-slick" class="show">
                <div class="slider autoplay" style="height:100%">
                    <?php
                    foreach ($facilities as $key => $facility) {
                        ?>
                        <div class="indicator" style="background-image: url('<?php echo base_url('assets/images/upload/'.$facility['image_name']); ?>');" data-target="#facCarousel" data-slide-to="<?php echo $key; ?>"><div class="overlay lima"><div class="caption"><h3 class="h3-dinamis"><p><?php echo $facility['content_1']; ?></p></h3></div></div></div>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>            
        </div>
    </section>

    <section class="page news">
         <div id="newsCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <?php
                $neactive = "active";
                foreach ($newsevents as $key => $ne) {
                    if ($key > 0) { $neactive = ""; }
                    ?>
                    <div class="item <?php echo $neactive; ?>">
                            <div class="fill" style="background-image:url('<?php echo base_url('assets/images/upload/'.$ne['image_name']); ?>');"></div>
                            <div class="carousel-caption">
                                <h2 class="h2-dinamis spasinull"><?php echo $ne['content_1']; ?></h2>
                                <div class="line"></div>
                                <?php echo $ne['content_2']; ?>
                                <div class="spasi30"></div>
                                <a href="<?php echo base_url($bahasa.'newsevents/'.$ne['id']); ?>" class="btn-border-white">READ MORE</a>
                            </div>
                    </div>
                    <?php
                }
                ?>
                
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#newsCarousel" data-slide="prev">
                <span class="news-control icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#newsCarousel" data-slide="next">
                <span class="news-control icon-next"></span>
            </a>

            <!-- SLICK ===========================  -->
            <div id="show-box-news" class="active"></div>
            <div id="box-news-slick" class="show">
                <div class="slider autoplay">
                    <?php
                    foreach ($newsevents as $key => $ne) {
                        ?>
                        <div class="indicator" style="background-image: url('<?php echo base_url('assets/images/upload/'.$ne['image_name']); ?>');" data-target="#newsCarousel" data-slide-to="<?php echo $key; ?>"><div class="overlay lima"><div class="caption"><h3 class="h3-dinamis"><?php echo $ne['content_1']; ?></h3></div></div></div>
                        <?php
                    }

                    $max = 5;
                    $hsl = $max - count($newsevents);
                    if (count($newsevents) < $max) {
                        for ($i=0; $i < $hsl; $i++) { 
                            ?>
                            <div class="indicator" style="background-image: url('<?php echo base_url('assets/images/upload/abu.jpg'); ?>');" data-target="#newsCarousel" data-slide-to="3"><div class="overlay lima"><div class="caption"><h3 class="h3-dinamis"><p>Coming Soon</p></h3></div></div></div>
                            <?php
                        }
                    }
                    ?>
                    <!--
                    <div class="indicator" style="background-image: url('img/news/event1.jpg');" data-target="#newsCarousel" data-slide-to="0"><div class="overlay lima"><div class="caption"><h3>Topping Off Tower One</h3></div></div></div>
                    <div class="indicator" style="background-image: url('img/news/event2.jpg');" data-target="#newsCarousel" data-slide-to="1"><div class="overlay lima"><div class="caption"><h3>Topping Off Tower Two</h3></div></div></div>
                    -->
                </div>
            </div>
         </div>
    </section>

    <section class="page galleries">
        <div id="gallCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <?php
                $gactive = "item active";
                foreach ($gallery as $key => $gal) {
                    if ($key > 0) { $gactive = "item"; }
                    ?>
                        <div class="<?php echo $gactive;?>">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('<?php echo base_url('assets/images/upload/'.$gal['image_name']); ?>');"></div>
                            <div class="carousel-caption">
                                <h2><?php echo $gal['content_1']; ?></h2>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#gallCarousel" data-slide="prev">
                <span class="gall-control icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#gallCarousel" data-slide="next">
                <span class="gall-control icon-next"></span>
            </a>

            <div class="" id="slidetext"></div>

            <!-- SLICK ===========================  -->
            <div id="show-box-gall" class="active"></div>
            <div id="box-gall-slick" class="show">
                <div class="slider autoplay">
                    <?php
                    $gactive = "item active";
                    foreach ($gallery as $key => $gal) {
                        if ($key > 0) { $gactive = "item"; }
                        ?>
                        <div class="indicator" style="background-image: url('<?php echo base_url('assets/images/upload/'.$gal['image_name']); ?>');" data-target="#gallCarousel" data-slide-to="<?php echo $key; ?>"><div class="overlay lima"></div></div>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>

    <section class="page contact">
        <div class="atas" style="background-image: url('<?php echo base_url('assets/images/upload/'.$background_contact[0]['image_name']); ?>'); background-size: cover;">
        </div>
        <div class="bawah">
            <div class="container" style="">
                <div class="row">
                    <a href="#" class="con-tab show-mess">INQUIRY</a><a href="#" class="con-tab show-con active">CONTACT</a>

                    <div class="col-sm-6 message hid">
                        <h2 class="h2-dinamis spasinull">Contact</h2>
                        <form action="" method="POST" name="form_message">
                        <table id="table-message">
                            <tr>
                                <td>NAME</td>
                                <td><input type="text" name="name" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td><input type="email" name="email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>PHONE</td>
                                <td><input type="text" name="phone" class="form-control"></td>
                            </tr>
                            <tr>
                                <td valign="top">MESSAGES</td>
                                <td><textarea name="message" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn-border-black" name="kirim" value="SUBMIT"></td>
                            </tr>
                        </table>
                        </form>
                        <?php
                        echo $error_post;
                        ?>
                    </div>

                    <div class="col-sm-6 contact-det">
                        <div class="box">
                            <div class="line"></div>
                            <div class="row">
                                <?php
                                foreach ($contact as $key => $value) {
                                    ?>
                                    <div class="col-xs-6">

                                        <p class="font-MyriadPro-Bold" style="font-size: 10px;"><?php echo $value['content_1']; ?></p>
                                        <img src="<?php echo base_url('assets/images/upload/'.$value['image_name']); ?>" height="55" style="margin-bottom: 20px;">
                                        <ul>
                                            <li><strong class="MyriadPro-Regular"><?php echo $value['content_2']; ?></strong></li>
                                            <li><?php echo $value['content_3']; ?></li>
                                            <li><strong class="font-MyriadPro-Bold">T</strong> <?php echo $value['content_4']; ?></li>
                                            <li><strong class="font-MyriadPro-Bold">E</strong> <?php echo $value['content_5']; ?></li>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?>
                                <!--
                                <div class="col-xs-6">

                                                        <p class="font-MyriadPro-Bold" style="font-size: 10px;">SOLE EXCLUSIVE AGENT</p>
                                                        <img src="img/by.png" height="55" style="margin-bottom: 20px;">
                                                        <ul>
                                                            <li><strong class="MyriadPro-Regular">Leads Property</strong></li>
                                                            <li>Indonesia Stock Exchange Building Tower 1,26<sup>th</sup> Floor</li>
                                                            <li>Jl. Jend. Sudirman Kav 52-53, Jakarta 12190</li>
                                                            <li><strong class="font-MyriadPro-Bold">T</strong> +62 21 2903 5111</li>
                                                            <li><strong class="font-MyriadPro-Bold">E</strong> info@leads-property.com</li>
                                                      </ul>
                                </div>
                                <div class="col-xs-6">
                                                        <p class="font-MyriadPro-Bold" style="font-size: 10px;">DEVELOPED BY</p>
                                                        <img src="img/logo-text.png" height="55" style="margin-bottom: 20px;">
                                                        <ul>
                                                            <li><strong class="MyriadPro-Regular">PT Telkom Landmark Tower</strong></li>
                                                            <li>Gedung Telkom Landmark Tower, </li>
                                                            <li>Jl. Jend. Gatot Subroto Kav. 52, Jakarta 12710 </li>
                                                            <li><strong class="font-MyriadPro-Bold">T</strong> +62 21 225 33 004</li>
                                                            <li><strong class="font-MyriadPro-Bold">E</strong> marketing@tlt.co.id</li>
                                                      </ul>
                                </div>
                                -->
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer" style="">
            <?php
            foreach ($sosmed as $key => $sm) {
                ?>
                <a href="<?php echo $sm['content_2']; ?>" target="_blank"><img src="<?php echo base_url('assets/images/upload/'.$sm['image_name']); ?>" height="30;"></a>
                <?php
            }
            ?>
            <!-- <img src="assets/dist/img/sosmed.png" width="100;"> -->
            <div style="margin:5px;"></div>
            <p>COPYRIGHT 2016 - MANAGE BY TELKOM LANDMARK TOWER</p>
        </div>
    </section>
</div>