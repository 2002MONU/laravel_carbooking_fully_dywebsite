@extends('website.layouts.app')
@section('mainsection')
<div class="tf-page-title mt-10" style="background-image: url(assets/img/page-title.jpg);background-size:cover;">
    <div class="themesflat-container full">
        <div class="page-title t-al-center">
            <h1 class="main-title">Contact Us</h1>
        </div>
    </div>
</div>
<div class="widget-contact-us">
    <div class="themesflat-container">
        <div class="contact-us">
            <div class="row justify-contnet-center wow fadeInLeft animated">
                <div class="col-md-12 col-lg-4">
                    <div class="contact-us-box">
                        <div class="icon">
                            <img src="assets/img/call.gif" alt="">
                        </div>
                        <div class="title">Phone Number</div>
                        <p class="des"><a href="tel:{{$footerdetails->mobile}}">+91 {{$footerdetails->mobile}}</a></p>
                        {{-- <p class="des"><a href="tel:9000000668">+91 9000000668</a></p> --}}
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="contact-us-box">
                        <div class="icon">
                            <img src="assets/img/location.gif" alt="">
                        </div>
                        <div class="title">location Address </div>
                        <p class="des">{{$footerdetails->address}}</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="contact-us-box">
                        <div class="icon">
                            <img src="assets/img/email.gif" alt="">
                        </div>
                        <div class="title">Contact Mail</div>
                        <p class="des"><a href="mailto:butterflytravels@gmail.com">{{$footerdetails->email}}</a></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- contact-form-start-->
<div class="widget-contact-form">
    <div class="themesflat-container">
        <div class="row justify-contnet-center align-items-center">
            <div class="col-lg-7">
                <div class="contact-form wow fadeInUp animated">
                    <div class="form-buy-car-form">
                        <div class="title text-center mb-3">Contact us Today</div>
                        {{-- <script>
                            var msg = '{{Session::get('success')}}';
                            var exist = '{{Session::has('success')}}';
                            if(exist){
                              alert(msg);
                            }
                          </script> --}}
                        <form action="{{url('contactmessage')}}" class="form-buy-car" method="POST" id="contactForm">
                            @csrf
                            <div class="row justify-contnet-center">
                                <div class="col-lg-6">
                                    <input type="text" name="fname" class="input-buy-car" placeholder="Fist Name" value="{{old('fname')}}">
                                    @if($errors->has('fname'))
                                    <span class="error text-danger">{{$errors->first('fname')}}</span>
                                     @endif
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="lname" class="input-buy-car" value="{{old('lname')}}" placeholder="Last Name">
                                    @if($errors->has('lname'))
                                    <span class="error text-danger">{{$errors->first('lname')}}</span>
                                     @endif
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="mobile" class="input-buy-car" id="phoneNumber" oninput="validatePhoneNumber()" placeholder="Mobile Number" value="{{old('mobile')}}">
                                    <div id="phoneError" style="color: red;"></div>
                                    @if($errors->has('mobile'))
                                    <span class="error text-danger">{{$errors->first('mobile')}}</span>
                                     @endif
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" class="input-buy-car" id="email" placeholder="Email Address" value="{{old('email')}}">
                                    <div id="emailError" style="color: red;"></div>
                                    @if($errors->has('email'))
                                    <span class="error text-danger">{{$errors->first('email')}}</span>
                                     @endif
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="input-buy-car" name="message"  placeholder="Write Message.....">{{old('message')}}</textarea>
                                    @if($errors->has('message'))
                                    <span class="error text-danger">{{$errors->first('message')}}</span>
                                     @endif
                                </div>
                                <div class="col-lg-4">
                                    <label for="captcha">CAPTCHA Code: <span id="captchaCode">{{ $captcha }}</span></label>
                            <!-- Input field for the user to enter the CAPTCHA code -->
                                </div>
                            <div class="col-lg-4">
                            <input type="text" id="captcha" name="captcha" placeholder="Enter CAPTCHA code">
                            <!-- Display validation errors -->
                                @error('captcha')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                <div class="col-lg-2">
                                    <button type="button" id="refreshCaptcha"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="w-40 mt-3 mb-3 contact-btn"><i class="fab fa-telegram-plane"></i>Submit Your Query</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-img wow fadeInRight animated" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="assets/img/car-contact.png" alt="#" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- contact-form-ending-->
<script>
    // JavaScript for refreshing CAPTCHA
    document.getElementById('refreshCaptcha').addEventListener('click', function() {
        // Generate a new random CAPTCHA code
        var newCaptcha = Math.floor(Math.random() * 900000) + 100000;
        // Update the displayed CAPTCHA code
        document.getElementById('captchaCode').innerText = newCaptcha;
    });

    // JavaScript for client-side validation
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        var captchaInput = document.getElementById('captcha').value;
        var captchaCode = document.getElementById('captchaCode').innerText;
        if (captchaInput !== captchaCode) {
            alert('Invalid CAPTCHA code. Please try again.');
            event.preventDefault(); // Prevent form submission
        }
    });


    // Phone number validate
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
@endsection