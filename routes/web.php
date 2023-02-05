<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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


// Route::post('/uploadArbitrationImg','App\Http\Controllers\StudentController@uploadArbitrationImg');
// Route::get('/test','App\Http\Controllers\StudentController@test');


Route::get('/pt','App\Http\Controllers\StudentController@posts');



//Daily Tasks:
Route::get('/add_daily','App\Http\Controllers\StudentController@add_daily');
Route::post('/save_daily', 'App\Http\Controllers\StudentController@save_daily');
Route::get('/daily_management','App\Http\Controllers\StudentController@daily_management');
Route::post('/search_daily', 'App\Http\Controllers\StudentController@print_daily');


//Login
Route::get('/login','App\Http\Controllers\StudentController@login');
Route::post('/admin_home','App\Http\Controllers\StudentController@home_system');
Route::post('/home_system','App\Http\Controllers\StudentController@home_system');
Route::get('/home_system','App\Http\Controllers\StudentController@admin_system');
Route::get('/admin_home','App\Http\Controllers\StudentController@admin');
Route::get('/search/{ID}', 'App\Http\Controllers\StudentController@printSt_get');
Route::get('/editRegister/{ID}', 'App\Http\Controllers\StudentController@editRegister');
Route::post('/updateRegister', 'App\Http\Controllers\StudentController@updateRegister');

//Register New User
Route::get('/registeruser','App\Http\Controllers\StudentController@RegisterUser');
Route::post('/saveuser','App\Http\Controllers\StudentController@SaveUser');



//add student
// Route::post('/record', 'App\Http\Controllers\StudentController@record');
Route::post('/save', 'App\Http\Controllers\StudentController@save');
// Route::post('save',[StudentController::class],'save')->name('student.save');
Route::get('/register','App\Http\Controllers\StudentController@newst');

Route::get('/print','App\Http\Controllers\StudentController@printSt');

//Search by Name and Email
// Route::post('/search', 'App\Http\Controllers\StudentController@printSt_post');
//Route::get('/printView','App\Http\Controllers\StudentController@printSt');

// Route::get('home','App\Http\Controllers\EmployeeController@home');
// Route::get('/register','App\Http\Controllers\StudentController@student');
// Route::get('/succeed','App\Http\Controllers\StudentController@succeed');






/////////////////////////////////////////////////



//Savvy Amu Start

// Route::get('/', function () {
//     return view('home.index');
// });


Route::get('/','App\Http\Controllers\Home@home');
Route::get('/main_details&{ID}','App\Http\Controllers\Home@details');
Route::get('/web_details&{ID}','App\Http\Controllers\Home@web_details');
Route::get('/tech_details&{ID}','App\Http\Controllers\Home@tech_details');

// Route::post('/admin_home','App\Http\Controllers\Home@admin_home');
Route::get('/admin_home_web','App\Http\Controllers\Home@admin');
Route::get('/deleteSlideImg&{Photo}','App\Http\Controllers\Home@deleteSlideImg');
Route::post('/uploadSlideImg','App\Http\Controllers\Home@uploadSlideImg');
Route::get('/uploadSlideImg','App\Http\Controllers\Home@admin');
Route::post('/updateMainTitle', 'App\Http\Controllers\Home@updateMainTitle');
Route::get('/updateMainTitle', 'App\Http\Controllers\Home@admin');
Route::post('/updateMainInfo', 'App\Http\Controllers\Home@updateMainInfo');
Route::get('/updateMainInfo', 'App\Http\Controllers\Home@admin');
Route::post('/updateBannerTitle', 'App\Http\Controllers\Home@updateBannerTitle');
Route::get('/updateBannerTitle', 'App\Http\Controllers\Home@admin');
Route::get('/deleteMainIcon&{ID}&{Photo}','App\Http\Controllers\Home@deleteMainIcon');
Route::post('/uploadMainIcon','App\Http\Controllers\Home@uploadMainIcon');
Route::get('/uploadMainIcon','App\Http\Controllers\Home@admin');
Route::post('/updateBannerTitle1', 'App\Http\Controllers\Home@updateBannerTitle1');
Route::get('/updateBannerTitle1', 'App\Http\Controllers\Home@admin');
Route::get('/deleteMainWeb&{ID}&{Photo}','App\Http\Controllers\Home@deleteMainWeb');
Route::post('/uploadMainWeb','App\Http\Controllers\Home@uploadMainWeb');
Route::get('/uploadMainWeb','App\Http\Controllers\Home@admin');
Route::post('/updateBannerTitle2', 'App\Http\Controllers\Home@updateBannerTitle2');
Route::get('/updateBannerTitle2', 'App\Http\Controllers\Home@admin');
Route::post('/updateMainMiddle2', 'App\Http\Controllers\Home@updateMainMiddle2');
Route::get('/updateMainMiddle2', 'App\Http\Controllers\Home@admin');
Route::post('/updateMainMiddleInfo2', 'App\Http\Controllers\Home@updateMainMiddleInfo2');
Route::get('/updateMainMiddleInfo2', 'App\Http\Controllers\Home@admin');
Route::get('/deleteMainMiddle3&{ID}&{Photo}','App\Http\Controllers\Home@deleteMainMiddle3');
Route::post('/uploadMainMiddle3','App\Http\Controllers\Home@uploadMainMiddle3');
Route::get('/uploadMainMiddle3','App\Http\Controllers\Home@admin');
Route::get('/deleteWorkedWith&{ID}&{Photo}','App\Http\Controllers\Home@deleteWorkedWith');
Route::post('/uploadWorkedWith','App\Http\Controllers\Home@uploadWorkedWith');
Route::get('/uploadWorkedWith','App\Http\Controllers\Home@admin');





