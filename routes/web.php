<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;


use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\AteendesController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('FrontPages.panel');
})->name('dashboard');
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/email', function () {
    return new registrationEmail();
});

// ----------------------------------------------------------------------------------
Route::get('/admin', 'MainController@panel')->name('panel')->middleware('auth');
Route::get('/home', 'MainController@Home')->name('homeweb');
Route::get('/thanks', 'MainController@thanks')->name('thanks');
Route::get('/adduser', 'MainController@adduser')->name('newuser');


Route::get('/crowd', 'MainController@crowd')->name('crowdweb');

Route::get('/about', 'MainController@about')->name('aboutweb');

Route::get('/contact', 'MainController@contact')->name('contactweb');

Route::get('/workshops', 'MainController@workshops')->name('workshopsweb');

// Route::get('/speakers', 'MainController@speakers')->name('speakersweb');
Route::get('/speakers' , [SpeakerController::class,'index'])->name('speakersweb');
Route::get('/speakers/create', [SpeakerController::class,'create']);
Route::post('/speakers/store', [SpeakerController::class,'store']);
Route::get('/home/register', [AteendesController::class,'create'])->name('apply_register');
Route::post('/store', [AteendesController::class,'store']);
Route::resource('speaker', SpeakersController::class);
Route::resource('ateende', AteendeController::class);
Route::get('/popup/{id}', [SpeakerController::class, "show"])->name("popup.show");


// Route::get('/speakers/register', [SpeakerController::class , "create"]);
// Route::post('/speakers/store', [SpeakerController::class , "store"]);

// Route::get('/speakers', 'MainController@speakers')->name('speakersweb');


// ----------------------------------------------------------------------------------

Route::get('/hackathons', 'MainController@hackathon')->name('hackathonweb');

Route::get('/hack', 'MainController@hackathonForm')->name('apply_hackathon');

Route::resource('hackathon', 'HackathonController');
// added by omnia====//
Route::get('/workshopsDs', 'MainController@workshopsDs')->name('workshopsDs');

// Route::get('/workshopform', 'MainController@workshopform')->name('workshopform');
Route::get('/workshop.register', [WorkshopController::class , "create"])->name('apply_workshop');
Route::post('/workshops.store', [WorkshopController::class , "store"]);
//=========//

Route::resource('workshop', RWorkshopscontroller::class);


// ----------------------------------------------------------------------------------
Route::get('/partners', 'MainController@partnersForm')->name('apply_partner');
//Route::get('/partner', 'MainController@partner')->name('partner');
Route::resource('partner', 'PartnerController');
//------------------------------------------------------------------//
Route::get('/startups', 'MainController@startupsForm')->name('apply_startup');


Route::resource('startup', 'StartupController');
//----------------------------------------------------------//
Route::get('/attendees', 'MainController@attendeesForm')->name('apply_attendee');
Route::resource('attendee', 'AttendeeController');
//---------------------------------------------//