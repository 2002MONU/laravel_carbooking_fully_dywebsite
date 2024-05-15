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
                     <h5 class="card-title">Contact Message</h5>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">First Name</th>
                                 <th scope="col">Last  Name</th>
                                 <th scope="col">Mobile</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Message</th>
                                 <th scope="col">Created At</th>
                                 {{-- <th scope="col">Updated At</th> --}}
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($contactmessage as $message)
                            <tr>
                                <th scope="row">{{$message->id}}</th>
                                <td class="text-fade">{{$message->fname}}</td>
                                <td class="text-fade">{{$message->lname}}</td>
                                <td class="text-fade">{{$message->mobile}}</td>
                                <td class="text-fade">{{$message->email}}</td>
                                <td class="text-fade">{{$message->message}}</td>
                                <td class="text-fade">{{$message->created_at}}</td>
                                <td class="text-fade"><a href="{{url('contactdelete',$message->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                             </tr>
                        @endforeach
                        
                         </tbody>
                        </table>
                        {!! $contactmessage->appends(['sort' => 'department'])->links() !!}
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