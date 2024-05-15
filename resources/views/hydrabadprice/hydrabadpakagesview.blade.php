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
                     <a href="{{url('hydrabadprice')}}" class="btn btn-primary"> Add Packages </a>
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
                                 <th scope="col">Car Type</th>
                                 <th scope="col">Actual Price</th>
                                 <th scope="col"> Price</th>
                                 <th scope="col"> Fuel Type </th>
                                 <th scope="col"> Seats </th>
                                 <th scope="col"> Extra Km Fare: </th>
                                 <th scope="col"> City </th>
                                 <th scope="col"> Image </th>
                                 {{-- <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th> --}}
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($package as $pack)
                              <tr>
                                 <th scope="row">{{$pack->id}}</th>
                                  <td class="text-fade" style="">{{$pack->cartype}}</td>
                                 <td class="text-fade" style="">{{$pack->acprice}}</td>
                                 <td class="text-fade" style="">{{$pack->price}}</td>
                                 <td class="text-fade" style="">{{$pack->fueltype}}</td>
                                 <td class="text-fade" style="">{{$pack->seats}} Seats</td>
                                 <td class="text-fade" style="">RS/{{$pack->extrakm}}/KM</td>
                                 <td class="text-fade" style="">{{$pack->city}}</td>
                                 {{-- <td class="text-fade" style="">{{$pack->city}}</td>
                                 <td class="text-fade" style="">{{$pack->city}}</td> --}}
                                 <td class="text-fade"><img src="{{asset('website/hydrapackages/'.$pack->image)}}" alt="homebanner" style="width:50px;height:50px"></td>
                                 {{-- <td class="text-fade">{{$pack->created_at}}</td>
                                 <td class="text-fade">{{$pack->updated_at}}</td> --}}
                                 <td><a href="{{url('packagepriceupdate',$pack->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{url('packagepricedelete',$pack->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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