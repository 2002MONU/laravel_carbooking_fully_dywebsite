<?php

use App\Http\Controllers\AdminController\AboutPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\LoginLogoutController;
use App\Http\Controllers\WebsiteController\IndexPageController;
use App\Http\Controllers\WebsiteController\PackagesController;
use App\Http\Controllers\WebsiteController\AboutsUsController;
use App\Http\Controllers\WebsiteController\ServicesController;
use App\Http\Controllers\WebsiteController\GalleryController;
use App\Http\Controllers\WebsiteController\ContactUsController;
use App\Http\Controllers\WebsiteController\FaqController;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\AdminController\HomePremiumController;
use App\Http\Controllers\AdminController\OurAchievementController;
use App\Http\Controllers\WebsiteController\EnquiryController;
use App\Http\Controllers\AdminController\AddGalleryController;
use App\Http\Controllers\FindPerfectCarController;
use App\Http\Controllers\HydrabadPackagePriceController;
use App\Http\Controllers\HydrabadPackagesController;
use App\Http\Controllers\CarBrandsContoller;
use App\Http\Controllers\ExtraFeatureController;
use App\Http\Controllers\FooterDetailsController;
use App\Http\Controllers\KeyFeaturedController;
use App\Http\Controllers\VizagPackageController;
use App\Http\Controllers\VizagPriceController;
use App\Models\Extrafeature;
use App\Models\Vizagpackage;