// Route::get('/login','Home@login');
Route::get('/logout','App\Http\Controllers\Home@sessionOut');



//chancellor Message
Route::get('/chancellor','App\Http\Controllers\AboutCtrl@chancellorFunc');
Route::get('/admin_about','App\Http\Controllers\AboutCtrl@admin');
Route::get('/deleteAboutMainImg&{Photo}','App\Http\Controllers\AboutCtrl@deleteAboutMainImg');
Route::post('/uploadAboutMainImg','App\Http\Controllers\AboutCtrl@uploadAboutMainImg');
Route::get('/uploadAboutMainImg','App\Http\Controllers\AboutCtrl@admin');
Route::post('/_updateAboutMainTitle', 'App\Http\Controllers\AboutCtrl@updateAboutMainTitle');
Route::get('/updateAboutMainTitle', 'App\Http\Controllers\AboutCtrl@admin');
Route::post('/updateAboutMainInfo', 'App\Http\Controllers\AboutCtrl@updateAboutMainInfo');
Route::get('/updateAboutMainInfo', 'App\Http\Controllers\AboutCtrl@admin');
Route::post('/updateAboutMiddleTitle', 'App\Http\Controllers\AboutCtrl@updateAboutMiddleTitle');
Route::get('/updateAboutMiddleTitle', 'App\Http\Controllers\AboutCtrl@admin');
Route::post('/updateAboutMiddleInfo', 'App\Http\Controllers\AboutCtrl@updateAboutMiddleInfo');
Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
Route::post('/uploadAboutFooter','App\Http\Controllers\AboutCtrl@uploadAboutFooter');
Route::get('/uploadAboutFooter','App\Http\Controllers\AboutCtrl@admin');
Route::get('/deleteAboutFooter&{ID}&{Photo}','App\Http\Controllers\AboutCtrl@deleteAboutFooter');


//Founder Message
Route::get('/founderMsg','App\Http\Controllers\FounderCtrl@founderMsgFunc');
Route::get('/admin_founder','App\Http\Controllers\FounderCtrl@admin');
Route::get('/deleteFounderMainImg&{Photo}','App\Http\Controllers\FounderCtrl@deleteAboutMainImg');
Route::post('/uploadFounderMainImg','App\Http\Controllers\FounderCtrl@uploadFounderMainImg');
Route::get('/uploadFounderMainImg','App\Http\Controllers\FounderCtrl@admin');
Route::post('/updateFounderMainTitle', 'App\Http\Controllers\FounderCtrl@updateFounderMainTitle');
Route::get('/updateFounderMainTitle', 'App\Http\Controllers\FounderCtrl@admin');
Route::post('/updateFounderMainInfo', 'App\Http\Controllers\FounderCtrl@updateFounderMainInfo');
Route::get('/updateFounderMainInfo', 'App\Http\Controllers\FounderCtrl@admin');
Route::post('/updateAboutMiddleTitle', 'App\Http\Controllers\FounderCtrl@updateAboutMiddleTitle');
Route::get('/updateAboutMiddleTitle', 'App\Http\Controllers\FounderCtrl@admin');
Route::post('/updateAboutMiddleInfo', 'App\Http\Controllers\FounderCtrl@updateAboutMiddleInfo');
Route::get('/updateAboutMiddleInfo', 'App\Http\Controllers\FounderCtrl@admin');
Route::post('/uploadAboutFooter','App\Http\Controllers\FounderCtrl@uploadAboutFooter');
Route::get('/uploadAboutFooter','App\Http\Controllers\FounderCtrl@admin');
Route::get('/deleteAboutFooter&{ID}&{Photo}','App\Http\Controllers\FounderCtrl@deleteAboutFooter');






