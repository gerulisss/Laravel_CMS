<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
//Route::get('/', function () {
//    return redirect(app()->getLocale());
//});

//Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'],  'middleware' => 'setlocale'],  function () {
//    Route::get('/', function () {
//        return redirect(app()->getLocale());
//        return view('frontend.pages.index');
//    });
//    Route::get('/production', [\App\Http\Controllers\Frontend\ProductionController::class, 'index'])->name('production.index.page');
//    Route::get('/produkcija', [\App\Http\Controllers\Frontend\ProductionController::class, 'index'])->name('production.index.page_lt');
//    Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('home-locale');
//    Route::get('/{category_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'categoryview'])->name('category-view');
//    Route::get('{category_url}/{subcategory_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'subcategoryview']);
//    Route::get('{category_url}/{subcategory_url}/{product_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'productview']);
//});
//Route::get('/', function () {
//    return redirect()->route('home-locale', app()->getLocale());
//})->name('home-locale');
//
//Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
//    Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('home-locale');
//});
//Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {
//    Route::get(LaravelLocalization::transRoute('routes.about'),  function () {
//        return view('frontend.pages.production');
//    });
//    Route::get(LaravelLocalization::transRoute('routes.production'), [\App\Http\Controllers\Frontend\ProductionController::class, 'index']);

//Route::get('/produkcija', [\App\Http\Controllers\Frontend\ProductionController::class, 'index'])->name('production.index.page');

//Route::get('pdf/preview', [\App\Http\Controllers\Admin\Product\ProductController::class, 'pdfIndex']);
//Route::get('/download', [\App\Http\Controllers\Admin\Product\ProductController::class, 'generatePDF']);

Route::group(['prefix' => 'admin'], function() {
    Auth::routes(['register' => false]);
});

//Route::group(['middleware' => ['auth' ,'AdminPanelAccess'], 'prefix' => 'admin'], function() {
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin');
    Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('status', [App\Http\Controllers\Admin\User\UserController::class, 'userOnlineStatus']);
    Route::resource('users', App\Http\Controllers\Admin\User\UserController::class);
    Route::resource('roles', App\Http\Controllers\Admin\Role\RoleController::class);
    Route::resource('permissions', App\Http\Controllers\Admin\Permission\PermissionController::class)->except('show');
    Route::resource('categories', \App\Http\Controllers\Admin\Category\CategoryController::class);
    Route::resource('subcategories', \App\Http\Controllers\Admin\Subcategory\SubcategoryController::class);
    Route::resource('products', \App\Http\Controllers\Admin\Product\ProductController::class);
    Route::get('/product/exportpdf', [\App\Http\Controllers\Admin\Product\ProductController::class, 'createPDF'])->name('export.pdf');

    Route::get('/migrate', function(){
        \Artisan::call('migrate:refresh --seed');
        dd('Migrated successfully!');
    });

});

Route::get('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login');
//});

Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('home-locale');
Route::get('/production', [\App\Http\Controllers\Frontend\ProductionController::class, 'index'])->name('production.index.page');
Route::get('/{category_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'categoryview'])->name('category-view');
Route::get('{category_url}/{subcategory_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'subcategoryview']);
Route::get('{category_url}/{subcategory_url}/{product_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'productview']);
//Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {
//    Route::get('/{category_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'categoryview']);
//    Route::get('{category_url}/{subcategory_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'subcategoryview']);
//    Route::get('{category_url}/{subcategory_url}/{product_url}', [\App\Http\Controllers\Frontend\UrlController::class, 'productview']);
//});

//Route::get('language/{locale}', function ($locale) {
//    app()->setLocale($locale);
//    session()->put('locale', $locale);
//    return redirect()->back();
//});
