@extends('admin.layout.app')
@section('maindashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <section class="content">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h5 class="card-title">Home Banner</h5>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Background Image</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">{{$home->id}}</th>
                                 <td class="text-fade">{{$home->heading}}</td>
                                 <td class="text-fade"><img src="{{asset('website/homeimages/'.$home->image)}}" alt="homebanner" style="width:50px;height:50px"></td>
                                 <td class="text-fade">{{$home->created_at}}</td>
                                 <td class="text-fade">{{$home->updated_at}}</td>
                                  <td><a href="{{url('homebanner',$home->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                
                              </tr>
                            
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- /.content -->
   </div>
</div>
<!-- /.content-wrapper -->
@endsection