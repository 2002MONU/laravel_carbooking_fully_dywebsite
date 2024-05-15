@extends('admin.layout.app')
@section('maindashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="me-auto">
               <h4 class="page-title">Home Banner Update</h4>
               
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
                                 <form method="POST" action="{{url('premiumTravelsPost')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                       <label for="simpleinput" class="form-label">Heading</label>
                                       <input type="text" id="simpleinput" name="heading" class="form-control" value="" placeholder="Topics">
                                       @if($errors->has('heading'))
                                       <div class="error text-danger">{{ $errors->first('heading') }}</div>
                                         @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Slug</label>
                                        <input type="text" id="simpleinput" name="slug" class="form-control" value="" placeholder="slug">
                                        @if($errors->has('slug'))
                                        <div class="error text-danger">{{ $errors->first('slug') }}</div>
                                          @endif
                                     </div>
                                     <div class="mb-3">
                                        <label for="Paragraph" class="form-label">Paragraph 1</label>
                                        <textarea type="text" id="Paragraph" name="para1" placeholder="Write Here..." class="form-control" value="" cols="10" rows="5"></textarea>
                                        @if($errors->has('para1'))
                                        <div class="error text-danger">{{ $errors->first('para1') }}</div>
                                          @endif
                                     </div>
                                     <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Paragraph 2</label>
                                        <textarea type="text" id="simpleinput" name="para2" class="form-control" placeholder="Write Here..." value="" cols="10" rows="5"></textarea>
                                        @if($errors->has('para2'))
                                        <div class="error text-danger">{{ $errors->first('para2') }}</div>
                                          @endif
                                     </div>
                                    <div class="mb-3">
                                       <label for="example-email" class="form-label"> Image</label>
                                       <input type="file" id="fileInput"  name="image" class="form-control">
                                       <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-1MB,Min_Dim-800X500,Max_Dim-1000X650)</span>
                                      <span id="message" class="text-danger"></span>
                                       @if($errors->has('image'))
                                       <div class="error text-danger">{{ $errors->first('image') }}
                                       </div>
                                         @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control select2" style="width: 100%;">
                                          <option selected="selected">Status</option>
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
                                        
                                        </select>
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