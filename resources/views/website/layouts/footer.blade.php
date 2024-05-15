<footer id="footer" class="clearfix bg-footer2 pd-t81 re-hi">
    <div class="themesflat-container">
       <div class="row footer-main">
          <div class="col-lg-3 col-md-6 col-12">
             <div class="widget widget-menu">
                <h3>About Info</h3>
                <p>{{$footerdetails->about}} </p>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
             <div class="widget widget-menu quick-links pl-60">
                <h3>Quick Links</h3>
                <ul class="box-menu">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li><a href="{{url('aboutUs')}}">About Us</a></li>
                   <li><a href="{{url('packages')}}">Packages</a></li>
                   <li><a href="{{url('services')}}">Services</a></li>
                   <li><a href="{{url('gallery')}}">Gallery</a></li>
                   <li><a href="{{url('faq')}}">Faq</a></li>
                   <li><a href="{{url('contactUs')}}"> Contact Us</a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
             <div class="widget widget-menu mobile-footer pl-10">
                <h3>Contact Us</h3>
                <ul class="contact-sec">
                   <li><a href="tel:+91 {{$footerdetails->mobile}}">
                     <i class="fal fa-mobile">
                     </i> </a></li>
                   <li><a href="tel:+91 {{$footerdetails->mobile}}">+91 {{$footerdetails->mobile}}</a></li>
                   <li><a href="mailto:{{$footerdetails->email}}"><i class="fal fa-envelope-open"></i>{{$footerdetails->email}}</a></li>
                   <li><i class="fas fa-map-marker-alt"></i>{{$footerdetails->address}}</a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
             <div class="widget widget-menu widget-form">
                <h3>Our Foot Print</h3>
                <div class="location">
                   <iframe src="{{$footerdetails->location}}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
             </div>
          </div>
       </div>
       <div class="row justify-content-center footer-bottom">
          <div class="col-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
             <p class="coppy-right">© Copyright 2024 <a href="#">Butterfly Travels</a></p>
          </div>
          <div class="col-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
             <p class="coppy-right">Design And Developed by <a href="https://thecolourmoon.com/" target="_blank">Colourmoon</a></p>
          </div>
          
       </div>
    </div>
    <img src="assets/img/car-left.png" alt="left" class="shape-left  wow fadeInLeft">
    <img src="assets/img/car-right.png" alt="right" class="shape-right  wow fadeInRight">
 </footer>
 <div class="mobile--btns d-xl-block d-lg-block d-md-block d-sm-block d-none">
    <div class="btnicon-whatsapp">
       <a href="https://api.whatsapp.com/send?phone=9030612377" target="_blank">
          <i class="fab fa-whatsapp"></i>
       </a>
    </div>
    <div class="btnicon-call">
       <a href="tel:+919030612377" target="#">
          <i class="fas fa-phone-volume"></i>
       </a>
    </div>
 </div>
 <div class="mobile-btn d-block d-sm-none d-md-none d-lg-none d-xl-none d-xxl-none">
     <div class="row p-0 g-0">
         <div class="col-4">
             <a href="tel:+91 9030612377" class="ph-btn">
                 <i class="fa fa-phone-volume my-float"></i>Phone
             </a>
         </div>
         <div class="col-4">
             <a href="https://api.whatsapp.com/send?phone=919030612377&amp;text=Hi" target="_blank" class="ph-btn ph-btn2">
                 <i class="fab fa-whatsapp"></i>Whatsapp
             </a>
         </div>
         <div class="col-4">
             <a href="#" data-bs-toggle="modal" data-bs-target="#popup" class="ph-btn ph-btn3">
                 <i class="fas fa-comment-alt-edit"></i>Enquire Now
             </a>
         </div>
     </div>
 </div>
 </div>
 <a id="scroll-top" class="button-go"></a>
 <script src="{{url('assets/js/jquery.min.js')}}"></script>
 <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
 <script src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
 <script src="{{url('assets/js/swiper-bundle.min.js')}}"></script>
 <script src="{{url('assets/js/swiper.js')}}"></script>
 <script src="{{url('assets/js/jquery-countTo.js')}}"></script>
 <script src="{{url('assets/js/nouislider.min.js')}}"></script>
 <script src="{{url('assets/js/price-ranger.js')}}"></script>
 <script src="{{url('assets/js/magnific-popup.min.js')}}"></script>
 <script src="{{url('assets/js/wow.min.js')}}"></script>
 <script src="{{url('assets/js/map.min.js')}}"></script>
 <script src="{{url('assets/js/map.js')}}"></script>
 <script src="{{url('assets/js/main.js')}}"></script>
 <script src="{{url('assets/js/jquery.datetimepicker.full.js')}}"></script>
 <script src="{{url('assets/js/jquery.fancybox.min.js')}}"></script>
   <script>
     $(document).on('click', 'body *', function () {
         if (!(($(e.target).closest(".pq-search-form").length > 0) || ($(e.target).closest(".pq-search-form").length > 0))) {
             $('.pq-search-form').hide();
         }
     });
     jQuery(document).ready(function () {
         'use strict';
         jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
     });
 </script>
 
 <script type="text/javascript">
    $(function(){     
   var d = new Date(),        
       h = d.getHours(),
       m = d.getMinutes();
   if(h < 10) h = '0' + h; 
   if(m < 10) m = '0' + m; 
   $('input[type="time"][value="now"]').each(function(){ 
     $(this).attr({'value': h + ':' + m});
   });
 });
 </script>
 <script type="text/javascript">
    $(document).ready(function(){
 $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
   mainClass: 'mfp-with-zoom', 
   gallery:{
          enabled:true
       },
 
   zoom: {
     enabled: true, 
 
     duration: 300, // duration of the effect, in milliseconds
     easing: 'ease-in-out', // CSS transition easing function
 
     opener: function(openerElement) {
 
       return openerElement.is('img') ? openerElement : openerElement.find('img');
   }
 }
 
 });
 
 });
 </script>
 
 
 
 <!--popup-start-->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
         {{-- <script>
            var msg = '{{Session::get('success')}}';
            var exist = '{{Session::has('success')}}';
            if(exist){
              alert(msg);
            }
          </script> --}}
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ride Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
     <form action="{{url('findinform')}}" method="POST">
      @csrf
      <div class="modal-body">
         <div class="row">
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Your Name</label>
                  <div class="input-group">
                     <input type="text" class="form-control" name="name" id="location" placeholder="Your Name">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Mobile</label>
                  <div class="input-group">
                     <input type="text" class="form-control" name="mobile" id="location" placeholder="+91 9876543210">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Location</label>
                  <select class="custom-select custom-select-sm" name="location">
                     <option value="1">Hyderabad</option>
                     <option value="2">Visakhapatnam</option>
                     <option value="3">Vijayawada</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Pickup Date</label>
                  <div class="input-group">
                     <input type="date" class="form-control" name="pickdate" id="location" placeholder="12/04/2024">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Pickup Time</label>
                  <div class="input-group">
                     <input type="time" class="form-control" name="picktime" id="location" placeholder="10:00 PM">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Package</label>
                  <select class="custom-select custom-select-sm" name="package">
                     <option value="1">02 Days</option>
                     <option value="2">04 Days</option>
                     <option value="3">05 Days</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mb-0">
                  <label for="basic-url" class="form-label">Car Type</label>
                  <select class="custom-select custom-select-sm" name="cartype">
                     <option value="1">Innova Crysta  </option>
                     <option value="2">Tempo traveller</option>
                     <option value="3">Seltos</option>
                     <option value="4">Bus</option>
                  </select>
               </div>
            </div>
         </div>
         <button type="submit" name="submit" class=" search-btn btn theme-btn btn-radius btn-m w-35 form-submit mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit Now</button>
      </div>
     </form>
    </div>
 </div>
 </div>
 <!--popup-ending-->
 <!--enquiry-form-starting-->
 <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <script>
            var msg = '{{Session::get('success')}}';
            var exist = '{{Session::has('success')}}';
            if(exist){
              alert(msg);
            }
          </script>
          <form action="{{url('addenquiry')}}" method="POST">
            @csrf
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fal fa-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Full Name">
                @if($errors->has('name'))
                <span class=" error text-danger">{{$errors->first('name')}}</span>
                @endif
             </div>
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fal fa-mobile"></i></span>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" id="phoneNumber" oninput="validatePhoneNumber()"> <br>
                <div id="phoneError" style="color: red;"></div>
                @if($errors->has('mobile'))
               <span class="error text-danger">{{$errors->first('mobile')}}</span>
                @endif
               </div>
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fal fa-envelope-open"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email (Optional)">
            <br>    <div id="emailError" style="color: red;"></div>
            {{-- @if($errors->has('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif --}}
               </div>
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fal fa-envelope-open"></i></span>
                <select class="form-select" name="services" aria-label="Default select example">
                   <option selected>Select The Services</option>
                   <option value="1">SME Travel</option>
                   <option value="2">Aviation Travel Solutions</option>
                   <option value="3">Corporate Travel</option>
                   <option value="4">Gov & PSUs Travel</option>
                   <option value="5">Hospitality Travel</option>
                </select>
                @if($errors->has('services'))
               <span class="error text-danger">{{$errors->first('services')}}</span>
                @endif
             </div>
             <div class="modal-footer">
               <button type="submit" name="submit" class="btn btn-success ">Submit Now</button>
           
            </div>
          </form>
       </div>
      
    </div>
 </div>
 </div>
 <script>
   function validatePhoneNumber() {
var phoneNumber = document.getElementById('phoneNumber').value;
var phoneError = document.getElementById('phoneError');

// Check if the input is a number
if (isNaN(phoneNumber)) {
    phoneError.textContent = "Please enter numbers only.";
    return;
}

//Check if the input length is between 10 and 12
if (phoneNumber.length < 10 || phoneNumber.length > 12) {
    phoneError.textContent = "Phone number should be between 10 and 12 digits.";
    return;
}

// If all conditions are met, clear any existing error message
phoneError.textContent = "";
}

 // email validate

document.getElementById('email').addEventListener('input', function(event) {
            var emailInput = event.target.value.trim(); // Trim whitespace from the email
            
            // Regular expression to validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Check if the email is empty or doesn't match the regex pattern
            if (emailInput !== '' && !emailRegex.test(emailInput)) {
                document.getElementById('emailError').textContent = 'Please enter a valid Gmail address.';
            } else {
                document.getElementById('emailError').textContent = '';
            }
        });
</script>
 <!--enquiry-form-ending-->
 </body>
 </html>