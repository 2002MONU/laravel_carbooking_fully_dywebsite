<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from edulearn-lms-admin-template.multipurposethemes.com/template/vertical/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 10:59:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://edulearn-lms-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Butterfly Travels - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('dash-assets/src/css/vendors_css.css')}}">
	  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> --}}
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('dash-assets/src/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('dash-assets/src/css/skin_color.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />  
    @php
	$user = \App\Models\User::find(1);
	
	@endphp
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<script>
		var msg = '{{Session::get('success')}}';
		var exist = '{{Session::has('success')}}';
		if(exist){
		  alert(msg);
		}
		  var error = '{{Session::get('error')}}';
		  var err = '{{Session::has('error')}}';
		   if(err){
			alert(error);
		   }
		
	  </script>
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="#" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-30">
			  <span class="light-logo"><img src="{{url('assets/img/logo-01.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{url('assets/img/logo-01.png')}}" alt="logo"></span>
		  </div>
		  {{-- <div class="logo-lg">
			  <span class="light-logo"><img src="{{url('assets/img/logo-01.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{url('assets/img/logo-01.png')}}" alt="logo"></span>
		  </div> --}}
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light ms-0" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
			
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>
			
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<div class="d-flex pt-1 align-items-center">
						<div class="text-end me-10">
							<p class="pt-5 fs-14 mb-0 fw-700">{{$user->name}}</p>
							<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
						</div>
						<img src="{{asset('dash-assets/images/avatar/avatar-13.png')}}" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
					</div>
				</a>
			</li>		  
          <!-- Control Sidebar Toggle Button -->
          
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative"> 
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li>
				  <a href="{{url('dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a>
				</li>
				<li>
				  <a href="{{url('homeBannerDetails')}}"><i data-feather="home"></i><span>Home Banner</span></a>
				</li>
				<li><a href="{{url('extrafeatured')}}"><i data-feather="database"></i><span>Extra Features Details</span>
				</a></li>
				<li><a href="{{url('premiumTravelsdetails')}}"><i data-feather="command"></i><span>Premium Travel & Services</span></a>
				</li>
				<li><a href="{{url('keyfeatured')}}"><i data-feather="database"></i><span>Key Features Details</span>
				</a></li>
				<li>
				  <a href="{{url('achievementdetails')}}"><i data-feather="star"></i><span>Our Achievements</span></a>
				</li>
				<li > <a href="{{url('aboutpagedetails')}}"><i data-feather="database"></i><span>About Page Details</span>
				</a></li>				  
						
				<li> <a href="{{url('gallerydetails')}}"><i data-feather="file"></i><span>Gallery Details</span> </a>					
				</li>	
				<li class="treeview">
					<a href="#">
					  <i data-feather="grid"></i>
					  <span>Packages Details Hydrabad</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>					
					<ul class="treeview-menu">					
					  <li><a href="{{url('hydrabadpakagesdetails')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Cities Details</a></li>
					  <li><a href="{{url('hydrabadpakagesview')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Packages Price Details</a></li>
					  					
					</ul>
				</li>	
				<li class="treeview">
					<a href="#">
					  <i data-feather="grid"></i>
					  <span>Packages Details Vizag</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>					
					<ul class="treeview-menu">					
					  <li><a href="{{url('vizagpakagesdetails')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Cities Details</a></li>
					  <li><a href="{{url('vizagprice')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Packages Price Details</a></li>
					  					
					</ul>
				</li>
				<li><a href="{{url('enquirymessage')}}"><i data-feather="edit"></i><span>Enquiry Message</span> </a>
				</li>		
				<li><a href="{{url('contactmessageshow')}}"><i data-feather="edit"></i></i><span>Contact Message</span></a>					
				</li>				 
				
				{{-- <li >  <a href="{{url('hydrabadpakagesdetails')}}"><i data-feather="database"></i><span>Hydrabad Packages details</span>
				</a></li>
				<li >  <a href="{{url('hydrabadpakagesview')}}"><i data-feather="database"></i><span>Hydrabad Packages Price details</span>
				</a></li>	 --}}
				<li><a href="{{url('carbrandsdetails')}}"><i data-feather="database"></i><span>Explore All Cars</span></a></li>
				<li><a href="{{url('footerdetails')}}"><i data-feather="database"></i><span>Footer Details</span>
				<li><a href="{{url('abouthomedetails')}}"><i data-feather="database"></i><span>About Home Banner Details</span>
				</a></li>
				
				
			   </ul>
			   
		  </div>
		</div>
    </section>
  </aside>
