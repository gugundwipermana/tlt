<div class="logo white li-nav" style=""><a href="<?php echo base_url('#1'); ?>" data-index="1"><img src="<?php echo base_url('assets/dist/img/logo-white.png'); ?>" height="45"></a></div>
<div class="logo red li-nav" style=""><a href="<?php echo base_url('#1'); ?>" data-index="1"><img src="<?php echo base_url('assets/dist/img/logo.png'); ?>" height="45"></a></div>
    <div class="menu-right">
        <a href="#" id="show-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
        <a href="#" id="show-lang">

        <?php            
            if ($this->uri->segment(1) == "id") {
                ?>
                ID
                <?php
            }else{
                ?>
                EN
                <?php
            }
            ?>

        <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
        <a href="#" id="show-nav"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
    </div>

    <div class="box-search">
        <?php
        if ($this->uri->segment(1) == "id") {
            $action = "id/search";
        }else{
            $action = "search";
        }
        ?>
        <form action="<?php echo base_url($action); ?>" method="POST">
            <div class="input-group">
                <input type="text" name="key_word" class="form-control" placeholder="SEARCH">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" type="button" value="GO" style="z-index:5">
                </span>
            </div><!-- /input-group -->
        </form>
    </div>

    <div class="box-lang">
        <ul>
           <?php            
            if ($this->uri->segment(1) == "id") {
                ?>
                <li><a href="<?php echo base_url(); ?>">ENGLISH</a></li>
                <li><a href="<?php echo base_url('id'); ?>"><strong class="font-MyriadPro-Bold">INDONESIA</strong></a></li>
                <?php
            }else{
                ?>
                <li><a href="<?php echo base_url(); ?>"><strong class="font-MyriadPro-Bold">ENGLISH</strong></a></li>
                <li><a href="<?php echo base_url('id'); ?>">INDONESIA</a></li>
                <?php
            }
            ?>
        </ul>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top navbar-costum">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!--  <a class="navbar-brand" href="#">Brand</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- 
            <li class="li-nav"><a href="#2" data-index="2">BUILDINGS</a></li>

            <li class="dropdown li-nav">
              <a  href="#2" data-index="2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BUILDINGS <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="awards.html">AWARDS & CERTIFICATION</a></li>
                    <li><a href="building.html">BUILDING SPECIFICATION</a></li>
                    <li><a href="project.html">PROJECT TEAM</a></li>
              </ul>
            </li> 

            <li class="li-nav"><a href="#3" data-index="3">LOCATION</a></li>
            <li class="li-nav"><a href="#4" data-index="4">FLOORPLAN</a></li>
            <li class="li-nav"><a href="#5" data-index="5">FACILITIES</a></li>
            <li class="li-nav"><a href="#6" data-index="6">NEWS & EVENTS</a></li>
            <li class="li-nav"><a href="#7" data-index="7">GALLERY</a></li>
            <li class="li-nav"><a href="#8" data-index="8">CONTACT</a></li>
            -->

            <?php
            $j = 1;
            foreach ($menu as $key => $mn) {
                $j++;
                ?>
                <li class="li-nav"><a href="<?php echo base_url('#'.$j); ?>" data-index="<?php echo $j; ?>"><?php echo $mn['menu_name']; ?></a></li>
                <?php
            }
            ?>
           
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>