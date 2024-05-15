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
                                 <th scope="col">Happy Customers</th>
                                 <th scope="col">Corporates Served</th>
                                 <th scope="col">Years Of Service Excellence</th>
                                 <th scope="col">Servicing Cities</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">{{$ourachievement->id}}</th>
                                 <td class="text-fade">{{$ourachievement->happycust}}</td>
                                 <td class="text-fade">{{$ourachievement->corpsur}}</td>
                                 <td class="text-fade">{{$ourachievement->experience}}</td>
                                 <td class="text-fade">{{$ourachievement->surcity}}</td>
                                 <td class="text-fade">{{$ourachievement->created_at}}</td>
                                 <td class="text-fade">{{$ourachievement->updated_at}}</td>
                                  <td><a href="{{url('ourachievement',$ourachievement->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                
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