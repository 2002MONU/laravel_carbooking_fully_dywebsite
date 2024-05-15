
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from edulearn-lms-admin-template.multipurposethemes.com/template/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 11:01:48 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://edulearn-lms-admin-template.multipurposethemes.com/images/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/ie7/ie7.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css">
    <title>Butterfly Travels - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('dash-assets/src/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('dash-assets/src/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('dash-assets/src/css/skin_color.css')}}">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(asset{{('hash-assets/images/auth-bg/bg-16.jpg')}})">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary fw-600">Let's Get Started</h2>
								<p class="mb-5 text-fade">Change Password</p>	
                            </div>
                            @if(Session('success'))
                            <span class="alert alert-success mt-5">{{session('success')}}</span>
                            @endif
                            @if(Session('error'))
                            <span class="alert alert-danger mt-5">{{session('error')}}</span>
                            @endif
							<div class="p-40">
								<form action="{{url('changePasswordadmin')}}" method="POST">
                                   @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="old_password" class="form-control ps-15 bg-transparent" placeholder="Old Password">
									</div>
                                    @if($errors->has('old_password'))
                                    <div class="error text-danger">{{ $errors->first('old_password') }}</div>
                                      @endif</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="new_password" class="form-control ps-15 bg-transparent" placeholder="New Password">
										</div>
                                    @if($errors->has('new_password'))
                                    <div class="error text-danger">{{ $errors->first('new_password') }}</div>
                                    @endif</div>
                                    <div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="conf_password" class="form-control ps-15 bg-transparent" placeholder="Confirm  Password">
										</div>
                                    @if($errors->has('conf_password'))
                                    <div class="error text-danger">{{ $errors->first('conf_password') }}</div>
                                    @endif</div>
									  <div class="row">
										
										<div class="col-12 text-center">
										  <button type="submit" name="submit" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('dash-assets/src/js/vendors.min.js')}}"></script>
	<script src="{{asset('dash-assets/src/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('dash-assets/assets/icons/feather-icons/feather.min.js')}}"></script>	

</body>

</html>
