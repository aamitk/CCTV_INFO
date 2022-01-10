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

    	<div class="section-title-page parallax-bg parallax-light">
        <ul class="bg-slideshow">
          <li>
            <div style="background-image:url(assets/media/content/title-page/1.jpg)" class="bg-slide"></div>
          </li>
        </ul>
        <div class="parallax__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="b-title-page">contact us</h1>
                <div class="b-title-page__info">The approved contractor of Automatic services, providing quality security services to many organizations &amp; private companies</div>
                <!-- end b-title-page-->
              </div>
              <div class="col-sm-5">
                <ol class="breadcrumb">
                  <li><a href="home.html">home</a></li>
                  <li class="active">contact us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-contacts">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center">
                <h2 class="ui-title-block ui-title-block_mod-a">Feel free to contact us !</h2>
                <div class="ui-decor-type-1 center-block"></div>
              </div>
            </div>
          </div>
          <div class="row m-50">
            <div class="col-sm-4">
              <div class="b-contacts" style="background: #000;color:#fff;"><i class="b-contacts__icon pe-7s-flag"></i>
                <div class="b-contacts__name color-primary">location</div>
                <div class="b-contacts__contacts">84 Doris Pawley crescent caledon ON</div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-4">
              <div class="b-contacts" style="background: #3d75a5;color:#fff"><i class="b-contacts__icon pe-7s-call"></i>
                <div class="b-contacts__name color-primary">phone</div>
                <div class="b-contacts__contacts">647-781-0043</div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-4">
              <div class="b-contacts" style="background: #000;color:#fff;"><i class="b-contacts__icon pe-7s-mail-open"></i>
                <div class="b-contacts__name color-primary">email</div>
                <div class="b-contacts__contacts">info@skycctv.ca</div>
              </div>
              <!-- end b-contacts-->
            </div>
          </div>
        </div>
      </div>
      <div class="section-default" style="padding-top:0px">
        <div class="container">
          <div class="row">
            <div class="col-md-6 contact-form">
              <form action="contact-process.php" method="post" class="ui-form ui-form-2">
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                    <input type="tel" name="phone" placeholder="Phone" class="form-control">
                    <input type="text" name="subject" placeholder="Subject" class="form-control">
                    <textarea rows="7" name="comment" placeholder="Comments" class="form-control"></textarea>

                    <button type="submit" name="enquiry" class="ui-form__btn btn btn-primary btn-sm btn-effect btn-block">send the message</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11527.446133006306!2d-79.8158159!3d43.7549721!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc80dffd0070c05f8!2sSky%20CCTV%20and%20Security%20alarm!5e0!3m2!1sen!2sin!4v1625568874375!5m2!1sen!2sin" width="600" height="636" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>


    	<?php include 'include/footer.php'; ?>

      </div>
    <!-- end layout-theme-->

    <?php include 'include/scripts.php'; ?>

  </body>
</html>