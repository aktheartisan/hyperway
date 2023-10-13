<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/','website@home');

// Route::get('about', function () {
//     return view('about');
// });
Route::get('about','website@about');

Route::get('contact','website@contact');


 Route::get('/admin', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('admin');

Route::post('admin_login_su','website@login');

Route::get('gallery','website@gal');

Route::get('obligation','website@obg');

Route::get('address','website@get_add');
Route::post('address_up','website@address');

Route::get('unite', function () {
    return view('unite');
});

Route::post('contact_submit','website@cont');

// Route::get('contact', function () {
//     return view('contact');
// });
Route::get('single-post', function () {
    return view('single-post');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
   
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('add', function () {
    return view('admin/add');
});
Route::post('submit_basic','admin@submit_basic');
Route::get('manage','admin@manage_basic');
Route::post('update_basic','admin@update_basic');
Route::post('delete_basic','admin@delete_basic');

// Home code
Route::get('add_home', function () {
    return view('admin/add_home');
});
Route::post('submit_home','admin@submit_home');
Route::get('manage_home','admin@manage_home');
Route::post('update_home','admin@update_home');
Route::post('delete_home','admin@delete_home');

// About code
Route::get('manage_about','admin@manage_about');
Route::post('update_about','admin@update_about');

// Contact code
Route::get('manage_contact','admin@manage_contact');
Route::post('delete_contact','admin@delete_contact');

// obligation code
Route::get('add_obligations', function () {
    return view('admin/add_obligation');
});
Route::post('submit_obligation','admin@submit_obligation');
Route::get('manage_obligations','admin@manage_obligation');
Route::post('update_obligation','admin@update_obligation');
Route::post('delete_obligation','admin@delete_obligation');

// Gallery code for image
Route::get('add_gallery', function () {
    return view('admin/add_gallery');
});
Route::post('submit_gallery_image','admin@submit_gallery_image');
Route::get('manage_gallery','admin@manage_gallery_image');
Route::post('update_gallery_image','admin@update_gallery_image');
Route::post('delete_gallery_image','admin@delete_gallery_image');

// Gallery code for video
Route::get('add_gallery1', function () {
    return view('admin/add_gallery1');
});
Route::post('submit_gallery1','admin@submit_gallery1');
Route::get('manage_gallery1','admin@manage_gallery_video');
Route::post('update_gallery_video','admin@update_gallery_video');
Route::post('delete_gallery_video','admin@delete_gallery_video');

//resource code
Route::get('add_resource', function () {
    return view('admin/add_resource');
});
Route::post('submit_resource','admin@submit_resource');
Route::get('manage_resource','admin@manage_resource');
Route::post('update_resource','admin@update_resource');
Route::post('delete_resource','admin@delete_resource');

Route::get('profile', function () {
    return view('change_pas');
});


});
    // admin panel
 // Route::get('/admin_login', function () {
    //     return view('admin_login');
    // });
// Route::get('/dashboard', function () {
//     return view('admin/index');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('admin', function () {
//     return view('admin/index');
// });



require __DIR__.'/auth.php';
