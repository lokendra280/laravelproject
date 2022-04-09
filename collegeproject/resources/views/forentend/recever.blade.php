<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="{{url('/')}}/receiver" method="POST">
    @csrf 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Receiver Information</h4>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <form action="">
                <div class="form-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="from_name">Name</label>
                        <input type="text" id="from_name" name="name" class="form-control" wire:mode.defer="from_name">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="from_name">Company Name</label>
                        <input type="text" id="from_name" name="companyname" class="form-control" wire:mode.defer="from_name">
                        <span class="text-danger">@error('companyname'){{$message}}@enderror</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="from_name">City</label>
                       <select id="to_city" class="form-control" name="city" wire:model.lazy="to_city" id="">
                       <option value="">-- Select City --</option> 
                       <option value="Sukhet">Sukhet</option>   
                       <option value="Baitadi">Baitadi</option>                    
                       <option value="Banepa">Banepa</option> 
                       <option value="Bardibas">Bardibas</option> 
                       <option value="Beni">Beni</option> 
                       <option value="Butwal">Butwal</option> 
                       <option value="Nepalgunj">Nepalgunj</option> 
                       <option value="Dang">Dang</option> 
                       <option value="Pokhara">Pokhara</option> 
                       <option value="walling">walling</option> 
                       <option value="palpa">palpa</option> 
                       </select>
                      </div>
                    </div>
                    <span class="text-danger">@error('city'){{$message}}@enderror</span>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="to_street">Street</label>
                        <input type="text" id="from_name" name="street" class="form-control" wire:mode.defer="from_name">
                        <span class="text-danger">@error('street'){{$message}}@enderror</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                    <label for="to_postal_code">postal code</label>
                    <input type="text" id="to_postal_code" name="postalcode" class="form-control" wire:mode.defer="from_name">
                    <span class="text-danger">@error('postalcode'){{$message}}@enderror</span>  
                  </div>
                </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="from_name">Email</label>
                        <input type="email" id="from_name" name="email" class="form-control" wire:mode.defer="from_email">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="to_country code">Country code</label>
                        <input type="tel" name="tel" disabled wire:model="to_country_code id="to_countryCode" class="form-control" wire:mode.defer="from_name">
                        
                      </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                    <label for="to_postal_code">Contact Number</label>
                    <input type="number" id="to_contact_number" name="phonenumber" class="form-control" wire:mode.defer="from_name">
                    <span class="text-danger">@error('phonenumber'){{$message}}@enderror</span>  
                  </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <input class="btn btn-primary" type="submit" value="Submit">
    </form>