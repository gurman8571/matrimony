<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CasteController;
use App\Http\Controllers\Admin\ReligionController;
use App\Http\Controllers\Admin\WeddingStoryController as AdminStory;
use App\Http\Controllers\Admin\MothertongueController;
use App\Http\Controllers\Admin\OccupationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\frontend\UserProfileController;
use App\Http\Controllers\frontend\WeddingStoryController;
use App\Http\Controllers\frontend\Userimagescontroller;
use App\Http\Controllers\frontend\Indexcontroller;
use App\Http\Controllers\likesController;
use App\Http\Controllers\frontend\ProfilesController;


/*
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

//Route::view('User_contact','frontend.User_contact');
//Route::view('nav','components.navbar');
Route::get('/', [IndexController::class, 'masterdata'])->name('index');
Route::view('error/403','errors.403')->name('error.403');
Route::view('error/401','errors.401')->name('error.401');

Auth::routes(['verify' =>true]);
//user routes
//Route::view('test','test');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profiles',[ProfilesController::class,'index'])->name('Profiles');
Route::group(['middleware'=>['auth','verified']],function ()
{
//user routes

    //Route::get('user/profile/step/2', [UserProfileController::class, 'index2'])->name('userprofile2');
    Route::post('/getstates', [UserController::class, 'getStates'])->name('getstates');
//user profile routes
Route::post('Create/Profile',[UserProfileController::class, 'create'])->name('User.Profile');
Route::get('user/profile/create', [UserProfileController::class, 'masterdata'])->name('userprofile');
Route::post('/getstate', [UserProfileController::class, 'getState'])->name('getstates');
Route::get('/User/profile', [UserProfileController::class, 'index'])->name('getprofile')->middleware('Profilecheck');
Route::get('User/profile/delete', [UserProfileController::class, 'delete'])->name('deleteprofile')->middleware('Profilecheck');
 Route::get('User/profile/edit', [UserProfileController::class, 'edit'])->name('editprofile')->middleware('Profilecheck');
Route::post('User/profile/update', [UserProfileController::class, 'update'])->name('Update.profile');
Route::post('User/contact',[UserProfileController::class, 'Contact'])->name('User.contact')->middleware('Profilecheck');
Route::post('User/profileimage/edit',[UserProfileController::class, 'EditProfilePic'])->name('User.ProfilePicture.edit')->middleware('Profilecheck');
Route::get('User/profile/deactivate', [UserProfileController::class, 'Deactivateprofile'])->name('profileDeactivate')->middleware('Profilecheck');

//Route::view('User/contact','frontend.User_contact');

//gallery Route
Route::get('User/gallery', [Userimagescontroller::class, 'Index'])->name('User.gallery')->middleware('Profilecheck');
Route::post('User/profile/gallery/insert', [Userimagescontroller::class, 'Add'])->name('User.galleryInsert')->middleware('Profilecheck');
Route::get('User/profile/gallery/delete/{id}', [Userimagescontroller::class, 'Delete'])->name('User.image.delete')->middleware('Profilecheck');
Route::get('User/profile/gallery/Reset', [Userimagescontroller::class, 'Reset'])->name('User.gallery.reset')->middleware('Profilecheck');
//Route::get
//search Routes



Route::post('search',[SearchController::class,'Results'])->name('search_results');

Route::get('Profile/detail/{id}',[SearchController::class,'ProfileDetails'])->name('Profile.details');


Route::get('Profile/gallery/{id}',[SearchController::class,'Usergallery'])->name('Profile.gallery');

Route::post('User/age/filter',[SearchController::class,'agefilter'])->name('agefilter');
//wedding story route
Route::post('Wedding/story', [WeddingStoryController::class, 'Create'])->name('Create.story');
Route::post('like', [likesController::class, 'create'])->name('User.like');
Route::post('Wedding/story/create', [WeddingStoryController::class, 'Create'])->name('Createstory');
});


             //Admin routes
Route::group(['middleware' => 'is_admin'], function () {


    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home');

    Route::post('/admin/caste/insert', [CasteController::class, 'insert'])->name('admin.casteinsert');


    Route::get('/admin/caste/index', [CasteController::class, 'casteindex'])->name('admin.casteindex');

    Route::get('/admin/caste/status/{id}', [CasteController::class, 'castestatus'])->name('admin.castestatus');

    Route::get('/admin/caste/delete/{id}', [CasteController::class, 'castedelete'])->name('admin.castedelete');

    Route::post('/admin/religion/insert', [ReligionController::class, 'insert'])->name('admin.religioninsert');

    Route::get('/admin/religion/index', [ReligionController::class, 'religionindex'])->name('admin.religionindex');

    Route::get('/admin/religion/status/{id}', [ReligionController::class, 'religionstatus'])->name('admin.religionstatus');

    Route::get('/admin/religion/delete/{id}', [ReligionController::class, 'religiondelete'])->name('admin.religiondelete');

    Route::post('/admin/mothertongue/insert', [MothertongueController::class, 'insert'])->name('admin.Mothertongueinsert');

    Route::get('/admin/mothertongue/index', [MothertongueController::class, 'index'])->name('admin.Mothertongueindex');

    Route::get('/admin/mothertongue/status/{id}', [MothertongueController::class, 'status'])->name('admin.Mothertonguestatus');

    Route::get('/admin/mothertongue/delete/{id}', [MothertongueController::class, 'delete'])->name('admin.Mothertonguedelete');

    Route::post('/admin/Occupation/index', [OccupationController::class, 'insert'])->name('admin.Occupationinsert');

    Route::get('/admin/Occupation/index', [OccupationController::class, 'index'])->name('admin.Occupationindex');

    Route::get('/admin/Occupation/status/{id}', [OccupationController::class, 'status'])->name('admin.Occuaptionstatus');

    Route::get('/admin/Occupation/delete/{id}', [OccupationController::class, 'delete'])->name('admin.Occupationdelete');


        Route::post('/admin/Country/index', [CountryController::class, 'insert'])->name('admin.Countryinsert');

    Route::get('/admin/Country/index', [CountryController::class, 'index'])->name('admin.Countryindex');

    Route::get('/admin/Country/status/{id}', [CountryController::class, 'status'])->name('admin.Countrystatus');

    Route::get('/admin/Country/delete/{id}', [CountryController::class, 'delete'])->name('admin.Countrydelete');


    Route::post('/admin/State/insert', [StateController::class, 'insert'])->name('admin.Stateinsert');

    Route::get('/admin/State/index', [StateController::class, 'index'])->name('admin.Stateindex');

    Route::get('/admin/State/status/{id}', [StateController::class, 'status'])->name('admin.Statestatus');

    Route::get('/admin/State/delete/{id}', [StateController::class, 'delete'])->name('admin.Statedelete');

    Route::post('/admin/Education/index', [EducationController::class, 'insert'])->name('admin.Educationinsert');

    Route::get('/admin/Education/index', [EducationController::class, 'index'])->name('admin.Educationindex');

    Route::get('/admin/Education/status/{id}', [EducationController::class, 'status'])->name('admin.Educationstatus');

    Route::get('/admin/Education/delete/{id}', [EducationController::class, 'delete'])->name('admin.Educationdelete');

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware(['password.confirm']);

    Route::get('/admin/status/{id}', [AdminController::class, 'status'])->name('admin.status')->middleware(['password.confirm']);

    Route::get('/admin/user/insert', [UserController::class, 'index'])->name('admin.userinsert');

     Route::post('/admin/user/search', [UserController::class, 'search'])->name('admin.usersearch');

    Route::post('/getstates', [UserController::class, 'getStates'])->name('getstates');

    Route::post('new', [UserController::class, 'Insert'])->name('newspaper_entery');
    Route::get('/admin/user/Index', [UserController::class, 'UserIndex'])->name('admin.userIndex');

    Route::get('/User/delete/{id}', [UserController::class, 'delete'])->name('User.delete');
    Route::get('/User/Role/{id}', [UserController::class, 'Role'])->name('User.status');

    Route::get('/User/status/{id}', [UserController::class, 'status'])->name('User.status');
    Route::get('/User/Story', [AdminStory::class, 'index'])->name('Admin.stories');
    Route::get('admin/User/Story/delete/{id}', [AdminStory::class, 'delete'])->name('Admin.stories.delete');
    Route::get('admin/User/story/Preview/{id}',[AdminStory::class, 'Preview'])->name('User.story.Preview');
    Route::get('admin/User/story/Disaply/status/{id}',[AdminStory::class, 'Display'])->name('User.story.displaystatus');


});
