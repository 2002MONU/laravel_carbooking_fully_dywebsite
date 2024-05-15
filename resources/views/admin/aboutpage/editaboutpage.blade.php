@extends('admin.layout.app')
@section('maindashboard')
<div class="content-wrapper">
   <div class="container-full">
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="me-auto">
               <h4 class="page-title">Home Banner Update</h4>
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
                     <form method="POST" action="{{url('aboutpageed',$about->id)}}" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="mb-3">
                           <label for="happycust" class="form-label">Happy Customers</label>
                           <input type="text" name="happycust" class="form-control" value="{{$about->happycust}}" placeholder="Happy Customers" id="happycust">
                           <div id="happycustError" class="error text-danger"></div>
                           @if($errors->has('happycust'))
                           <div class="error text-danger">{{ $errors->first('happycust') }}</div>
                             @endif
                        </div>
                        <!-- Add similar markup for other input fields -->
                        <div class="mb-3">
                           <label for="corpsur" class="form-label">Corporates Served</label>
                           <input type="text" name="corpsurved" class="form-control" value="{{$about->corpsurved}}" placeholder="Corporates Served" id="corpsurved">
                           <div id="corpsurError" class="error text-danger"></div>
                           @if($errors->has('corpsurved'))
                           <div class="error text-danger">{{ $errors->first('corpsurved') }}</div>
                             @endif
                        </div>
                        <div class="mb-3">
                           <label for="simpleinput" class="form-label">Years Of Service Excellence</label>
                           <input type="text" id="experience"  name="experience" value="{{$about->experience}}" class="form-control" placeholder="Years Of Service Excellence" >
                           <div id="experienceError" class="error text-danger"></div>
                           @if($errors->has('experience'))
                           <div class="error text-danger">{{ $errors->first('experience') }}</div>
                             @endif
                        </div>
                       <div class="mb-3">
                          <label for="example-email" class="form-label">Open Showroom</label>
                          <input type="text" id="surcity"   name="openshow" value="{{$about->openshow}}" class="form-control" placeholder="Servicing Cities">
                          <div id="surcityError" class="error text-danger"></div>
                          @if($errors->has('openshow'))
                          <div class="error text-danger">{{ $errors->first('openshow') }}
                          </div>
                            @endif
                       </div>
                       <div class="mb-3">
                        <label for="example-email" class="form-label">About Image</label>
                        <input type="file" id="fileInput"   name="image"  class="form-control"  placeholder="Servicing Cities">
                        <img src="{{asset('website/aboutpage/'.$about->image)}}" style="width:50px;height:50px;"><br>
                        <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-1MB,Min_Dim-800X400,Max_Dim-2000X900)</span>

                        <span id="message" class="text-danger"></span>
                        @if($errors->has('image'))
                        <div class="error text-danger">{{ $errors->first('image') }}
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
    document.addEventListener('DOMContentLoaded', function() {
        // Function to validate the input dynamically
        function validateInput(inputField, errorField) {
            var inputValue = inputField.value.trim();
            var errorElement = document.getElementById(errorField);
            if (!/^\d+$/.test(inputValue)) {
                errorElement.innerText = 'Please enter only numbers.';
            } else {
                errorElement.innerText = '';
            }
        }

        // Event listeners for input fields
        document.getElementById('happycust').addEventListener('input', function() {
            validateInput(this, 'happycustError');
        });

        document.getElementById('corpsurved').addEventListener('input', function() {
            validateInput(this, 'corpsurError');
        });
        document.getElementById('experience').addEventListener('input', function() {
            validateInput(this, 'experienceError');
        });
        document.getElementById('surcity').addEventListener('input', function() {
            validateInput(this, 'surcityError');
        });
        // Add similar event listeners for other input fields
    });

    // Form submission validation
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var happycustInput = document.getElementById('happycust').value.trim();
        var corpsurInput = document.getElementById('corpsurved').value.trim();
        var experienceInput = document.getElementById('experience').value.trim();
        var csurcityInput = document.getElementById('surcity').value.trim();
        // Add similar variables for other input fields

        var isValid = /^\d+$/.test(happycustInput) && /^\d+$/.test(corpsurInput) && /^\d+$/.test(experienceInput) &&  /^\d+$/.test(csurcityInput);
        // Add similar validation for other fields

        if (!isValid) {
            event.preventDefault(); // Prevent form submission
        }
    });

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
