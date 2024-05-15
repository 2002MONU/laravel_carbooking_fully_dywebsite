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
                     <h5 class="card-title"> Hydrabad Packages Details</h5>
                     <a href="{{url('addhydrapackage')}}" class="btn btn-primary"> Add Packages </a>
                  </div>
                  @if(Session('success'))
                   <span class="alert alert-success">{{session('success')}}</span>
                  @endif
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">City</th>
                                 <th scope="col">Packages Image</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($hydrapackage as $package)
                              <tr>
                                 <th scope="row">{{$package->id}}</th>
                                 <td class="text-fade" style="">{{$package->city}}</td>
                                 <td class="text-fade"><img src="{{asset('website/hydrapackages/'.$package->image)}}" alt="homebanner" style="width:50px;height:50px"></td>
                                 <td class="text-fade">{{$package->created_at}}</td>
                                 <td class="text-fade">{{$package->updated_at}}</td>
                                 <td><a href="{{url('hydrapackageupdate',$package->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{url('hydrapackagedelete',$package->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                 </td>
                               </tr>
                              @endforeach
                            
                            
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