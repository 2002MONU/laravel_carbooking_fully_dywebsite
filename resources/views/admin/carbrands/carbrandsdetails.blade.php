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
                     <h5 class="card-title">Brands Image Car</h5>
                     <a href="{{url('addcarbrands')}}" class="btn btn-primary">Add Car Brands</a>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Brands Image</th>
                                 <th scope="col">Brands Name</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($carbrands as $brands)
                            <tr>
                                <th scope="row">{{$brands->id}}</th>
                                <td class="text-fade">{{$brands->carname}}</td>
                                <td class="text-fade"><a href=""><img src="{{asset('website/carbrands/'.$brands->carimage)}}" style="width:50px;height:50px"  alt=""></a></td>
                                <td class="text-fade">{{$brands->created_at}}</td>
                                <td class="text-fade">{{$brands->updated_at}}</td> 
                                 <td>
                                    <a href="{{url('carsupdate',$brands->id)}}" class="btn btn-info"><i class="fa fa-pen-to-square"></i></a>
                                    <a href="{{url('carbrandsdelete',$brands->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                             </tr>
                        @endforeach
                        
                         </tbody>
                        </table>
                        {{-- {!! $enquiry->appends(['sort' => 'department'])->links() !!} --}}
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