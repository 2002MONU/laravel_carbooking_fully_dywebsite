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
                     <h5 class="card-title">Footer Details</h5>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Contact Number</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Address</th>
                                 {{-- <th scope="col">location</th> --}}
                                 {{-- <th scope="col">About Details</th> --}}
                                 <th scope="col">Logo</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                </tr>
                           </thead>
                           <tbody>
                          
                            <tr>
                                <th scope="row">{{$footerdetails->id}}</th>
                                <td class="text-fade">{{$footerdetails->mobile}}</td>
                                <td class="text-fade">{{ $footerdetails->email}}</td>
                                <td class="text-fade">{{ $footerdetails->address}}</td>
                                {{-- <td class="text-fade">{{ $footerdetails->location}}</td> --}}
                                {{-- <td class="text-fade">{{ $footerdetails->about}}</td> --}}
                                <td class="text-fade"> <img src="{{asset('website/logo/'.$footerdetails->logo)}}" style="width:50px;height:50px;"><br></td>
                                <td class="text-fade">{{ $footerdetails->created_at}}</td>
                                <td class="text-fade">{{ $footerdetails->updated_at}}</td>
                                <td class="text-fade"><a href="{{url('footerupdate', $footerdetails->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                             </tr>
                        
                        
                         </tbody>
                        </table>
                        {{-- {!! $contactmessage->appends(['sort' => 'department'])->links() !!} --}}
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