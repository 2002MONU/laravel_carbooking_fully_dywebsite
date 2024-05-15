
@php
$user = \App\Models\User::find(1);
@endphp
<footer class="main-footer">
	<div class="pull-right d-none d-sm-inline-block">
		<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#" target="_blank">Butterfly Travellers </a>
		  </li>
		</ul>
	</div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Designed by The Color Moon </a>. All Rights Reserved.
  </footer>
  <!-- Side panel -->   
  <!-- quick_user_toggle -->
  <div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll3">
		  <div class="modal-body p-30 bg-white">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<h4 class="m-0">User Profile
				{{-- <small class="text-fade fs-12 ms-5">12 messages</small></h4> --}}
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
			<div>
				<div class="d-flex flex-row">
					<div class=""><img src="{{asset('dash-assets/images/avatar/avatar-13.png')}}" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
					<div class="ps-20">
						<h5 class="mb-0">{{$user->name}}</h5>
						<p class="my-5 text-fade">Manager</p>
						<a href="#"><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span> {{$user->email}}</a>
						{{-- <button class="btn btn-success-light btn-sm mt-5"><i class="ti-plus"></i> Follow</button> --}}
					</div>
				</div>
			</div>
			  <div class="dropdown-divider my-30"></div>
			  <div>
				<div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						  <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
					<div class="d-flex flex-column fw-500">
						<a href="{{url('changePassword')}}" class="text-dark hover-primary mb-1 fs-16">Change Password</a>
						{{-- <span class="text-fade">Account settings and more</span> --}}
					</div>
				</div>
				<div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
					<div class="d-flex flex-column fw-500">
						<a href="{{url('logout')}}" class="text-dark hover-danger mb-1 fs-16">Logout</a>
						{{-- <span class="text-fade">Inbox and tasks</span> --}}
					</div>
				</div>
			
				
			  </div>
			 
				
			</div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_user_toggle --> 
	
  
  
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>	
	
  </div>
  <!-- ./wrapper -->
	
			
	{{-- <div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
			<div id="chat-overlay"></div>
			<span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>
  
		<div class="chat-box">
			<div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
				<div class="btn-group">
				  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-50" type="button" data-bs-toggle="dropdown">
					  <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
				  </button>
				  <div class="dropdown-menu min-w-200">
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Color me-15"></span>
						New Group</a>
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
						Contacts</a>
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
						Groups</a>
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
						Calls</a>
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
						Settings</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
						Help</a>
					<a class="dropdown-item fs-16" href="#">
						<span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
						Privacy</a>
				  </div>
				</div>
				<div class="text-center flex-grow-1">
					<div class="text-dark fs-18">Mayra Sibley</div>
					<div>
						<span class="badge badge-sm badge-dot badge-primary"></span>
						<span class="text-muted fs-12">Active</span>
					</div>
				</div>
				<div class="chat-box-toggle">
					<button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-50" type="button">
					  <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
					</button>                    
				</div>
			</div>
			<div class="chat-box-body">
				<div class="chat-box-overlay">   
				</div>
				<div class="chat-logs">
					<div class="chat-msg user">
						<div class="d-flex align-items-center">
							<span class="msg-avatar">
								<img src="../../../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
							</span>
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
								<p class="text-muted fs-12 mb-0">2 Hours</p>
							</div>
						</div>
						<div class="cm-msg-text">
							Hi there, I'm Jesse and you?
						</div>
					</div>
					<div class="chat-msg self">
						<div class="d-flex align-items-center justify-content-end">
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary fw-bold">You</a>
								<p class="text-muted fs-12 mb-0">3 minutes</p>
							</div>
							<span class="msg-avatar">
								<img src="../../../images/avatar/3.jpg" class="avatar avatar-lg" alt="">
							</span>
						</div>
						<div class="cm-msg-text">
						   My name is Anne Clarc.         
						</div>        
					</div>
					<div class="chat-msg user">
						<div class="d-flex align-items-center">
							<span class="msg-avatar">
								<img src="../../../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
							</span>
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
								<p class="text-muted fs-12 mb-0">40 seconds</p>
							</div>
						</div>
						<div class="cm-msg-text">
							Nice to meet you Anne.<br>How can i help you?
						</div>
					</div>
				</div><!--chat-log -->
			</div>
			<div class="chat-input">      
				<form>
					<input type="text" id="chat-input" placeholder="Send a message..."/>
					<button type="submit" class="chat-submit" id="chat-submit">
						<span class="icon-Send fs-22"></span>
					</button>
				</form>      
			</div>
		</div>
	</div> --}}
	
	<!-- Vendor JS -->
	<script src="{{asset('dash-assets/src/js/vendors.min.js')}}"></script>
	<script src="{{asset('dash-assets/src/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('dash-assets/assets/icons/feather-icons/feather.min.js')}}"></script>
	
	<script src="{{asset('dash-assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	<script src="{{asset('dash-assets/assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('dash-assets/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>	
	
	<!-- edulearn App -->
	<script src="{{asset('dash-assets/src/js/demo.js')}}"></script>
	<script src="{{asset('dash-assets/src/js/template.js')}}"></script>
	<script src="{{asset('dash-assets/src/js/pages/dashboard.js')}}"></script>
	<script>
   function validatePhoneNumber() {
    var phoneNumber = document.getElementById('phoneNumber').value;
    var phoneError = document.getElementById('phoneError');

    // Check if the input is a number
    if (isNaN(phoneNumber)) {
        phoneError.textContent = "Please enter numbers only.";
        return;
    }

    // Check if the input length is between 10 and 12
    // if (phoneNumber.length < 10 || phoneNumber.length > 12) {
    //     phoneError.textContent = "Phone number should be between 10 and 12 digits.";
    //     return;
    // }

    // If all conditions are met, clear any existing error message
    phoneError.textContent = "";
}

	</script>
</body>

</html>