//about spinghar university
Route::get('/aboutUniversity','App\Http\Controllers\ServiceCtrl@aboutUniversityFunc');

Route::get('/service_details&{ID}','App\Http\Controllers\ServiceCtrl@service_details');
Route::get('/service_details1&{ID}','App\Http\Controllers\ServiceCtrl@service_details1');



Route::get('/admin_service','App\Http\Controllers\ServiceCtrl@admin');
Route::get('/deleteServiceMainImg&{MainImage}','App\Http\Controllers\ServiceCtrl@deleteServiceMainImg');
Route::post('/uploadServiceMainImg','App\Http\Controllers\ServiceCtrl@uploadServiceMainImg');
Route::get('/uploadServiceMainImg','App\Http\Controllers\ServiceCtrl@admin');
Route::post('/updateServiceMainTitle', 'App\Http\Controllers\ServiceCtrl@updateServiceMainTitle');
Route::get('/updateServiceMainTitle', 'App\Http\Controllers\ServiceCtrl@admin');
Route::post('/updateServiceMainInfo', 'App\Http\Controllers\ServiceCtrl@updateServiceMainInfo');
Route::get('/updateServiceMainInfo', 'App\Http\Controllers\ServiceCtrl@admin');
Route::get('/deleteServiceIcon&{ID}&{Photo}','App\Http\Controllers\ServiceCtrl@deleteServiceIcon');
Route::post('/uploadServiceIcon','App\Http\Controllers\ServiceCtrl@uploadServiceIcon');
Route::get('/uploadServiceIcon','App\Http\Controllers\ServiceCtrl@admin');
Route::get('/deleteServiceMiddle1&{ID}','App\Http\Controllers\ServiceCtrl@deleteServiceMiddle1');
Route::post('/uploadServiceMiddle1','App\Http\Controllers\ServiceCtrl@uploadServiceMiddle1');
Route::get('/uploadServiceMiddle1','App\Http\Controllers\ServiceCtrl@admin');
Route::post('/updateServiceMiddle2Title', 'App\Http\Controllers\ServiceCtrl@updateServiceMiddle2Title');
Route::get('/updateServiceMiddle2Title', 'App\Http\Controllers\ServiceCtrl@admin');
Route::post('/updateServiceMiddle2Info', 'App\Http\Controllers\ServiceCtrl@updateServiceMiddle2Info');
Route::get('/updateServiceMiddle2Info', 'App\Http\Controllers\ServiceCtrl@admin');
Route::get('/deleteServiceMiddle3&{ID}&{Photo}','App\Http\Controllers\ServiceCtrl@deleteServiceMiddle3');
Route::post('/uploadServiceMiddle3','App\Http\Controllers\ServiceCtrl@uploadServiceMiddle3');
Route::get('/uploadServiceMiddle3','App\Http\Controllers\ServiceCtrl@admin');
Route::get('/deleteServiceFooter&{ID}&{Photo}','App\Http\Controllers\ServiceCtrl@deleteServiceFooter');
Route::post('/uploadServiceFooter','App\Http\Controllers\ServiceCtrl@uploadServiceFooter');
Route::get('/uploadServiceFooter','App\Http\Controllers\ServiceCtrl@admin');




