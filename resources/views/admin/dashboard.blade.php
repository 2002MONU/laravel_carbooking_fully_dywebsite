@extends('admin.layout.app')
@section('maindashboard')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<div class="container-full">
	  <!-- Main content -->
	  <section class="content">
		  <div class="row">
			  <div class="col-md-12">
				<div class="row d-flex align-items-center">
					<div class="col-md-4">
						<div class="box mb-15 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="me-15 bg-warning h-50 w-50 l-h-55 rounded text-center">
											<span class="fs-24">U</span>
										</div>
										<div class="d-flex flex-column fw-500">
											<a href="{{url('enquirymessage')}}" class="text-dark hover-warning mb-1 fs-16">Enquiry</a>
											<h5 class="text-fade">{{$enquiry}}</h5>
										</div>
									</div>
									

								</div>
							</div>
						</div>
					</div>
						<div class="col-md-4">
							<div class="box mb-15 pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<div class="me-15 bg-danger h-50 w-50 l-h-55 rounded text-center">
												<span class="fs-24">M</span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="course.html" class="text-dark hover-danger mb-1 fs-16">Message</a>
												<span class="text-fade">{{$message}}</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="col-md-4">
							<div class="box mb-15 pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<div class="me-15 bg-success h-50 w-50 l-h-55 rounded text-center">
												<span class="fs-24">W</span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="course.html" class="text-dark hover-success mb-1 fs-16">Web Dev.</a>
												<span class="text-fade">30+ Courses</span>
											</div>
										</div>
										
										<div class="d-flex align-items-center">
											<a href="course.html" class="waves-effect waves-light btn btn-sm btn-success-light me-10">View Courses</a>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">Apply</a>
												  <a class="dropdown-item flexbox" href="#">Make a Payment</a>
												  <a class="dropdown-item flexbox" href="#">Benefits</a>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div> --}}
						{{-- <div class="col-md-4">
							<div class="box mb-15 pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<div class="me-15 bg-primary h-50 w-50 l-h-55 rounded text-center">
												<span class="fs-24">M</span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="course.html" class="text-dark hover-primary mb-1 fs-16">Mathematics</a>
												<span class="text-fade">50+ Courses</span>
											</div>
										</div>
										
										
									</div>
								</div>
							</div>
						</div> --}}
					</div>
				  </div>
				 </div>
	  </section>
	  <!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
  
  
  <!-- Page Content overlay -->
  @endsection