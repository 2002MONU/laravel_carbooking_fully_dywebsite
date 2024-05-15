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
                     <h5 class="card-title">Gallery Details</h5>
                     <a href="{{url('addgallery')}}" class="btn btn-success">Add Gallery</a>
                  </div>
                  @if(Session('success'))
                  <span class="alert alert-success">{{session('success')}}</span>
                  @endif
                  {{-- <div class="card-header">
                    <h5 class="card-title">Gallery Details</h5>
                 </div> --}}
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Galler Image</th>
                                 <th scope="col">Created At</th>
                                 <th scope="col">Updated At</th>
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($gallery as $item)
                              <tr>
                                 <th scope="row">{{$item->id}}</th>
                                 <td class="text-fade"><img src="{{asset('website/gallery/'.$item->image)}}" alt="homebanner" style="width:50px;height:50px"></td>
                                 <th scope="row">{{$item->created_at}}</th>
                                 <th scope="row">{{$item->updated_at}}</th>
                                  <td><a href="{{url('updategallery',$item->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{url('gallerydelete',$item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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