<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/trangchu', function () {
//     return view('trangchu',['pageName'=>'Trang Chu']);
// });
// Route::get('/gioithieu', function () {
//     return view('gioithieu',['pageName'=>'Trang Gioi thieu']);
// });
// Route::get('/lienhe', function () {
//     return view('lienhe',['pageName'=>'Trang Lien He']);
// });
// Route::get('/ban', function () {
//     return view('ban',['pageName'=>'Trang Ban']);
// });
// Route::get('/ghe', function () {
//     return view('ghe',['pageName'=>'Trang Ghe']);
// });
//cau 1
Route::get('/{page}', function ($page) {
    $pages = [
        'exe1' => 'exe1',
        'gioithieu' => 'Trang giới thiệu',
        'ban' => 'Trang bán',
        'ghe' => 'Trang ghế',
        'lienhe' => 'Trang liên hệ'
    ];

    $pageName = $pages[$page] ?? 'Trang không tồn tại';

    return view($page, ['pageName' => $pageName]);
});
//cau2
Route::name('pages.')->get('/{page}', function ($page) {
    $pages = [
        'exe1' => 'exe1',
        'gioithieu' => 'Trang giới thiệu',
        'ban' => 'Trang bán',
        'ghe' => 'Trang ghế',
        'lienhe' => 'Trang liên hệ'
    ];

    $pageName = $pages[$page] ?? 'Trang không tồn tại';

    return view($page, ['pageName' => $pageName]);
})->name('dynamic');

