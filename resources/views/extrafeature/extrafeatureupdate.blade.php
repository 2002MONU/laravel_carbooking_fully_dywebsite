@extends('admin.layout.app')
@section('maindashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="me-auto">
               <h4 class="page-title">Add Key Features Details</h4>
               
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
                                 <form method="POST" action="{{url('updateextraPost',$extrafeature->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Title</label>
                                       <input type="text" id="simpleinput" name="title" class="form-control" value="{{$extrafeature->title}}">
                                       @if($errors->has('title'))
                                       <div class="error text-danger">{{ $errors->first('title') }}</div>
                                         @endif
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Paragraph</label>
                                        <textarea type="text" id="simpleinput" name="paragraph" class="form-control" value="{{old('city')}}" cols="6" rows="4"></textarea>
                                        @if($errors->has('paragraph'))
                                        <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                                          @endif
                                     </div> --}}
                                    
                                    <div class="mb-3">
                                       <label for="example-email" class="form-label">Background Image</label>
                                       <input type="file" id="fileInput"  name="image" class="form-control">
                                       <img src="{{asset('website/extrafeature/'.$extrafeature ->image)}}" alt="homebanner" style="width:50px;height:50px">
                                     <br>
                                      <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-1MB,Min_Dim-400X400,Max_Dim-600X600)</span>
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
</script>
@endsection