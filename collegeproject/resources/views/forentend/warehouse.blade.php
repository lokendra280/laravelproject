@extends('forentend.layout.main')
@section('main-container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:url({{url('forentend/images/hero_bg_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Welcome To our WareHouse</h1>
            <p class="breadcrumb-custom"><a href="{{url('/')}}">Home</a> <span class="mx-2">&gt;</span> <span>Registration</span></p>
          </div>
        </div>
      </div>
    </div> 
    <style>
        #services{
    padding: 80px 0;
}
.service-img{
    width: 100px;
    margin-top: 20px;
}
.services{
    padding: 20px;
}
.services h4{
    padding: 5px;
    margin-top: 25px;
    text-transform: uppercase;
}
.title::before{
    content: '';
    background: #7b1798;
    height: 5px;
    width: 200px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    transform: translateY(63px);
}
.title::after{
    content: '';
    background: #7b1798;
    height: 10px;
    width: 50px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 40px;
    display: block;
    transform: translateY(8px);
}
#services .btn-primary{
     box-sizing: none;
     padding: 8px 25px;
     border: none;
     border-radius: 20px;
     background-image: linear-gradient(to right,#a517ba,#5f1782);
}
    </style>
     {{--storage plans  --}}
     <section id="services">
        <div class="container text-center">
        <h1 class="title">Storage Plans</h1>
        <div class="row text-center">
        <div class="col-md-4 services">
            <img src="{{url('forentend/images/s1.png')}}" class="service-img">
            <h4>Box Storage</h4>
            <p>Packing done right with boxes.</p>
        </div>
        <div class="col-md-4 services">
            <img src="{{url('forentend/images/s2.png')}}" class="service-img">
            <h4>Shared Storage</h4>
            <p>Don’t wanna spend much?
                We understand your needs.</p>
        </div>
        <div class="col-md-4 services">
            <img src="{{url('forentend/images/s3.png')}}" class="service-img">
            <h4>Private Storage</h4>
            <p>Privacy is priority, Get your own storage at a little upgrade.</p>
        </div>
        </div>
       <a href="" <button type="button" class="btn btn-primary">Select Storage Plans</button></a>
        </div>
    </section>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
@endsection