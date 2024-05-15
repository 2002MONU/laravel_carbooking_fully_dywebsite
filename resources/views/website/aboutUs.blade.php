@extends('website.layouts.app')
 @section('mainsection')
     
 
<div class="tf-page-title mt-10" style="background-image: url({{asset('website/aboutpage/'.$abouthome->image)}});background-size:cover;">
<div class="themesflat-container full">
<div class="page-title t-al-center">
    <h1 class="main-title">{{$abouthome->heading}}</h1>
</div>
</div>
</div>
<div class="widget-booking-car">
        <div class="themesflat-container">
            <div class="booking-car">
                <div class="header-section">
                    <div class="heading-section">
                        <span class="sub-title mb-6 wow fadeInUp">Overview</span>
                        <h2 class="title wow fadeInUp">Welcome To Butterfly Travels</h2>
                    </div>
                    <p class="description wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="brand-car">
                    <div class="w-470">
                        <div class="box-icon-list-v2">
                            @foreach ($carbrands as $brands)
                            <a href="{{url('gallery')}}" class="icon-box v2-box">
                                <div class="image-box-wrap">
                                    <img src="{{asset('website/carbrands/'.$brands->carimage)}}" alt="brands car">
                                </div>
                                <span class="title-icon">{{$brands->carname}}</span>
                             </a>  
                            @endforeach
                            
                            {{-- <a href="{{url('gallery')}}" class="icon-box v2-box">
                                <div class="image-box-wrap">
                                    <img src="assets/img/02.png" alt="">
                                </div>
                                <span class="title-icon">Kia</span>
                             </a>
                            <a href="{{url('gallery')}}" class="icon-box v2-box">
                                <div class="image-box-wrap">
                                    <img src="assets/img/2.png" alt="">
                                </div>
                                <span class="title-icon">Ford</span>
                                
                            </a>
                            <a href="{{url('gallery')}}" class="icon-box v2-box">
                                <div class="image-box-wrap">
                                    <img src="assets/img/3.png" alt="">
                                </div>
                                <span class="title-icon">Bently</span>
                                
                            </a> --}}
                         </div>

                    </div>
                    <div class="brand-counter">
                        <div class="counter tf-counter">
                            <div class="widget-counter counter-v2">
                                <div class="number-counter number" data-to="{{$about->happycust}}" data-speed="2000" data-waypoint-active="yes">{{$about->happycust}}</div>
                                <p>Happy Customers</p>
                            </div>
                            <div class="widget-counter counter-v2">
                                <div class="number-counter number" data-to="{{$about->corpsurved}}" data-speed="2000" data-waypoint-active="yes">{{$about->corpsurved}}</div>
                                <p>Corporates Served</p>
                            </div>
                            <div class="widget-counter counter-v2">
                                <div class="number-counter number" data-to="{{$about->openshow}}" data-speed="2000" data-waypoint-active="yes">{{$about->openshow}}</div>
                                <p>Open Showroom</p>
                            </div>
                        </div>
                        <div class="brand-image">
                            <img src="{{asset('website/aboutpage/'.$about->image)}}" alt="">
                            <div class="car-box tf-counter">
                                <span class="number" data-to="{{$about->experience}}" data-speed="2000" data-waypoint-active="yes">{{$about->experience}}</span>
                                <p class="experience">year of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widget booking car -->

@endsection