//Strategic Plan
Route::get('/strategic','App\Http\Controllers\StrategicCtrl@strategicFunc');
// Route::get('/admin_about1565','AboutCtrl@admin');
// Route::get('/deleteAboutMainImg12&{Photo}','AboutCtrl@deleteAboutMainImg');
// Route::post('/uploadAboutMainImg12','AboutCtrl@uploadAboutMainImg');
// Route::get('/uploadAboutMainImg12','AboutCtrl@admin');
// Route::post('/updateAboutMainTitle12', 'AboutCtrl@updateAboutMainTitle');
// Route::get('/updateAboutMainTitle12', 'AboutCtrl@admin');
// Route::post('/updateAboutMainInfo12', 'AboutCtrl@updateAboutMainInfo');
// Route::get('/updateAboutMainInfo12', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleTitle', 'AboutCtrl@updateAboutMiddleTitle');
// Route::get('/updateAboutMiddleTitle', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleInfo', 'AboutCtrl@updateAboutMiddleInfo');
// Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
// Route::post('/uploadAboutFooter','AboutCtrl@uploadAboutFooter');
// Route::get('/uploadAboutFooter','AboutCtrl@admin');
// Route::get('/deleteAboutFooter&{ID}&{Photo}','AboutCtrl@deleteAboutFooter');






//Organization chart
Route::get('/organization','App\Http\Controllers\OrgCtrl@orgFunc');
// Route::get('/admin_about23','AboutCtrl@admin');
// Route::get('/deleteAboutMainImg13&{Photo}','AboutCtrl@deleteAboutMainImg');
// Route::post('/uploadAboutMainImg13','AboutCtrl@uploadAboutMainImg');
// Route::get('/uploadAboutMainImg13','AboutCtrl@admin');
// Route::post('/updateAboutMainTitle13', 'AboutCtrl@updateAboutMainTitle');
// Route::get('/updateAboutMainTitle13', 'AboutCtrl@admin');
// Route::post('/updateAboutMainInfo13', 'AboutCtrl@updateAboutMainInfo');
// Route::get('/updateAboutMainInfo13', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleTitle', 'AboutCtrl@updateAboutMiddleTitle');
// Route::get('/updateAboutMiddleTitle', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleInfo', 'AboutCtrl@updateAboutMiddleInfo');
// Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
// Route::post('/uploadAboutFooter','AboutCtrl@uploadAboutFooter');
// Route::get('/uploadAboutFooter','AboutCtrl@admin');
// Route::get('/deleteAboutFooter&{ID}&{Photo}','AboutCtrl@deleteAboutFooter');



//Vision and Mission
Route::get('/vision','App\Http\Controllers\VisionCtrl@visionFunc');
// Route::get('/admin_about231','AboutCtrl@admin');
// Route::get('/deleteAboutMainImg14&{Photo}','AboutCtrl@deleteAboutMainImg');
// Route::post('/uploadAboutMainImg14','AboutCtrl@uploadAboutMainImg');
// Route::get('/uploadAboutMainImg14','AboutCtrl@admin');
// Route::post('/updateAboutMainTitle14', 'AboutCtrl@updateAboutMainTitle');
// Route::get('/updateAboutMainTitle14', 'AboutCtrl@admin');
// Route::post('/updateAboutMainInfo14', 'AboutCtrl@updateAboutMainInfo');
// Route::get('/updateAboutMainInfo14', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleTitle', 'AboutCtrl@updateAboutMiddleTitle');
// Route::get('/updateAboutMiddleTitle', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleInfo', 'AboutCtrl@updateAboutMiddleInfo');
// Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
// Route::post('/uploadAboutFooter','AboutCtrl@uploadAboutFooter');
// Route::get('/uploadAboutFooter','AboutCtrl@admin');
// Route::get('/deleteAboutFooter&{ID}&{Photo}','AboutCtrl@deleteAboutFooter');


Route::get('/cm','App\Http\Controllers\VisionCtrl@cmvisionFunc');
Route::get('/st','App\Http\Controllers\VisionCtrl@stvisionFunc');
Route::get('/mls','App\Http\Controllers\VisionCtrl@mlsvisionFunc');








//News
Route::get('/news','App\Http\Controllers\NewsCtrl@newsFunc');
Route::get('/admin_news','App\Http\Controllers\NewsCtrl@admin');
Route::post('/updateNewsMainTitle', 'App\Http\Controllers\NewsCtrl@updateNewsMainTitle');
Route::get('/updateNewsMainTitle', 'App\Http\Controllers\NewsCtrl@admin');
Route::get('/deleteNews&{ID}&{Photo}','App\Http\Controllers\NewsCtrl@deleteNews');
Route::post('/uploadNews','App\Http\Controllers\NewsCtrl@uploadNews');
Route::get('/uploadNews','App\Http\Controllers\NewsCtrl@admin');






