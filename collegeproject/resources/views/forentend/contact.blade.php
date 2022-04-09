@extends('forentend.layout.main')
@section('main-container')
<div class="site-blocks-cover overlay" style="background-image:url({{url('forentend/images/hero_bg_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        

        <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Freight Services</h1>
        <p><a href="bookshiping.php" class="btn btn-primary py-3 px-5 text-white">BOOKSHIPING</a></p>

      </div>
    </div>
  </div>
</div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <form action="{{url('/')}}/contacts" method="POST" class="p-5 bg-white">
             @if(Session::has('sucess'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif
              @csrf
            <h3>GET IN TOUCH!</h3>
            <p>We would love to hear from you.</p>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text"  class="form-control" name="firstname">
                  <div class="text-danger">
                    @error('firstname')
                    {{$message}}
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text"  class="form-control" name="lastname">
                  <div class="text-danger">
                    @error('lastname')
                    {{$message}}
                    @enderror
                </div>
                </div>
                
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email"  class="form-control" name="email">
                  <div class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject"  class="form-control" name="subject">
                  <div class="text-danger">
                    @error('subject')
                    {{$message}}
                    @enderror
                </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." name="message"></textarea>
                  <div class="text-danger">
                    @error('message')
                    {{$message}}
                    @enderror
                </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Koteshor, Kathmandu Nepal</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">9852555271</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">Kathcity15@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
    