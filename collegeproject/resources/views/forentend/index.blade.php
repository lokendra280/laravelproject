@extends('forentend.layout.main')
@section('main-container')
<div class="site-blocks-cover overlay" style="background-image:url({{url('forentend/images/hero_bg_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        

        <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Freight Services</h1>
        <p><a href="shiping" class="btn btn-primary py-3 px-5 text-white">BOOKSHIPING</a></p>

      </div>
    </div>
  </div>
</div>  
    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-dollarr"></span>
            </div>
            <h2 class="my-4 heading">Best Prices</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Get Free Quote</h2>
            <form method="post">
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Enter Name">
              </div>
              <div class="form-group mb-4">
                <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Get Quote">  
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">24/7 Support</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">What We Offer</h2>
            <p class="color-black-opacity-5">We Offer The Following Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-car"></span></div>
              <div>
                <h3>Delivery Van</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
         


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
              <div>
                <h3>Warehousing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Ground Shipping</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 
    </div>
    
{{-- why chose us --}}
    
<section id="about-us">
  <div class="container">
      <h1 class="title text-center" style="color: #F89D13">Why Choose Us ?</h1>
      <div class="row">
          <div class="col-md-6 about-us">
          <p class="about-title">Why We're Different</p>
          <ul>
              <li>Belive in doing business with honesty</li>
              <li>Belive in doing business with honesty</li>
              <li>Belive in doing business with honesty</li>
              <li>Belive in doing business with honesty</li>
              <li>Belive in doing business with honesty</li>
              <li>Belive in doing business with honesty</li>
          </ul>
          </div>
          <div class="col-md-6">
              <img src="{{url('forentend/images/network.png')}}" class="img-fluid" alt="">
          </div>
      </div>
  </div>
  </section>
{{-- end of why chose us --}}


  {{-- star client section --}}
    
  <section id="testimonial">
    <div class="container">
        <h1 class="title text-center">Why Client Say ?</h1> 
        <div class="row offset-1">
            <div class="col-md-5 testomonials">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima explicabo atque distinctio nam? Quaerat non impedit repudiandae rem accusamus!</p>
                <img src="{{url('forentend/images/user1.jpg')}}" alt="">
                <p class="user-details"><b>Agelina</b><br> Co-founder at xyz</p>
            </div>
            <div class="col-md-5 testomonials">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima explicabo atque distinctio nam? Quaerat non impedit repudiandae rem accusamus!</p>
                <img src="{{url('forentend/images/user2.jpg')}}" alt="">
                <p class="user-details"><b>Lokender</b><br>founder at xyz</p>
            </div>
        </div>
    </div>
</section>
    @endsection