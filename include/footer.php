    <footer class="footer wow footer_mod-a">
        <div class="footer__main footer__main_mod-a parallax-bg parallax-dark">
          <ul class="bg-slideshow">
            <li>
              <div style="background-image:url(assets/media/components/footer/bg.jpg)" class="bg-slide"></div>
            </li>
          </ul>
          <div class="parallax__inner">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <h3 class="footer-section__title">About SKYCCTV</h3>
                  <div class="footer-form__info">
                    <p>Sky CCTV gives something beyond security, we convey genuine feelings of serenity and certainty over the residential, business, and open segments. We’re focused on conveying the best client support through the most excellent staff – all our group are highly qualified and certified.</p>
                  </div>
                  <!-- end social-list-->
                </div>
                <div class="col-md-2">
                  <section>
                    <h3 class="footer-section__title">Quick Links</h3>
                    <ul class="footer-section__list list list-mark-4">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-md-2">
                  <section>
                    <h3 class="footer-section__title">our services</h3>
                    <ul class="footer-section__list list list-mark-4">
                      <li><a href="#">Security Cameras</a></li>
                      <li><a href="#">Security Alarm</a></li>
                      <li><a href="#">Access Control</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-sm-3">
                  <section>
                    <h3 class="footer-section__title">contact details</h3>
                    <div class="footer-social-net">
                      <div class="footer__contact footer__contact_lg">P: 647-781-0043</div>
                      <div class="footer__contact">E: info@skycctv.ca</div>
                      <div class="footer__contact">84 Doris Pawley crescent caledon ON</div>
                    </div>
                  </section>
                </div>
                <div class="col-md-12">
                    <div class="footer-social-icons">
                        <h3 class="footer-section__title" style="margin-bottom:0px;font-size:24px">Follow us</h3>
                        <ul class="social-net list-inline" style="text-align:center">
                            <li class="social-net__item"><a href="https://mobile.twitter.com/skycctv" class="social-net__link" target="_blank"><i class="icon fab fa-twitter-square" style="font-size: 40px;"></i></a></li>
                            <li class="social-net__item"><a href="https://m.facebook.com/skycctv20" class="social-net__link" target="_blank"><i class="icon fab fa-facebook-square" style="font-size: 40px;"></i></a></li>
                            <li class="social-net__item"><a href="https://www.instagram.com/skycctv_home_security/" class="social-net__link" target="_blank"><i class="icon fab fa-instagram" style="font-size: 40px;"></i></a></li>
                            <li class="social-net__item"><a href="https://www.linkedin.com/in/sky-cctv-and-security-alarm-b94262211" class="social-net__link"><i class="icon fab fa-linkedin" target="_blank" style="font-size: 40px;"></i></a></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">Copyrights 2021<a href="index.php" class="copyright__link"> SKYCCTV</a> All rights reserved. Designed and Developed by <a href="https://macrotechplanet.com/" target="_blank">Macrotech Planet</a></div>
            </div>
          </div>
        </div>
      </footer>
      
        <!--===== #WIDGET =====--> 

        <div class="side-widgets">
          <a href="tel:647-781-0043" class="side-widgets-content"><i class="fa fa-phone"></i></a>
          <a href="mailto:info@skycctv.ca" class="side-widgets-content"><i class="fa fa-envelope"></i></a>
        </div>
        
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ask a quote</h5>
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>-->
              </div>
              <div class="modal-body">
                <form class="enquiry-form" action="process.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="name" placeholder="Full Name" class="form-control"/>
                    </div>
                    <div class="col-sm-6">
                      <input type="email" name="email" placeholder="Email" class="form-control"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="tel" name="phone" placeholder="Phone" class="form-control"/>
                    </div>
                    <div class="col-sm-6">
                      <select name="services" id="cars" class="form-control">
                        <option value="">select your service</option>
                        <option value="Security Cameras">Security Cameras</option>
                        <option value="Security Alarm">Security Alarm</option>
                        <option value="Access Control">Access Control</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="location" placeholder="Service Location (City, State, Zip Code)" class="form-control"/>
                      <textarea rows="4" name="description" placeholder="Description of Service(s) Needed , Which Day / Date etc..." class="form-control"></textarea>
                    </div>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submitEnquiry">Submit request</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        