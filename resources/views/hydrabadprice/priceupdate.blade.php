@extends('admin.layout.app')
@section('maindashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="me-auto">
               <h4 class="page-title">Add Hydrabad Packages Details</h4>
               
            </div>
         </div>
      </div>
      <!-- Main content -->
      <section class="content">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <h4 class="header-title">Input Types</h4>
                     <div class="tab-content">
                        <div class="tab-pane show active" id="input-types-preview">
                           <div class="row">
                              <div class="col-lg-6">
                                 <form method="POST" action="{{url('packagepricepostup',$result->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Car Type</label>
                                       <input type="text" id="simpleinput" name="cartype" class="form-control" value="{{$result->cartype}}" placeholder="Innova Crysta " >
                                       @if($errors->has('cartype'))
                                       <div class="error text-danger">{{ $errors->first('cartype') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Actual Price</label>
                                       <input type="text" id="acprice" name="acprice" class="form-control" value="{{$result->acprice}}" placeholder="11900">
                                       <div id="acpriceError" class="text-danger"></div>
                                       @if($errors->has('acprice'))
                                       <div class="error text-danger">{{ $errors->first('acprice') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">After Discount Price</label>
                                       <input type="text" id="price" name="price" class="form-control" value="{{$result->price}}" placeholder="11470">
                                       <div id="priceError" class="text-danger"></div>
                                       @if($errors->has('price'))
                                       <div class="error text-danger">{{ $errors->first('price') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Fuel Type</label>
                                       <input type="text" id="simpleinput" name="fueltype" class="form-control" value="{{$result->fueltype}}" placeholder="Petrol/Diesal">
                                       @if($errors->has('fueltype'))
                                       <div class="error text-danger">{{ $errors->first('fueltype') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Seats</label>
                                       <input type="text" id="seat" name="seats" class="form-control" value="{{$result->seats}}" placeholder="8 ">
                                       <div id="seatError" class="text-danger"></div>
                                       @if($errors->has('seats'))
                                       <div class="error text-danger">{{ $errors->first('seats') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Extra Km Fare:	</label>
                                       <input type="text" id="extrakm" name="extrakm" class="form-control" placeholder="24" value="{{$result->extrakm}}">
                                      <div id="extrakmError" class="text-danger"></div>
                                       @if($errors->has('extrakm'))
                                       <div class="error text-danger">{{ $errors->first('extrakm') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                       {{-- <label for="simpleinput" class="form-label">City</label> --}}
                                       <div class="form-group">
                                          <label class="form-label">City</label>
                                          <select class="form-control select2" name="city_id"  style="width: 100%;">
                                            <option selected="selected">Select City</option>
                                           @foreach ($city as $item)
                                           <option value="{{$item->id}}" @if($item->id == $result->city_id) selected @endif>{{$item->city}}</option>
                                           @endforeach
                                           </select>
                                         </div>
                                       @if($errors->has('city_id'))
                                       <div class="error text-danger">{{ $errors->first('city_id') }}</div>
                                         @endif
                                    </div>
                                   

                                    <div class="mb-3">
                                       <label for="example-email" class="form-label">Car Image</label>
                                       <input type="file" id="fileInput"  name="image" class="form-control">
                                       <img src="{{asset('website/hydrapackages/'.$result->image)}}" alt="homebanner" style="width:50px;height:50px">
                                     <br>
                                      <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-1MB,Min_Dim-800X400,Max_Dim-1500X1000)</span>
                                      <span id="message" class="text-danger"></span>
                                       @if($errors->has('image'))
                                       <div class="error text-danger">{{ $errors->first('image') }}
                                       </div>
                                         @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                       
                                        <button type="submit"   name="submit" class=" btn btn-primary">Submit</button>
                                     </div>
                                 </form>
                              </div>
                              <!-- end col -->
                           </div>
                           <!-- end row-->                      
                           
                        </div>
                        <!-- end preview code-->
                     </div>
                     <!-- end tab-content-->
                  </div>
                  <!-- end card-body -->
               </div>
               <!-- end card -->
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
         <!-- /.row -->
      </section>
      <!-- /.content -->
   </div>
</div>
<!-- /.content-wrapper -->
<script>
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
        document.getElementById('acprice').addEventListener('input', function() {
            validateInput(this, 'acpriceError');
        });

        document.getElementById('price').addEventListener('input', function() {
            validateInput(this, 'priceError');
        });
        document.getElementById('seat').addEventListener('input', function() {
            validateInput(this, 'seatError');
        });
        document.getElementById('extrakm').addEventListener('input', function() {
            validateInput(this, 'extrakmError');
        });
        // Add similar event listeners for other input fields
    });

    // Form submission validation
    document.getElementById('myForm').addEventListener('acprice', function(event) {
        var happycustInput = document.getElementById('acprice').value.trim();
        var corpsurInput = document.getElementById('price').value.trim();
        var experienceInput = document.getElementById('seat').value.trim();
        var csurcityInput = document.getElementById('extrakm').value.trim();
        // Add similar variables for other input fields

        var isValid = /^\d+$/.test(happycustInput) && /^\d+$/.test(corpsurInput) && /^\d+$/.test(experienceInput) &&  /^\d+$/.test(csurcityInput);
        // Add similar validation for other fields

        if (!isValid) {
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
@endsection