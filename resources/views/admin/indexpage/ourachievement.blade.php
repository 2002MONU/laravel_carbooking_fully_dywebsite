@extends('admin.layout.app')
@section('maindashboard')
<div class="content-wrapper">
   <div class="container-full">
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="me-auto">
               <h4 class="page-title">Home Banner Update</h4>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="row">
            <div class="col-lg-6">
               <div class="card">
                  <div class="card-body">
                     <h4 class="header-title">Input Types</h4>
                     <form method="POST" action="{{url('ourachievementpost',$ourachievement->id)}}" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="mb-3">
                           <label for="happycust" class="form-label">Happy Customers</label>
                           <input type="text" name="happycust" class="form-control" value="{{$ourachievement->happycust}}" placeholder="Happy Customers" id="happycust">
                           <div id="happycustError" class="error text-danger"></div>
                           @if($errors->has('happycust'))
                           <div class="error text-danger">{{ $errors->first('happycust') }}</div>
                             @endif
                        </div>
                        <!-- Add similar markup for other input fields -->
                        <div class="mb-3">
                           <label for="corpsur" class="form-label">Corporates Served</label>
                           <input type="text" name="corpsur" class="form-control" value="{{$ourachievement->corpsur}}" placeholder="Corporates Served" id="corpsur">
                           <div id="corpsurError" class="error text-danger"></div>
                           @if($errors->has('corpsur'))
                           <div class="error text-danger">{{ $errors->first('corpsur') }}</div>
                             @endif
                        </div>
                        <div class="mb-3">
                           <label for="simpleinput" class="form-label">Years Of Service Excellence</label>
                           <input type="text" id="experience"  name="experience" value="{{$ourachievement->experience}}" class="form-control" placeholder="Years Of Service Excellence" >
                           <div id="experienceError" class="error text-danger"></div>
                           @if($errors->has('experience'))
                           <div class="error text-danger">{{ $errors->first('experience') }}</div>
                             @endif
                        </div>
                       <div class="mb-3">
                          <label for="example-email" class="form-label"> Servicing Cities</label>
                          <input type="text" id="surcity"   name="surcity" value="{{$ourachievement->surcity}}" class="form-control" placeholder="Servicing Cities">
                          <div id="surcityError" class="error text-danger"></div>
                          @if($errors->has('surcity'))
                          <div class="error text-danger">{{ $errors->first('surcity') }}
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

        document.getElementById('corpsur').addEventListener('input', function() {
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
        var corpsurInput = document.getElementById('corpsur').value.trim();
        var experienceInput = document.getElementById('experience').value.trim();
        var csurcityInput = document.getElementById('surcity').value.trim();
        // Add similar variables for other input fields

        var isValid = /^\d+$/.test(happycustInput) && /^\d+$/.test(corpsurInput) && /^\d+$/.test(experienceInput) &&  /^\d+$/.test(csurcityInput);
        // Add similar validation for other fields

        if (!isValid) {
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
@endsection
