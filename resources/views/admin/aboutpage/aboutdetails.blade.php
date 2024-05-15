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
                     <h5 class="card-title">About Page Details</h5>
                     @if(session('success'))
                     <span class="alert alert-danger">{{session('success')}}</span>
                @endif
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Happy Customers</th>
                                 <th scope="col">Corporates Served</th>
                                 <th scope="col">Years Of Service Excellence</th>
                                 <th scope="col">Open Showroom</th>
                                 <th scope="col">Image</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                         
                            <tr>
                                <th scope="row">{{$about->id}}</th>
                                <td class="text-fade">{{$about->happycust}}</td>
                                <td class="text-fade">{{$about->corpsurved  }}</td>
                                <td class="text-fade">{{$about->openshow}}</td>
                                <td class="text-fade">{{$about->experience}}</td>
                                <td class="text-fade"><img src="{{asset('website/aboutpage/'.$about->image)}}" style="width:50px;height:50px;"></td>
                                <td class="text-fade">{{$about->created_at}}</td>
                                <td class="text-fade">{{$about->updated_at}}</td>
                                 <td><a href="{{url('aboutpage',$about->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
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