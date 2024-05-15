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
                     <h5 class="card-title">Enquiry Message</h5>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Full Name</th>
                                 <th scope="col">Mobile</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Services</th>
                                 <th scope="col">Created At</th>
                                 {{-- <th scope="col">Updated At</th> --}}
                                 <th scope="col">Action</th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($enquiry as $enq)
                            <tr>
                                <th scope="row">{{$enq->id}}</th>
                                <td class="text-fade">{{$enq->name}}</td>
                                <td class="text-fade">{{$enq->mobile}}</td>
                                <td class="text-fade">{{$enq->email}}</td>
                                <td class="text-fade">
                                    @if ($enq->services == 1)
                                        SME Travel
                                    @elseif ($enq->services == 2)
                                        Aviation Travel Solutions
                                    @elseif ($enq->services == 3)
                                        Corporate Travel
                                    @elseif ($enq->services == 4)
                                        Gov PSUs Travel
                                    @elseif ($enq->services == 5)
                                        Hospitality Travel
                                    @endif
                                </td>
                                <td class="text-fade">{{$enq->created_at}}</td>
                                {{-- <td class="text-fade">{{$enq->updated_at}}</td> --}}
                                 <td><a href="{{url('enquirydelete',$enq->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                             </tr>
                        @endforeach
                        
                         </tbody>
                        </table>
                        {!! $enquiry->appends(['sort' => 'department'])->links() !!}
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