//use App\Models\Footerdetail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
  
  Route::get('/',[IndexPageController::class,'indexPage']);//website index page view
  Route::get('/premiumview/{slug}',[IndexPageController::class,'premiumview']);//website index page view
  Route::get('/packages',[PackagesController::class,'packages']); // website packages pages
  Route::get('/package_price/{city_id?}',[PackagesController::class,'package_price']); // website packages pages of hydrabad
  Route::get('/vizagpackage_price/{city_id?}',[PackagesController::class,'vizagpackage_price']); // website packages pages of vizag
  Route::get('/aboutUs',[AboutsUsController::class,'aboutUs']); // website abouts page
  Route::get('/services',[ServicesController::class,'sercices']); // website service
  Route::get('/gallery',[GalleryController::class,'gallery']); // website gallery page
  Route::get('/faq',[FaqController::class,'faq']); // website faq 
  Route::get('/contactUs',[ContactUsController::class,'contactUs']); // website contact page

  //add Enquiry form 
  Route::post('/addenquiry',[EnquiryController::class,'addenquiry']);  // website page send enquiry message
  Route::post('/contactmessage',[ContactUsController::class,'contactUspost']); // send contact message 

   // Route::post('/findperfect',[FindPerfectCarController::class,'findPerfectCar']);
   // Ride information 
   Route::post('/findinform',[FindPerfectCarController::class,'findcarinform']); 

    Route::group([],function(){
    Route::group(['middleware' => 'guest'], function(){

    Route::get('admin/login',[LoginLogoutController::class,'login'])->name('admin.login'); // admin login
    Route::post('admin/login',[LoginLogoutController::class,'postLogin']);
    });
 
     
    Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');//dashboard 
    Route::get('logout',[LoginLogoutController::class,'adminlogout']); // admin logout
    Route::get('/homebanner/{id}',[HomeController::class,'homebanner']); // update banner details
    Route::post('/homepost/{id}',[HomeController::class,'homebannerpost']);
    Route::get('/homeBannerDetails',[HomeController::class,'homeBannerDetails']); // home banner details
    Route::get('/addpremiumtravels',[HomePremiumController::class,'addpremiumtravels']); // add premiumdetails, travesl
    Route::post('/premiumTravelsPost',[HomePremiumController::class,'premiumTravelsPost']);
    Route::get('/premiumTravelsdetails',[HomePremiumController::class,'premiumTravelsdetails']); // premium details travels
    Route::get('/updatepremium/{id}',[HomePremiumController::class,'updatepremium']);  // update premium travels 
    Route::post('/updatepremiumtravels/{id}',[HomePremiumController::class,'updatepremiumtravels']);
    Route::get('/deletepremium/{id}',[HomePremiumController::class,'deletepremium']);  // delete premium details
    Route::get('/ourachievement/{id}',[OurAchievementController::class,'ourachievement']); // update our achievement details form
    Route::post('/ourachievementpost/{id}',[OurAchievementController::class,'ourachievementpost']);  // update our achievement details 
    Route::get('/achievementdetails',[OurAchievementController::class,'achievementdetails']);  // show our achievement details in admin
   
  // add car gallery and delete and view car gallery 
    Route::get('/gallerydetails',[AddGalleryController::class,'gallerydetails']);  // gallery details
    Route::get('/addgallery',[AddGalleryController::class,'addgallery']);  // add gallery form
    Route::post('/gallerypost',[AddGalleryController::class,'addgalleryPost']); // add gallery
    Route::get('/gallerydelete/{id}',[AddGalleryController::class,'gallerydelete']); // gallery image delete
    Route::get('/updategallery/{id}',[AddGalleryController::class,'updategallery']); // update gallery form
    Route::post('/updategall/{id}',[AddGalleryController::class,'updategallerypost']); //update gallery 
    Route::get('/contactmessageshow',[ContactUsController::class,'contactmessage']); // show contact message in admin panel
    Route::get('/contactdelete/{id}',[ContactUsController::class,'contactdelete']);
    // about page
    Route::get('/aboutpagedetails',[AboutPageController::class,'aboutpagedetails']);
    Route::get('/aboutpage/{id}',[AboutPageController::class,'aboutpage']);
    Route::post('/aboutpageed/{id}',[AboutPageController::class,'aboutpageedit']);



    // Hydrabad pacakges details add cities 
    Route::get('hydrabadpakagesdetails',[HydrabadPackagesController::class,'hydrabadpakagesdetails']);
    Route::get('addhydrapackage',[HydrabadPackagesController::class,'addhydrapackage']);
    Route::post('hydrapackage',[HydrabadPackagesController::class,'addhydrapackagepost']);
    Route::get('hydrapackageupdate/{id}',[HydrabadPackagesController::class,'hydrapackageupdate']);
    Route::post('hydrapackageup/{id}',[HydrabadPackagesController::class,'uphydrapackage']);
    Route::get('hydrapackagedelete/{id}',[HydrabadPackagesController::class,'hydrapackagedelete']);

    // hydrabad packages price details add price and car details
    Route::get('/hydrabadpakagesview',[HydrabadPackagePriceController::class,'hydrabadpakagesview']);
    Route::get('/hydrabadprice',[HydrabadPackagePriceController::class,'hydrabadprice']);
    Route::post('/hydrabadpricead',[HydrabadPackagePriceController::class,'hydrabadpriceadd']);

    Route::get('/packagepricedelete/{id}',[HydrabadPackagePriceController::class,'packagepricedelete']); // hydrabad package delete
    Route::get('/packagepriceupdate/{id}',[HydrabadPackagePriceController::class,'packagepriceupdate']);
    Route::post('/packagepricepostup/{id}',[HydrabadPackagePriceController::class,'packagepricepost']);

       // change password admin
    Route::get('/changePassword',[LoginLogoutController::class,'changePassword']);
    Route::post('/changePasswordadmin',[LoginLogoutController::class,'changePasswordpost']);

    // enquiry message delete
     Route::get('/enquirydelete/{id}',[EnquiryController::class,'enquirydelete']);
    Route::get('/enquirymessage',[EnquiryController::class,'enquirymessage']);  // enquiry message show 

    // explore all car brands add  
    Route::get('/carbrandsdetails',[CarBrandsContoller::class,'carbrandsdetails']);
    Route::get('/addcarbrands',[CarBrandsContoller::class,'addcarbrands']);
    Route::post('/caraddpost',[CarBrandsContoller::class,'caraddbrands']); // add cars brands
    Route::get('/carsupdate/{id}',[CarBrandsContoller::class,'carsupdate']);
    Route::post('/carupdateposte/{id}',[CarBrandsContoller::class,'carupdateposte']);
    Route::get('/carbrandsdelete/{id}',[CarBrandsContoller::class,'carbrandsdelete']);

    // footer details 
    Route::get('/footerdetails',[FooterDetailsController::class,'footerdetails']);
    Route::get('/footerupdate/{id}',[FooterDetailsController::class,'footerupdate']);
    Route::post('/footerdetailspost/{id}',[FooterDetailsController::class,'footerpost']);

    // Vizag Package DEtails 
    Route::get('vizagpakagesdetails',[VizagPackageController::class,'vizagpakagesdetails']);
    Route::get('/addvizagpackage',[VizagPackageController::class,'addvizagpackage']);
    Route::post('/vizagpackagepost',[VizagPackageController::class,'vizagpackagepost']);
    Route::get('/vizagcityupdate/{id}',[VizagPackageController::class,'vizagcityupdate']);
    Route::post('/vizagcityup/{id}',[VizagPackageController::class,'vizagupdate']);

    // add package form vizag 

    Route::get('/vizagprice',[VizagPriceController::class,'vizagpricedetails']);
    Route::get('/addprice',[VizagPriceController::class,'addprice']);
    Route::post('/addvizagprice',[VizagPriceController::class,'addvizagprice']);
    Route::get('/vizagpricedelete/{id}',[VizagPriceController::class,'vizagpricedelete']); // delete vizag package price details and cars 

    Route::get('/vizagpriceupdate/{id}',[VizagPriceController::class,'vizagpriceupdate']); // vizag package price details update 
    Route::post('/vizagpupdate/{id}',[VizagPriceController::class,'vizagpupdate']);


    // key featured details
    Route::get('/keyfeatured',[KeyFeaturedController::class,'keyfeatured']);
    Route::get('/addkeyfeatured',[KeyFeaturedController::class,'addkeyfeatured']);
    Route::post('/addkeyfeaturedPost',[KeyFeaturedController::class,'addkeyfeaturedPost']);
    Route::get('/featureupdate/{id}',[KeyFeaturedController::class,'featureupdate']);
    Route::post('/keyfeatureupdate/{id}',[KeyFeaturedController::class,'keyfeatureupdate']);
    Route::get('/keyfeatureddelete/{id}',[KeyFeaturedController::class,'keyfeatureddelete']);

    // add extra features 
    Route::get('/extrafeatured',[ExtraFeatureController::class,'extrafeatured']);
    Route::get('/addextrafeatured',[ExtraFeatureController::class,'addextrafeatured']);
    Route::post('/addextrafeaturedPost',[ExtraFeatureController::class,'addextrafeaturedPost']);
    Route::get('/extrafeatureddelete/{id}',[ExtraFeatureController::class,'extrafeatureddelete']);
    Route::get('/extrafeatureupdate/{id}',[ExtraFeatureController::class,'extrafeatureupdate']);
    Route::post('/updateextraPost/{id}',[ExtraFeatureController::class,'updateextraPost']);

    //aboutpage banner 
    Route::get('/aboutHome/{id}',[AboutsUsController::class,'aboutHome']);
    Route::post('/aboutedit/{id}',[AboutsUsController::class,'aboutedit']);
    Route::get('/abouthomedetails',[AboutsUsController::class,'abouthomedetails']);
  });
  });