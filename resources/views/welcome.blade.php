@extends('layout.master')
@section('title', 'Home')
@section('content')
<section class="home-slider-section">
    <div class="home-slider">
       <div class="home-banner-items">
          <div class="banner-inner-wrap" style="background-image: url({{ asset('assets/images/slider-banner-1.jpg') }});"></div>
             <div class="banner-content-wrap">
                <div class="container">
                   <div class="banner-content text-center">
                      <h2 class="banner-title">TRAVELLING AROUND THE WORLD</h2>
                      <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                      <a href="#" class="button-primary">CONTINUE READING</a>
                   </div>
                </div>
             </div>
          <div class="overlay"></div>
       </div>
       <div class="home-banner-items">
          <div class="banner-inner-wrap" style="background-image: url({{ asset('assets/images/slider-banner-2.jpg') }});"></div>
             <div class="banner-content-wrap">
                <div class="container">
                   <div class="banner-content text-center">
                      <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                      <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                      <a href="#" class="button-primary">CONTINUE READING</a>
                   </div>
                </div>
             </div>
          <div class="overlay"></div>
       </div>
    </div>
 </section>
 <!-- slider html start -->
 <!-- Home search field html start -->
 <div class="trip-search-section shape-search-section">
    <div class="slider-shape"></div>
    <div class="container">
       <div class="trip-search-inner white-bg d-flex">
          <div class="input-group">
             <label> Search Destination* </label>
             <input type="text" name="s" placeholder="Enter Destination">
          </div>
          <div class="input-group">
             <label> Pax Number* </label>
             <input type="text" name="s" placeholder="No.of People">
          </div>
          <div class="input-group width-col-3">
             <label> Checkin Date* </label>
             <i class="far fa-calendar"></i>
             <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
          </div>
          <div class="input-group width-col-3">
             <label> Checkout Date* </label>
             <i class="far fa-calendar"></i>
             <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
          </div>
          <div class="input-group width-col-3">
             <label class="screen-reader-text"> Search </label>
             <input type="submit" name="travel-search" value="INQUIRE NOW">
          </div>
       </div>
    </div>
 </div>
 <!-- search search field html end -->
 <section class="destination-section">
    <div class="container">
       <div class="section-heading">
          <div class="row align-items-end">
             <div class="col-lg-7">
                <h5 class="dash-style">POPULAR DESTINATION</h5>
                <h2>TOP NOTCH DESTINATION</h2>
             </div>
             <div class="col-lg-5">
                <div class="section-disc">
                    Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Aut nostrum, ornare quas provident laoreet nesciunt.
                </div>
             </div>
          </div>
       </div>
       <div class="destination-inner destination-three-column">
          <div class="row">
             <div class="col-lg-7">
                <div class="row">
                   <div class="col-sm-6">
                      <div class="desti-item overlay-desti-item">
                         <figure class="desti-image">
                            <img src="{{ asset('assets/images/img1.jpg') }}" alt="">
                         </figure>
                         <div class="meta-cat bg-meta-cat">
                            <a href="#">THAILAND</a>
                         </div>
                         <div class="desti-content">
                            <h3>
                               <a href="#">Disney Land</a>
                            </h3>
                            <div class="rating-start" title="Rated 5 out of 4">
                               <span style="width: 53%"></span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="desti-item overlay-desti-item">
                         <figure class="desti-image">
                            <img src="{{ asset('assets/images/img2.jpg') }}" alt="">
                         </figure>
                         <div class="meta-cat bg-meta-cat">
                            <a href="#">NORWAY</a>
                         </div>
                         <div class="desti-content">
                            <h3>
                               <a href="#">Besseggen Ridge</a>
                            </h3>
                            <div class="rating-start" title="Rated 5 out of 5">
                               <span style="width: 100%"></span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-5">
                <div class="row">
                   <div class="col-md-6 col-xl-12">
                      <div class="desti-item overlay-desti-item">
                         <figure class="desti-image">
                            <img src="{{ asset('assets/images/img3.jpg') }}" alt="">
                         </figure>
                         <div class="meta-cat bg-meta-cat">
                            <a href="#">NEW ZEALAND</a>
                         </div>
                         <div class="desti-content">
                            <h3>
                               <a href="#">Oxolotan City</a>
                            </h3>
                            <div class="rating-start" title="Rated 5 out of 5">
                               <span style="width: 100%"></span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-6 col-xl-12">
                      <div class="desti-item overlay-desti-item">
                         <figure class="desti-image">
                            <img src="{{ asset('assets/images/img4.jpg') }}" alt="">
                         </figure>
                         <div class="meta-cat bg-meta-cat">
                            <a href="#">SINGAPORE</a>
                         </div>
                         <div class="desti-content">
                            <h3>
                               <a href="#">Marina Bay Sand City</a>
                            </h3>
                            <div class="rating-start" title="Rated 5 out of 4">
                               <span style="width: 60%"></span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="btn-wrap text-center">
             <a href="#" class="button-primary">MORE DESTINATION</a>
          </div>
       </div>
    </div>
 </section>
 <!-- Home packages section html start -->
 <section class="package-section">
    <div class="container">
       <div class="section-heading text-center">
          <div class="row">
             <div class="col-lg-8 offset-lg-2">
                <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                <h2>POPULAR PACKAGES</h2>
                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
             </div>
          </div>
       </div>
       <div class="package-inner">
          <div class="row">
             <div class="col-lg-4 col-md-6">
                <div class="package-wrap">
                   <figure class="feature-image">
                      <a href="#">
                         <img src="{{ asset('assets/images/img5.jpg') }}" alt="">
                      </a>
                   </figure>
                   <div class="package-price">
                      <h6>
                         <span>$1,900 </span> / per person
                      </h6>
                   </div>
                   <div class="package-content-wrap">
                      <div class="package-meta text-center">
                         <ul>
                            <li>
                               <i class="far fa-clock"></i>
                               7D/6N
                            </li>
                            <li>
                               <i class="fas fa-user-friends"></i>
                               People: 5
                            </li>
                            <li>
                               <i class="fas fa-map-marker-alt"></i>
                               Malaysia
                            </li>
                         </ul>
                      </div>
                      <div class="package-content">
                         <h3>
                            <a href="#">Sunset view of beautiful lakeside resident</a>
                         </h3>
                         <div class="review-area">
                            <span class="review-text">(25 reviews)</span>
                            <div class="rating-start" title="Rated 5 out of 5">
                               <span style="width: 60%"></span>
                            </div>
                         </div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                         <div class="btn-wrap">
                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="package-wrap">
                   <figure class="feature-image">
                      <a href="#">
                         <img src="{{ asset('assets/images/img6.jpg') }}" alt="">
                      </a>
                   </figure>
                   <div class="package-price">
                      <h6>
                         <span>$1,230 </span> / per person
                      </h6>
                   </div>
                   <div class="package-content-wrap">
                      <div class="package-meta text-center">
                         <ul>
                            <li>
                               <i class="far fa-clock"></i>
                               5D/4N
                            </li>
                            <li>
                               <i class="fas fa-user-friends"></i>
                               People: 8
                            </li>
                            <li>
                               <i class="fas fa-map-marker-alt"></i>
                               Canada
                            </li>
                         </ul>
                      </div>
                      <div class="package-content">
                         <h3>
                            <a href="#">Experience the natural beauty of island</a>
                         </h3>
                         <div class="review-area">
                            <span class="review-text">(17 reviews)</span>
                            <div class="rating-start" title="Rated 5 out of 5">
                               <span style="width: 100%"></span>
                            </div>
                         </div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                         <div class="btn-wrap">
                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="package-wrap">
                   <figure class="feature-image">
                      <a href="#">
                         <img src="{{ asset('assets/images/img7.jpg') }}" alt="">
                      </a>
                   </figure>
                   <div class="package-price">
                      <h6>
                         <span>$2,000 </span> / per person
                      </h6>
                   </div>
                   <div class="package-content-wrap">
                      <div class="package-meta text-center">
                         <ul>
                            <li>
                               <i class="far fa-clock"></i>
                               6D/5N
                            </li>
                            <li>
                               <i class="fas fa-user-friends"></i>
                               People: 6
                            </li>
                            <li>
                               <i class="fas fa-map-marker-alt"></i>
                               Portugal
                            </li>
                         </ul>
                      </div>
                      <div class="package-content">
                         <h3>
                            <a href="#">Vacation to the water city of Portugal</a>
                         </h3>
                         <div class="review-area">
                            <span class="review-text">(22 reviews)</span>
                            <div class="rating-start" title="Rated 5 out of 5">
                               <span style="width: 80%"></span>
                            </div>
                         </div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                         <div class="btn-wrap">
                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="btn-wrap text-center">
             <a href="#" class="button-primary">VIEW ALL PACKAGES</a>
          </div>
       </div>
    </div>
 </section>
 <!-- packages html end -->
 <!-- Home callback section html start -->
 <section class="callback-section">
    <div class="container">
       <div class="row no-gutters align-items-center">
          <div class="col-lg-5">
            <div class="callback-img" style="background-image: url({{ asset('assets/images/img8.jpg') }});">

                <div class="video-button">
                   <a id="video-container" data-video-id="IUN664s7N-c">
                      <i class="fas fa-play"></i>
                   </a>
                </div>
             </div>
          </div>
          <div class="col-lg-7">
             <div class="callback-inner">
                <div class="section-heading section-heading-white">
                   <h5 class="dash-style">CALLBACK FOR MORE</h5>
                   <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.</p>
                </div>
                <div class="callback-counter-wrap">
                   <div class="counter-item">
                      <div class="counter-icon">
                        <img src="{{ asset('assets/images/icon1.png') }}" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">500</span>K+
                         </span>
                         <span class="counter-text">
                            Satisfied Clients
                         </span>
                      </div>
                   </div>
                   <div class="counter-item">
                      <div class="counter-icon">
                        <img src="{{ asset('assets/images/icon2.png') }}" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">250</span>K+
                         </span>
                         <span class="counter-text">
                            Satisfied Clients
                         </span>
                      </div>
                   </div>
                   <div class="counter-item">
                      <div class="counter-icon">
                        <img src="{{ asset('assets/images/icon3.png') }}" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">15</span>K+
                         </span>
                         <span class="counter-text">
                            Satisfied Clients
                         </span>
                      </div>
                   </div>
                   <div class="counter-item">
                      <div class="counter-icon">
                        <img src="{{ asset('assets/images/icon4.png') }}" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">10</span>K+
                         </span>
                         <span class="counter-text">
                            Satisfied Clients
                         </span>
                      </div>
                   </div>
                </div>
                <div class="support-area">
                   <div class="support-icon">
                      <img src="{{ asset('assets/images/icon5.png') }}" alt="">
                   </div>
                   <div class="support-content">
                      <h4>Our 24/7 Emergency Phone Services</h4>
                      <h3>
                         <a href="#">Call: 123-456-7890</a>
                      </h3>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- callback html end -->
 <!-- Home activity section html start -->
 <section class="activity-section">
    <div class="container">
       <div class="section-heading text-center">
          <div class="row">
             <div class="col-lg-8 offset-lg-2">
                <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                <h2>ADVENTURE & ACTIVITY</h2>
                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
             </div>
          </div>
       </div>
       <div class="activity-inner row">
          <div class="col-lg-2 col-md-4 col-sm-6">
             <div class="activity-item">
                <div class="activity-icon">
                   <a href="#">
                      <img src="{{ asset('assets/images/icon6.png') }}" alt="">
                   </a>
                </div>
                <div class="activity-content">
                   <h4>
                      <a href="#">Adventure</a>
                   </h4>
                   <p>15 Destination</p>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
             <div class="activity-item">
                <div class="activity-icon">
                   <a href="#">
                      <img src="{{ asset('assets/images/icon10.png') }}" alt="">
                   </a>
                </div>
                <div class="activity-content">
                   <h4>
                      <a href="#">Trekking</a>
                   </h4>
                   <p>12 Destination</p>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
             <div class="activity-item">
                <div class="activity-icon">
                   <a href="#">
                      <img src="{{ asset('assets/images/icon9.png') }}" alt="">
                   </a>
                </div>
                <div class="activity-content">
                   <h4>
                      <a href="#">Camp Fire</a>
                   </h4>
                   <p>7 Destination</p>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
             <div class="activity-item">
                <div class="activity-icon">
                   <a href="#">
                      <img src="{{ asset('assets/images/icon8.png') }}" alt="">
                   </a>
                </div>
                <div class="activity-content">
                   <h4>
                      <a href="#">Off Road</a>
                   </h4>
                   <p>15 Destination</p>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
             <div class="activity-item">
                <div class="activity-icon">
                   <a href="#">
                      <img src="{{ asset('assets/images/icon7.png') }}" alt="">
                   </a>
                </div>
                <div class="activity-content">
                   <h4>
                      <a href="#">Camping</a>
                   </h4>
                   <p>13 Destination</p>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
             <div class="activity-item">
                <div class="activity-icon">
                   <a href="#">
                      <img src="{{ asset('assets/images/icon11.png') }}" alt="">
                   </a>
                </div>
                <div class="activity-content">
                   <h4>
                      <a href="#">Exploring</a>
                   </h4>
                   <p>25 Destination</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- activity html end -->
 <!-- Home special section html start -->
 <section class="special-section">
    <div class="container">
       <div class="section-heading text-center">
          <div class="row">
             <div class="col-lg-8 offset-lg-2">
                <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                <h2>SPECIAL TRAVEL OFFER</h2>
                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
             </div>
          </div>
       </div>
       <div class="special-inner">
          <div class="row">
             <div class="col-md-6 col-lg-4">
                <div class="special-item">
                   <figure class="special-img">
                      <img src="{{ asset('assets/images/img9.jpg') }}" alt="">
                   </figure>
                   <div class="badge-dis">
                      <span>
                         <strong>20%</strong>
                         off
                      </span>
                   </div>
                   <div class="special-content">
                      <div class="meta-cat">
                         <a href="#">CANADA</a>
                      </div>
                      <h3>
                         <a href="#">Experience the natural beauty of glacier</a>
                      </h3>
                      <div class="package-price">
                         Price:
                         <del>$1500</del>
                         <ins>$1200</ins>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-4">
                <div class="special-item">
                   <figure class="special-img">
                      <img src="{{ asset('assets/images/img10.jpg') }}" alt="">
                   </figure>
                   <div class="badge-dis">
                      <span>
                         <strong>15%</strong>
                         off
                      </span>
                   </div>
                   <div class="special-content">
                      <div class="meta-cat">
                         <a href="#">NEW ZEALAND</a>
                      </div>
                      <h3>
                         <a href="#">Trekking to the mountain camp site</a>
                      </h3>
                      <div class="package-price">
                         Price:
                         <del>$1300</del>
                         <ins>$1105</ins>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-4">
                <div class="special-item">
                   <figure class="special-img">
                      <img src="{{ asset('assets/images/img11.jpg') }}" alt="">
                   </figure>
                   <div class="badge-dis">
                      <span>
                         <strong>15%</strong>
                         off
                      </span>
                   </div>
                   <div class="special-content">
                      <div class="meta-cat">
                         <a href="#">MALAYSIA</a>
                      </div>
                      <h3>
                         <a href="#">Sunset view of beautiful lakeside city</a>
                      </h3>
                      <div class="package-price">
                         Price:
                         <del>$1800</del>
                         <ins>$1476</ins>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- special html end -->
 <!-- Home special section html start -->
 <section class="best-section">
    <div class="container">
       <div class="row">
          <div class="col-lg-5">
             <div class="section-heading">
                <h5 class="dash-style">OUR TOUR GALLERY</h5>
                <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p>
             </div>
             <figure class="gallery-img">
                <img src="{{ asset('assets/images/img12.jpg') }}" alt="">
             </figure>
          </div>
          <div class="col-lg-7">
             <div class="row">
                <div class="col-sm-6">
                   <figure class="gallery-img">
                      <img src="{{ asset('assets/images/img13.jpg') }}" alt="">
                   </figure>
                </div>
                <div class="col-sm-6">
                   <figure class="gallery-img">
                      <img src="{{ asset('assets/images/img14.jpg') }}" alt="">
                   </figure>
                </div>
             </div>
             <div class="row">
                <div class="col-12">
                   <figure class="gallery-img">
                      <img src="{{ asset('assets/images/img15.jpg') }}" alt="">
                   </figure>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- best html end -->
 <!-- Home client section html start -->
 <div class="client-section">
    <div class="container">
       <div class="client-wrap client-slider secondary-bg">
          <div class="client-item">
             <figure>
                <img src="{{ asset('assets/images/logo1.png') }}" alt="">
             </figure>
          </div>
          <div class="client-item">
             <figure>
                <img src="{{ asset('assets/images/logo2.png') }}" alt="">
             </figure>
          </div>
          <div class="client-item">
             <figure>
                <img src="{{ asset('assets/images/logo3.png') }}" alt="">
             </figure>
          </div>
          <div class="client-item">
             <figure>
                <img src="{{ asset('assets/images/logo4.png') }}" alt="">
             </figure>
          </div>
          <div class="client-item">
             <figure>
                <img src="{{ asset('assets/images/logo5.png') }}" alt="">
             </figure>
          </div>
          <div class="client-item">
             <figure>
                <img src="{{ asset('assets/images/logo2.png') }}" alt="">
             </figure>
          </div>
       </div>
    </div>
 </div>
 <!-- client html end -->
 <!-- Home subscribe section html start -->
 <section class="subscribe-section" style="background-image: url({{ asset('assets/images/img16.jpg') }});">
    <div class="container">
       <div class="row">
          <div class="col-lg-7">
             <div class="section-heading section-heading-white">
                <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                <div class="newsletter-form">
                   <form>
                      <input type="email" name="s" placeholder="Your Email Address">
                      <input type="submit" name="signup" value="SIGN UP NOW!">
                   </form>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p>
             </div>
          </div>
       </div>
    </div>
 </section>

 @endsection
