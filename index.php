<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

  	<?php include 'include/links.php' ?>

  </head>
  <body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    
    <div data-header="sticky" data-header-top="200" class="l-theme animated-css">

    	<?php include 'include/navbar2.php'; ?>
    	
    <div id="main-slider" data-slider-width="100%" data-slider-height="700px" data-slider-arrows="true" class="main-slider main-slider_mod-a slider-pro">
        <div class="sp-slides">
          <!-- Slide 1-->
          <div class="sp-slide"><img src="assets/media/components/b-main-slider/banner1.png" width="100%" alt="slider" class="sp-image"/>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-sm-offset-1">
                  <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__title sp-layer">residential, business & event security services</h2>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__info sp-layer">We are approved contractor of Security Guard services, providing quality security services to many organizations & private companies</div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer"><a href="https://www.skycctv.ca/security-cameras" class="main-slider__btn btn btn-primary btn-sm btn-effect">view services</a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2-->
          <div class="sp-slide"><img src="assets/media/components/b-main-slider/banner2.png" width="100%" alt="slider" class="sp-image"/>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-sm-offset-1">
                  <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__title sp-layer">residential, business & event security services</h2>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__info sp-layer">We are approved contractor of Security Guard services, providing quality security services to many organizations & private companies</div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer"><a href="https://www.skycctv.ca/access-control" class="main-slider__btn btn btn-primary btn-sm btn-effect">view services</a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3-->
          <div class="sp-slide"><img src="assets/media/components/b-main-slider/banner3.png" width="100%" alt="slider" class="sp-image"/>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-sm-offset-1">
                  <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__title sp-layer">residential, business & event security services</h2>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__info sp-layer">We are approved contractor of Security Guard services, providing quality security services to many organizations & private companies</div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer"><a href="https://www.skycctv.ca/access-control" class="main-slider__btn btn btn-primary btn-sm btn-effect">view services</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end main-slider-->
      
      <div class="section-default wow">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center">
                <h2 class="ui-title-block">Latest Products</h2>
                <div class="ui-subtitle-block">Cameras and Dvr Nvr alarm system</div>
                <div class="ui-decor-type-1 center-block"></div>
              </div>
              <div data-min480="1" data-min768="2" data-min992="3" data-min1200="4" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                
                
                <?php
                    include("include/config.php");
    
                    $cat = "SELECT * FROM `latest_products` ORDER BY id DESC";
                    $result = mysqli_query($con,$cat);
                    $co = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <article class="b-post b-post-5 clearfix">
                  <div class="entry-media" style="height:220px;">
                      <a href="<?='data:image/png;base64,'.base64_encode($row['la_pro_image'])?>" class="js-zoom-images">
                          <?= '<img src="data:image/png;base64,'.base64_encode($row['la_pro_image']).'" class="img-responsive" alt="Responsive image" />' ?>
                      </a>
                  </div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <!--<div class="b-advantages-2__name" style="text-align: center;"><?=$row['la_pro_name']?></div>-->
                      <div class="b-advantages-4__text">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm btn-effect" style="margin-top: 0">Get a Quote</a>
                      </div>
                    </div>
                  </div>
                </article>
                <!-- end post-->
                
                <?PHP $co++; } ?>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-type-e wow" style="background:#5aaff7;">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <section class="b-type-b b-type-b_mod-a">
                <div class="b-type-b__media">
                  <div class="b-type-b__media-title" style="color:#000;">Watch the tour</div>
                  <div class="b-video">
                    <img src="assets/media/cctv54.png" alt="Foto" class="img-responsive"/>
                  </div>
                  <!-- end b-video-->
                </div>
                <div class="b-type-b__inner">
                  <h2 class="b-type-b__title ui-title-inner-1">Welcome to Sky CCTV<span class="br"> We are here to assist you, anywhere anytime!</span></h2>
                  <div class="b-type-b__text" style="color:#fff;">
                    <p>Sky CCTV integrate the next-gen security and home automation technology and enables individuals and enterprises to connect and manage their homes and workplace through their PC or even smartphone, no matter how complex your requirements are.</p>
                    <p>Sky CCTV is a one-stop shop to cater to the growing security needs for residential, industrial, and commercial purposes while offering a comprehensive set of next-gen security solutions.</p>
                  </div>
                </div>
              </section>
              <!-- end b-type-b-->
              
            </div>
          </div>
        </div>
      </div>

      <div class="section-default section_border-bottom wow">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center">
                <h2 class="ui-title-block">Featured Products</h2>
                <div class="ui-subtitle-block">Cameras and Dvr Nvr alarm system</div>
                <div class="ui-decor-type-1 center-block"></div>
              </div>
              <ul class="b-advantages-2">
                
                <?php
                    include("include/config.php");
    
                    $cat = "SELECT * FROM `featured_products` ORDER BY id DESC";
                    $result = mysqli_query($con,$cat);
                    $co = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  
                <li class="b-advantages-2__item">
                  <div class="b-advantages-2__inner">
                    <div class="b-advantages-4__image">
                        <?= '<img src="data:image/png;base64,'.base64_encode($row['fe_pro_image']).'" class="img-fluid" alt="Responsive image" />' ?>
                    </div>
                    <div class="b-advantages-2__name" style="text-align: center;"><?=$row['fe_pro_name']?></div>
                    <div class="b-advantages-4__text">
                    	<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm btn-effect" style="margin-top: 0">Get a Quote</a>
                    </div>
                  </div>
                </li>
                
                <?PHP $co++; } ?>

              </ul>
              <!-- end b-advantages-2-->
            </div>
          </div>
        </div>
      </div>

      <div class="row row-no-mrg wow">
        <div class="col-sm-6 col-no-pdg">
          <div>
          	<img src="assets/media/cctv55.png" class="img-responsive">
          </div>
          <!-- end b-container-without-1-->
        </div>
        <div class="col-sm-6 col-no-pdg">
          <div class="b-container-without-1 b-container-without-1_mod-b border-2-colors bg-secondary" style="padding-top:160px;padding-bottom:160px;">
            <h2 class="b-container-without-1__title" style="font-size:25px;">Our Global Customers</h2>
            <div class="b-container-without-1__text">
              <p style="font-size:18px;">Sky CCTV is popular and a perceived name in the industry for conveying top-class security frameworks. It’s been over a decade that people and organizations depend on our administrations and endow on the items we convey globally.</p>
            </div>
            <h2 class="b-container-without-1__title" style="padding-top: 20px;font-size:25px;">Industry Experience</h2>
            <div class="b-container-without-1__text">
              <p style="font-size:18px;">Holding longer than a time of involvement with the mechanization security industry, we have effectively provided great security solutions to all-sized enterprises.</p>
            </div>
            </div>
          </div>
          <!-- end b-container-without-1-->
        </div>
      </div>

      <?php include 'include/footer.php'; ?>

      </div>
    <!-- end layout-theme-->

    <?php include 'include/scripts.php'; ?>

  </body>
</html>