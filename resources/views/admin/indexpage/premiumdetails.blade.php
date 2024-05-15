@extends('admin.layout.app')
@section('maindashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <section class="content">
         <div class="row">
            <div class="col-12">
               <div class="card">
                @if(Session('success'))
                <span class="alert alert-success" type="alert">{{session('success')}}</span>
                  @endif
                  @if(Session('error'))
                <span class="alert alert-danger" type="alert">{{session('error')}}</span>
                  @endif
                    <div class="card-header">
                        <h5 class="card-title">Home Premium Details & Services</h5>
                        <a href="{{url('addpremiumtravels')}}" class="btn btn-info">Add Premium Details</a>
                     </div>
                   <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Heading</th>
                                 {{-- <th scope="col">Paragraph 1</th>
                                 <th scope="col">Paragraph 2</th> --}}
                                 <th scope="col">Slug</th>
                                 <th scope="col">Image</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($premium as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td class="text-fade">{{$item->heading}}</td>
                                {{-- <td class="text-fade">{{$item->para1}}</td>
                                <td class="text-fade">{{$item->para2}}</td> --}}
                                <td class="text-fade">{{$item->slug}}</td>
                                <td class="text-fade"><img src="{{asset('website/homeimages/'.$item->image)}}" alt="homebanner" style="width:50px;height:50px"></td>
                                <td>@if ($item->status == 1)
                                   <p class="btn btn-primary">active</p> 
                                    @else
                                     <p class="btn btn-danger">Inactive</p>
                                    @endif</td>
                                <td class="text-fade">{{$item->created_at}}</td>
                                <td class="text-fade">{{$item->updated_at}}</td>
                                 <td><a href="{{url('updatepremium',$item->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                 <td><a href="{{url('deletepremium',$item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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