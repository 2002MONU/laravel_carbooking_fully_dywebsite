@extends('website.layouts.app')

@section('mainsection')
<div class="tf-page-title mt-10" style="background-image: url({{asset('assets/img/page-title.jpg')}});background-size:cover;">
	<div class="themesflat-container full">
		<div class="page-title t-al-center">
			<h1 class="main-title">SME TRAVELS</h1>
		</div>
	</div>
</div>
<section class="flat-blog-list main-content services-bg">
	<div class="themesflat-container w1320">
		<div class="row justify-contnet-center">
			<div class="col-lg-8 wow bounceInLeft infinite">
				<div class="post-wrap">
					<article class="entry format-standard-details">
						<img src="{{asset('website/homeimages/'.$premium->image)}}" alt="image" class="imge-blog-details mb-25">
						<h2 class="entry-title">
						{{$premium->heading}}
						</h2>
						<p> {{$premium->para1}}</p>
						<p> {{$premium->para2}}</p>
					</article>
				</div>
			</div>
			<div class="col-lg-4 wow bounceInRight infinite">
				<aside class="side-blog">
					<div class="inner-side-bar pl-30">
						<div class="widget widget-user t-al-center">
                                        <div class="content-user">
                                            <img src="assets/img/contact-us-img.jpg" alt="">
                                            <h4>Contact Us</h4>
                                            <div class="call">
                                            	 <img src="{{url('assets/img/mobile-icon.png')}}" alt="#">
                                            	 <a href="tel:+919000000668">+91 9000000668</a>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
						<div class="widget widget-categories">
							<h3 class="widget-title">Our Services</h3>
							<ul>
								@foreach($premiumsss as $item)
								<li><a href="{{url('premiumview',$item->slug)}}" class="category active"><span>{{$item->heading}}</span></a></li>
								{{-- <li><a href="sme-travels.php" class="category"><span>Aviation Travel Solutions</span></a></li>
								<li><a href="sme-travels.php" class="category"><span>Corporate Travel</span></a></li>
								<li><a href="sme-travels.php" class="category"><span>Gov & PSUs Travel</span></a></li>
								<li><a href="sme-travels.php" class="category"><span>Hospitality Travel</span></a></li> --}}
								@endforeach
							</ul>
						</div>
						
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
<section class="flat-blog-list main-content features">
	
	<div class="themesflat-container w1320">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="entry-title">Key Features</h2>
			</div>
		</div>
		<div class="row justify-contnet-center  mt-5">
			@foreach($keyfeature as $key)
			<div class="col-lg-3 wow fadeInRight infinite">
				<div class="features-sec">
					<img src="{{asset('website/keyfeature/'.$key->image)}}" alt="">
					<h3>{{$key->title}}</h3>
				<p>{{$key->paragraph}}</p>
				</div>
			</div>
			@endforeach
			{{-- <div class="col-lg-3 wow fadeInRight infinite">
				<div class="features-sec">
					<img src="{{url('assets/img/f-02.png')}}" alt="">
					<h3>24*7 Helpline</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
			<div class="col-lg-3 wow fadeInLeft infinite">
				<div class="features-sec">
					<img src="{{url('assets/img/f-03.png')}}" alt="">
					<h3>Flexible Payment Options</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
			<div class="col-lg-3  wow fadeInLeft infinite">
				<div class="features-sec">
					<img src="{{url('assets/img/f-04.png')}}" alt="">
					<h3>Transparent Billing</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div> --}}
		</div>
	</div>
</section>
@endsection