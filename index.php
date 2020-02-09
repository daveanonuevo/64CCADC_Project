<?php

    session_start();
    /*session is started if you don't write this line can't use $_Session  global variable*/

?>

<!DOCTYPE html>
<html lang="en">


<div class="site-wrap">

<?php include 'header.php' ?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-7">
                <h1>Shop With Us</h1>
                <p class="mb-5 lead">EXTRA 25% OFF + FREE SHIPPING ON YOUR FIRST PURCHASE!<br/>USE CODE: SEALTHEDEAL</p>
                <div>
                  <a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>
                  <a href="#" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">Club Membership</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Popular Products</h3>
            <h2 class="section-title mb-3">Our Products</h2>
            <p>Keep it smart with trends that are built to elevate your look and extend your fashion repertoire.</p>
          </div>
        </div>

              <div class="row">
                  <a href="/products/women.php">
                  <div class="col-lg-4 col-md-6 mb-5">
                      <div class="product-item">
                          <figure>
                              <img src="/images/model_1_bg.jpg" alt="Image" class="img-fluid">
                          </figure>
                          <div class="px-4">
                              <h3><a href="/products/women.php">Women</a></h3>
                              <div class="mb-3">
                                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                              </div>
                              <p class="mb-4">35% off | Use Code: 123SAVE</p>
                              <div>
                                  <a href="/products/women.php" class="btn btn-black mr-1 rounded-0">Cart</a>
                                  <a href="/products/women.php" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                              </div>
                          </div>
                      </div>
                  </div>
                    </a>

          <a href="/products/men.php">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="/images/model_2_bg.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="/products/men.php">Men</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="/products/men.php" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist active"><a href="/products/men.php" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">New This Week!</p>
                <div>
                  <a href="/products/men.php" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="/products/men.php" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
          </a>
          
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url(images/hero_2.jpg); background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <h2>Get notified on each updates.</h2>
            <div class="d-flex mb-4">
              <input type="text" class="form-control rounded-0" placeholder="Enter your email address">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="Subscribe">
            </div>
            <p>Get notified when there are sales!</p>
          </form>
        </div>

      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Awesome Products</h3>
            <h2 class="section-title mb-3">Featured Products</h2>
            <p>Hot products this season!</p>
          </div>
        </div>
        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="/images/model_1_bg.jpg" alt="Image" class="img-fluid">
            </div>
           
            <div class="col-md-5 ml-auto product-title-wrap">
              <span class="number">01.</span>
              <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
              <p class="mb-4">High Low Wrap Chiffon Midi Dress</p>
              <p>Stretch Fabric</p>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$150.00</del> $69.00</div>
              </div>
              <p>
                <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
              </p>
            </div>
          </div>
        </div>

        <div class="bg-white py-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
              <img src="/images/product_1_bg.jpg" alt="Image" class="img-fluid">
            </div>
           
            <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
              <span class="number">02.</span>
              <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
              <p class="mb-4">Naples Trail Oxford Shoes</p>
              <p>Scarface shoes</p>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$200.00</del> $70.00</div>
              </div>
              <p>
                <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="/images/about_1.jpg" class="img-fluid" alt="Image">
            <div class="experience">
              <span class="year">Trusted Merchant</span>
              <span class="caption">for 50 years</span>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title">Merchant Company</h3>
            <h2 class="section-title mb-3">About Us</h2>
            <p class="mb-4">As Asia's Online Fashion Destination, we create endless possibilities through an ever-expanding range of products from the most casual look to the smartest looks.</p>
            <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Team</h3>
            <h2 class="section-title mb-3">Leadership</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="/images/person_2.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>John Rooster</h3>
              <p class="position text-muted">Co-Founder, President</p>
              <p class="mb-4"></p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="/images/person_3.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Tom Sharp</h3>
              <p class="position text-muted">Co-Founder, COO</p>
              <p class="mb-4"></p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="/images/person_4.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Winston Hodson</h3>
              <p class="position text-muted">Marketing</p>
              <p class="mb-4"></p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url(images/hero_2.jpg); background-attachment: fixed; background-position: top;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h3 class="section-sub-title">Special Promo</h3>
            <h3 class="section-title text-white mb-4">Summer Sale</h3>
            <p class="mb-5 lead"></p>
            
            <div id="date-countdown" class="mb-5"></div>

            <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Our Services</h3>
            <h2 class="section-title mb-3">We Offer Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div>
              <div>
                <h3>Business Consulting</h3>
                <p>Contact our specalists for Business Consulting</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-backspace"></span></div>
              <div>
                <h3>Market Analysis</h3>
                <p>Analyse the market with our professionals</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-av_timer"></span></div>
              <div>
                <h3>User Monitoring</h3>
                <p>Monitor user traffic using our User Monitoring software</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-beenhere"></span></div>
              <div>
                <h3>Seller Consulting</h3>
                <p>Talk to trusted sellers for tips and tricks for selling!</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-business_center"></span></div>
              <div>
                <h3>Financial Investment</h3>
                <p>Meet and talk about investments with out specalists that will guide you through every step</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cloud_done"></span></div>
              <div>
                <h3>Financial Management</h3>
                <p>Manage your finances well with our specalists help!</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">People Says</h3>
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/images/person_3.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>John Smith</strong></p>

              
            </div>
          </div>
          <div>
            <div class="testimonial">
              
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/images/person_2.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>

              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              
              <p class="text-black"><strong>Robert Aguilar</strong></p>
              
              
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/images/person_4.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Roger Spears</strong></p>

              
            </div>
           
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/images/person_1.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Kyle McDonald</strong></p>

              
            </div>

          </div>

        </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Contact Form</h3>
            <h2 class="section-title mb-3">Get In Touch</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
              </div>

  
            </form>
          </div>
        
        </div>
        
      </div>
    </div>
    <?php include 'footer.php' ?>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>