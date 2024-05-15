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
                     <h5 class="card-title"> Key Features  Details</h5>
                     <a href="{{url('addkeyfeatured')}}" class="btn btn-primary"> Add Key Features </a>
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
                                 <th scope="col"> Image</th>
                                 <th scope="col">Title</th>
                                 <th scope="col"> Paragraph</th>
                                 {{-- <th scope="col"> Fuel Type </th>
                                 <th scope="col"> Seats </th>
                                 <th scope="col"> Extra Km Fare: </th>
                                 <th scope="col"> City </th>
                                 <th scope="col"> Image </th> --}}
                                 {{-- <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th> --}}
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($keyfeature as $key)
                              <tr>
                                 <th scope="row">{{$key->id}}</th>
                                 <td class="text-fade bg-dark"><img src="{{asset('website/keyfeature/'.$key->image)}}" alt="homebanner" style="width:50px;height:50px"></td>
                                  <td class="text-fade" style="">{{$key->title}}</td>
                                 <td class="text-fade" style="">{{$key->paragraph}}</td>
                                 
                               
                                {{-- <td class="text-fade">{{$pack->created_at}}</td>
                                 <td class="text-fade">{{$pack->updated_at}}</td> --}}
                               <td><a href="{{url('featureupdate',$key->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{url('keyfeatureddelete',$key->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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