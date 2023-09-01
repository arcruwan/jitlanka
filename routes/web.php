<?php

use App\Http\Controllers\AirPortController;
use App\Http\Controllers\ambuluwawaTourController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\contactUs;
use App\Http\Controllers\contactUsController;
use App\Http\Controllers\dashboardGalleryController;
use App\Http\Controllers\daytourContoller;
use App\Http\Controllers\ellaTourContoller;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\kandy3TempleTourController;
use App\Http\Controllers\kandyCityTourContoller;
use App\Http\Controllers\kithulgalaTourContoller;
use App\Http\Controllers\knucklesTourContoller;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\minnariyaEcoParkTourContoller;
use App\Http\Controllers\nuwaraeliyaNanuoyaTourControllee;
use App\Http\Controllers\pinnawalaTourController;
use App\Http\Controllers\polonnaruwaTourController;
use App\Http\Controllers\roundTourEightController;
use App\Http\Controllers\roundTourElevenController;
use App\Http\Controllers\roundTourFiveController;
use App\Http\Controllers\roundTourFourController;
use App\Http\Controllers\roundTourNineController;
use App\Http\Controllers\roundTourOneController;
use App\Http\Controllers\roundToursController;
use App\Http\Controllers\roundTourSevenController;
use App\Http\Controllers\roundTourSixController;
use App\Http\Controllers\roundTourTenController;
use App\Http\Controllers\roundTourThreeController;
use App\Http\Controllers\roundTourTwoController;
use App\Http\Controllers\SigiriyaPidurangalaContoller;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'index'])->name('homeNew');


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [landingPageController::class,'index'])->name('home');


// --------- day tours
Route::get('/daytours', [daytourContoller::class,'index'])->name('daytours');
Route::get('/KandyCityTours', [kandyCityTourContoller::class,'index'])->name('KandyCityTours');
Route::get('/SigiriyaPidurangalaTour', [SigiriyaPidurangalaContoller::class,'index'])->name('SigiriyaPidurangalaTour');
Route::get('/PolonnaruwaTour', [polonnaruwaTourController::class,'index'])->name('PolonnaruwaTour');
Route::get('/knucklesTour', [knucklesTourContoller::class,'index'])->name('knucklesTour');
Route::get('/AmbuluwawaTour', [ambuluwawaTourController::class,'index'])->name('AmbuluwawaTour');
Route::get('/MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark', [minnariyaEcoParkTourContoller::class,'index'])->name('MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark');
Route::get('/PinnawalaElephantOrphanageTour', [pinnawalaTourController::class,'index'])->name('PinnawalaElephantOrphanageTour') ;
Route::get('/Kandy3TempleTour', [kandy3TempleTourController::class,'index'])->name('Kandy3TempleTour');
Route::get('/NuwaraeliyaNanuoyaTour', [nuwaraeliyaNanuoyaTourControllee::class,'index'])->name('NuwaraeliyaNanuoyaTour');
Route::get('/EllaTour', [ellaTourContoller::class,'index'])->name('EllaTour');
Route::get('/KithulgalaTour', [kithulgalaTourContoller::class,'index'])->name('KithulgalaTour');
Route::get('/airPort', [AirPortController::class,'index'])->name('airPort');

