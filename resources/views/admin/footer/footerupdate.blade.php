@extends('admin.layout.app')
@section('maindashboard')
<div class="content-wrapper">
   <div class="container-full">
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="me-auto">
               <h4 class="page-title">Footer Details Update</h4>
            </div>
            @if(session('success'))
                <span class="alert alert-danger">{{session('success')}}</span>
           @endif
         </div>
      </div>
      <section class="content">
         <div class="row">
            <div class="col-lg-6">
               <div class="card">
                  <div class="card-body">
                     <h4 class="header-title">Input Types</h4>
                     <form method="POST" action="{{url('footerdetailspost',$footerdetails->id)}}" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="mb-3">
                           <label for="happycust" class="form-label">Contact Number</label>
                           <input type="text" name="mobile" class="form-control" id="phoneNumber" oninput="validatePhoneNumber()"  value="{{$footerdetails->mobile}}" placeholder="Contact Number" >
                           <div id="phoneError" class="error text-danger"></div>
                           @if($errors->has('mobile'))
                           <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                             @endif
                        </div>
                        <div class="mb-3">
                           <label for="happycust" class="form-label">Email </label>
                           <input type="email" name="email" class="form-control" value="{{$footerdetails->email}}"  placeholder="Enter Email" >
                           
                           @if($errors->has('email'))
                           <div class="error text-danger">{{ $errors->first('email') }}</div>
                             @endif
                        </div>
                        <div class="mb-3">
                            <label for="happycust" class="form-label">Address</label>
                            <textarea type="text" name="address" class="form-control"  placeholder="Enter Address" >{{$footerdetails->address}}</textarea>
                           
                            @if($errors->has('address'))
                            <div class="error text-danger">{{ $errors->first('address') }}</div>
                              @endif
                         </div>
                         <div class="mb-3">
                            <label for="happycust" class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" value="{{$footerdetails->location}}"  placeholder="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7609.976471869212!2d78.499623!3d17." >
                          
                            @if($errors->has('location'))
                            <div class="error text-danger">{{ $errors->first('location') }}</div>
                              @endif
                         </div>
                         <div class="mb-3">
                            <label for="happycust" class="form-label">About Details</label>
                            <textarea type="text" name="about" class="form-control"   placeholder="Enter About Details" >{{$footerdetails->about}}</textarea>
                           
                            @if($errors->has('about'))
                            <div class="error text-danger">{{ $errors->first('about') }}</div>
                              @endif
                         </div>
                        <!-- Add similar markup for other input fields -->
                        <div class="mb-3">
                        <label for="example-email" class="form-label">Logo  Image</label>
                        <input type="file" id="fileInput"   name="logo"  class="form-control"  placeholder="Servicing Cities">
                        <img src="{{asset('website/logo/'.$footerdetails->logo)}}" style="width:50px;height:50px;"><br>
                        <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-1MB,Min_Dim-300X300,Max_Dim-1600X1600)</span>

                        <span id="message" class="text-danger"></span>
                        @if($errors->has('logo'))
                        <div class="error text-danger">{{ $errors->first('logo') }}
                        </div>
                          @endif
                     </div>
                        <!-- Add similar markup for other input fields -->
                        <div class="mb-3">
                           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>

<script>
  
   function validatePhoneNumber() {
    var phoneNumber = document.getElementById('phoneNumber').value;
    var phoneError = document.getElementById('phoneError');

    // Check if the input is a number
    if (isNaN(phoneNumber)) {
        phoneError.textContent = "Please enter numbers only.";
        return;
    }

   // Check if the input length is between 10 and 12
    if (phoneNumber.length < 10 || phoneNumber.length > 12) {
        phoneError.textContent = "Phone number should be between 10 and 12 digits.";
        return;
    }

    // If all conditions are met, clear any existing error message
    phoneError.textContent = "";
}

	

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('fileInput').addEventListener('change', function(e) {
            var file = e.target.files[0];
            if (file) {
                var fileType = file.name.split('.').pop().toLowerCase();
                if (fileType === 'png' || fileType === 'jpg' || fileType === 'jpeg') {
                    document.getElementById('messagee').innerText = 'You have selected a ' + fileType.toUpperCase() + ' file.';
                } else {
                    document.getElementById('message').innerText = 'Please select a PNG or JPG , JPEG file.';
                }
            }
        });
    });
</script>
@endsection
