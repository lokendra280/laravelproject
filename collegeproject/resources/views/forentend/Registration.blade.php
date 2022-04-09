@extends('forentend.layout.main')
@section('main-container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:url({{url('forentend/images/hero_bg_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    </div>  
    <div class="style" style="background-color: blue">
       {{-- Register form code --}}
     <form action="{{url('/')}}/registration" method="post">
      @if(Session::has('sucess'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf  
      <div class="container">
        <div class="row justify-content-md-center">
           <div class="column col-md-12">
               <div class="card" style="padding:10p">
                   {{-- @include('parital/message') --}}
                  <h1 style="text-align: center">Registration Form</h1>
                   <hr/>
                  <form method="post" action="{{url('/')}}/signin">
                    @csrf
                     <div class="column col-md-12">
                          <div class="form-group">
                            <label for="">First Name</label>
                              <input type="text" class="form-control" id="InputEmail" name="firstname" placeholder="Full your First Name" data-error="Email is required.">
                              <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                      <div class="column col-md-12">
                        <div class="form-group">
                          <label for="">Second Name</label>
                            <input type="text" class="form-control" id="InputEmail" name="lastname" placeholder="Full your Last Name" data-error="Email is required.">
                            <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                        <div class="column col-md-12">
                          <div class="form-group">
                            <label for="">Email</label>
                              <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email"  data-error="Email is required.">
                              <span class="text-danger">@error('email'){{$message}}@enderror</span>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                        <div class="column col-md-12">
                          <div class="form-group">
                            <label for="">Phone Number</label>
                              <input type="number" class="form-control" id="InputEmail" name="phonenumber" placeholder="Enter Your Valid Phone Number"  data-error="Email is required.">
                              <span class="text-danger">@error('phonenumber'){{$message}}@enderror</span>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                        <div class="column col-md-12">
                          <div class="form-group">
                            <label for="">Password</label>
                              <input type="password" class="form-control" id="InputEmail" name="password" placeholder="Password"  data-error="Email is required.">
                              <span class="text-danger">@error('password'){{$message}}@enderror</span>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">Register</button><!-- Send Button -->
                  </form>
               </div>
           </div>
        </div>
    </div>      

           
    

            
             
             
              </div>
            </div>
          </form>

        </div>
     </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
@endsection