//Journal
Route::get('/journal','App\Http\Controllers\JournalCtrl@journalFunc');
// Route::get('/admin_about2344','AboutCtrl@admin');
// Route::get('/deleteAboutMainImg15&{Photo}','AboutCtrl@deleteAboutMainImg');
// Route::post('/uploadAboutMainImg15','AboutCtrl@uploadAboutMainImg');
// Route::get('/uploadAboutMainImg15','AboutCtrl@admin');
// Route::post('/updateAboutMainTitle15', 'AboutCtrl@updateAboutMainTitle');
// Route::get('/updateAboutMainTitle15', 'AboutCtrl@admin');
// Route::post('/updateAboutMainInfo15', 'AboutCtrl@updateAboutMainInfo');
// Route::get('/updateAboutMainInfo15', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleTitle', 'AboutCtrl@updateAboutMiddleTitle');
// Route::get('/updateAboutMiddleTitle', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleInfo', 'AboutCtrl@updateAboutMiddleInfo');
// Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
// Route::post('/uploadAboutFooter','AboutCtrl@uploadAboutFooter');
// Route::get('/uploadAboutFooter','AboutCtrl@admin');
// Route::get('/deleteAboutFooter&{ID}&{Photo}','AboutCtrl@deleteAboutFooter');





//research book
Route::get('/book','App\Http\Controllers\BookCtrl@bookFunc');
// Route::get('/admin_about3443','AboutCtrl@admin');
// Route::get('/deleteAboutMainImg16&{Photo}','AboutCtrl@deleteAboutMainImg');
// Route::post('/uploadAboutMainImg16','AboutCtrl@uploadAboutMainImg');
// Route::get('/uploadAboutMainImg16','AboutCtrl@admin');
// Route::post('/updateAboutMainTitle16', 'AboutCtrl@updateAboutMainTitle');
// Route::get('/updateAboutMainTitle16', 'AboutCtrl@admin');
// Route::post('/updateAboutMainInfo16', 'AboutCtrl@updateAboutMainInfo');
// Route::get('/updateAboutMainInfo16', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleTitle', 'AboutCtrl@updateAboutMiddleTitle');
// Route::get('/updateAboutMiddleTitle', 'AboutCtrl@admin');
// Route::post('/updateAboutMiddleInfo', 'AboutCtrl@updateAboutMiddleInfo');
// Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
// Route::post('/uploadAboutFooter','AboutCtrl@uploadAboutFooter');
// Route::get('/uploadAboutFooter','AboutCtrl@admin');
// Route::get('/deleteAboutFooter&{ID}&{Photo}','AboutCtrl@deleteAboutFooter');







// Route::get('/contact','App\Http\Controllers\ContactCtrl@contactFunc');
// Route::post('/receive_message','App\Http\Controllers\ContactCtrl@message');
// Route::get('/admin_contact','App\Http\Controllers\ContactCtrl@admin');
// Route::get('/deleteMainImg&{MainImage}','App\Http\Controllers\ContactCtrl@deleteMainImg');
// Route::post('/uploadMainImg','App\Http\Controllers\ContactCtrl@uploadMainImg');
// Route::get('/uploadMainImg','App\Http\Controllers\ContactCtrl@admin');
// Route::post('/updateContactMainTitle', 'App\Http\Controllers\ContactCtrl@updateContactMainTitle');
// Route::get('/updateContactMainTitle', 'App\Http\Controllers\ContactCtrl@admin');
// Route::post('/updateContactAddress', 'App\Http\Controllers\ContactCtrl@updateContactAddress');
// Route::get('/updateContactAddress', 'App\Http\Controllers\ContactCtrl@admin');
// Route::post('/updateContactPhone', 'App\Http\Controllers\ContactCtrl@updateContactPhone');
// Route::get('/updateContactPhone', 'App\Http\Controllers\ContactCtrl@admin');
// Route::post('/updateContactFax', 'App\Http\Controllers\ContactCtrl@updateContactFax');
// Route::get('/updateContactFax', 'App\Http\Controllers\ContactCtrl@admin');
// Route::post('/updateContactEmail', 'App\Http\Controllers\ContactCtrl@updateContactEmail');
// Route::get('/updateContactEmail', 'App\Http\Controllers\ContactCtrl@admin');
// Route::get('/deleteContactMessage&{ID}','App\Http\Controllers\ContactCtrl@deleteContactMessage');









//Savvy Amu End
