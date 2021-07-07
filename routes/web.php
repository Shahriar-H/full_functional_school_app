<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;

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

Route::any('/', 'DashboardContrller@home');
Route::any('/dash_slider','DashboardContrller@slider');
Route::any('/slideup','DashboardContrller@slideup');
Route::any('/scrollnotice','DashboardContrller@scrollnotice');
Route::any('/scrollnoticeup','DashboardContrller@scrollnoticeup');
Route::any('/allteachers','DashboardContrller@allteachers');
Route::any('/teachercon','DashboardContrller@teachercon');
Route::any('/teacherup','DashboardContrller@teacherup');
Route::any('/dash_students','DashboardContrller@dash_students');
Route::any('/dash_students_save','DashboardContrller@dash_students_save');
Route::any('/dash_studentslist/{class}','DashboardContrller@dash_studentslist');
Route::any('/studentsloginresult','DashboardContrller@studentsloginresult');
Route::any('/payplease/{sid}','DashboardContrller@payplease');
Route::any('/dash_notice','DashboardContrller@dash_notice');
Route::any('/noticeup','DashboardContrller@noticeup');
Route::any('/deletenotice/{nid}','DashboardContrller@deletenotice');
Route::any('/dash_writting','DashboardContrller@dash_writting');
Route::any('/writtingup','DashboardContrller@writtingup');
Route::any('/deletewrite/{nid}','DashboardContrller@deletewrite');
Route::any('/seepost/{id}','DashboardContrller@seepost');
Route::any('/dash_photo','DashboardContrller@dash_photo');
Route::any('/galleryup','DashboardContrller@galleryup');
Route::any('/gallery','DashboardContrller@gallery');
Route::any('/dash_video','DashboardContrller@dash_video');
Route::any('/videoup','DashboardContrller@videoup');

Route::any('/video','DashboardContrller@video');
Route::any('/deletevideo/{id}','DashboardContrller@deletevideo');
Route::any('/deletescrollnotic/{id}','DashboardContrller@deletescrollnotic');
Route::any('/deleteteacher/{id}','DashboardContrller@deleteteacher');
Route::any('/dash_editteacher/{id}','DashboardContrller@dash_editteacher');
Route::any('/teachereditup/{id}','DashboardContrller@teachereditup');
Route::any('/dash_studentedit/{id}','DashboardContrller@dash_studentedit');
Route::any('/dash_students_edit/{id}','DashboardContrller@dash_students_edit');
Route::any('/allmanagingcommity','DashboardContrller@allmanagingcommity');
Route::any('/admin_system_ggsh','DashboardContrller@admin_system');
Route::any('/login-todashboard','DashboardContrller@adminlogin');
Route::any('/dash_adminadd','DashboardContrller@dash_adminadd');
Route::any('/dash_adminaddnew','DashboardContrller@dash_adminaddnew');
Route::any('/dash_home','DashboardContrller@dash_home');
Route::any('/dash_logout','DashboardContrller@dash_logout');
Route::any('/aboutteacher/{id}','DashboardContrller@aboutteacher');
Route::any('/golden_jubilee','DashboardContrller@golden_jubilee');



Route::get('/studentslogin', function () {
    return view('aboutstudents');
});
Route::get('/notice', function () {
    return view('noticesec');
});
Route::get('/teacher', function () {
    return view('teacherswrite');
});

Route::get('/student', function () {
    return view('studentswrite');
});


Route::get('/classes', function () {
    return view('aboutclass');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/theschool', function () {
    return view('aboutschool');
});
// Route::get('/dashboard', function () {
//     return view('dashboardmaster');
// });
// Route::get('/dash_logo', function () {
//     return view('dash_logo');
// });
Route::any('/dash_logo','DashboardContrller@getheader');
Route::any('/logoup/{id}','DashboardContrller@logoup');
Route::any('/dashboard','DashboardContrller@dashboard');


Route::any('/payment','paymentController@index');

Route::any('/success','paymentController@success')->name('success');

Route::any('/fail','paymentController@fail')->name('fail');






// SSLCOMMERZ Start
//Route::any('/example1','SslCommerzPaymentController@exampleEasyCheckout');

Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

//Route::post('/success', [SslCommerzPaymentController::class, 'success']);
//Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
//Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
