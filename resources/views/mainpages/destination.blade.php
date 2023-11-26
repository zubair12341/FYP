@extends('layout.master')
@section('title', 'Destination')
@section('content')

<!-- Inner Banner html start-->
<section class="inner-banner-wrap">
    <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/inner-banner.jpg') }});">
       <div class="container">
          <div class="inner-banner-content">
             <h1 class="inner-title">Destination</h1>
          </div>
       </div>
    </div>
    <div class="inner-shape"></div>
 </section>
 <!-- Inner Banner html end-->
 <!-- destination field html end -->
 <section class="destination-section destination-page">
    <div class="container">
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
          <div class="row">
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
          </div>
       </div>
    </div>
 </section>
 <!-- destination section html start -->
 <!-- subscribe section html start -->
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