// --------- Round Tours
Route::get('/RoundTours', [roundToursController::class,'index'])->name('RoundTours');
Route::get('/Kandy NuwaraEliya Colombo', [roundTourOneController::class,'index']);
Route::get('/Kandy Ella Mirissa Colombo', [roundTourTwoController::class,'index']);
Route::get('/Sigiriya Dambulla Kandy NuwaraEliya Bentota Negambo', [roundTourThreeController::class,'index']);
Route::get('/Sigiriya Dambulla Kandy Ella Yala Galle Colombo', [roundTourFourController::class,'index']);
Route::get('/Sigiriya Dambulla Kandy Ella Yala Tangalle Galle Negombo', [roundTourFiveController::class,'index']);
Route::get('/Kandy Peradeniya_Royal_Botanical_Gardens Golden_Caves_Temple Polonnaruwa Sigiriya Trincomalee Pigeon_Island Negombo', [roundTourSixController::class,'index']);
Route::get('/Benthota Madu_River Galle Mirissa Udawalawe_National_Park Ella Nuwaraeliya Kandy Peradeniya_Royal_Botanical_Gardens', [roundTourSevenController::class,'index']);
Route::get('/Negombo Anuradhapura Wilpattu_National_Park Trincomalee Pigeon_Island Old_Dutch_Fort Sigiriya Golden_Caves_Temple Knuckles Peradeniya_Royal_Botanical_Gardens ', [roundTourEightController::class,'index']);
Route::get('/Dambulla Polonnaruwa Sigiriya kandy Udawattakele_Forest_Sanctuary Nuwaraeliya Horton_Plains_National_Park Ella Udawalawa_National_Park Benthota Madu_River ', [roundTourNineController::class,'index']);
Route::get('/Negombo Anuradhapura Wilpattu Dambulla Polonnaruwa Sigiriya Pidurangala Kandy Kithulgala Benthota Madu_River ', [roundTourTenController::class,'index']);
Route::get('/Negombo Dambulla Polonnaruwa Sigiriya kandy Nuwaraeliya Yala Mirissa Benthota Madu_River ', [roundTourElevenController::class,'index']);

// ------------- gallery
Route::get('/gallery', [galleryController::class,'index']);
Route::post('/AddImageToGallery',[galleryController::class,'SaveImage']);
Route::get('/getGalleryImage',[galleryController::class,'GetImage']);
Route::delete('/DeleteImage/{id}',[galleryController::class,'deleteImage']);


// -------------- Dashboard -------------
Route::get('/dashGallery', [dashboardGalleryController::class,'index']);

//email routes
Route::post('/sendMail',[contactUs::class,'send'])->name('sendMail');

// contact us
Route::get('/contactUs', [contactUsController::class,'index'])->name('contactUs');

// sitemap
Route::get('/sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('https://jitlankatours.com'))
        ->add(Url::create('https://jitlankatours.com/daytours'))
        ->add(Url::create('https://jitlankatours.com/KandyCityTours'))
        ->add(Url::create('https://jitlankatours.com/SigiriyaPidurangalaTour'))
        ->add(Url::create('https://jitlankatours.com/PolonnaruwaTour'))
        ->add(Url::create('https://jitlankatours.com/knucklesTour'))
        ->add(Url::create('https://jitlankatours.com/AmbuluwawaTour'))
        ->add(Url::create('https://jitlankatours.com/MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark'))
        ->add(Url::create('https://jitlankatours.com/PinnawalaElephantOrphanageTour'))
        ->add(Url::create('https://jitlankatours.com/Kandy3TempleTour'))
        ->add(Url::create('https://jitlankatours.com/NuwaraeliyaNanuoyaTour'))
        ->add(Url::create('https://jitlankatours.com/EllaTour'))
        ->add(Url::create('https://jitlankatours.com/KithulgalaTour'))
        ->add(Url::create('https://jitlankatours.com/airPort'))

        ->add(Url::create('https://jitlankatours.com/RoundTours'))
        ->add(Url::create('https://jitlankatours.com/4Days3Nights'))
        ->add(Url::create('https://jitlankatours.com/5Days4Nights'))
        ->add(Url::create('https://jitlankatours.com/6Days5Nights'))
        ->add(Url::create('https://jitlankatours.com/7Days6Nights'))
        ->add(Url::create('https://jitlankatours.com/8Days7Nights'))
        ->add(Url::create('https://jitlankatours.com/9Days8Nights'))
        ->add(Url::create('https://jitlankatours.com/10Days9Nights'))
        ->add(Url::create('https://jitlankatours.com/11Days10Nights'))
        ->add(Url::create('https://jitlankatours.com/12Days11Nights'))
        ->add(Url::create('https://jitlankatours.com/13Days12Nights'))
        ->add(Url::create('https://jitlankatours.com/14Days13Nights'))
        ->add(Url::create('https://jitlankatours.com/gallery'))

        // You can continue to add more URLs here as needed
        ->writeToFile(public_path('sitemap.xml'));

    // return 'Sitemap generated';
    return response()->file(public_path('sitemap.xml'));
});





