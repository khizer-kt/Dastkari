<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellersController;

route::get('/', [HomeController::class, 'index']);
//<k>
Route::get('/guestView/{id}/{searchQuery}', [HomeController::class, 'search_product']);
//</k>
route::get('/guestView/{id}', [HomeController::class, 'view_product']);
route::get('/guestProduct/{id}', [HomeController::class, 'view_product_details']);
route::post('/guestcart/{id}', [HomeController::class, 'add_cart']);
route::get('/showguestcart', [HomeController::class, 'show_cart']);

//ROUTES FOR ADMIN
route::get('/Dashboard', [AdminController::class, 'all_sellers']);
route::get('/view_category', [AdminController::class, 'view_category']);
route::get('/view/{id}', [AdminController::class, 'view_product']);
route::get('/removecategory/{id}', [AdminController::class, 'remove_category']);
route::get('/addcategories', [AdminController::class, 'add_category']);
route::post('/categoryadded', [AdminController::class, 'added_category']);
route::get('/products', [AdminController::class, 'all_products']);
route::get('/Orders', [AdminController::class, 'all_orders']);
route::get('/Customers', [AdminController::class, 'all_customers']);
route::get('/Sellers', [AdminController::class, 'all_sellers']);
route::get('/main', [AdminController::class, 'main']);

//ROUTES FOR CUSTOMERS
route::get('/customerpage', [CustomerController::class, 'index']);
route::get('/custView/{id}', [CustomerController::class, 'view_product']);
route::get('/custProduct/{id}', [CustomerController::class, 'view_product_details']);
route::post('/custcart/{id}', [CustomerController::class, 'add_cart']);
route::get('/showcart', [CustomerController::class, 'view_cart_details']);
route::get('/removeproduct/{id}', [CustomerController::class, 'remove_items']);
route::get('/cartorder/{custid}/{price}', [CustomerController::class, 'cart_order']);
Route::post('stripe/{price}', [CustomerController::class, 'card_payment'])->name('stripe.post');


//ROUTES FOR Sellers
route::get('/viewsellerproducts', [SellersController::class, 'view_product']);
route::get('/addsellerproducts', [SellersController::class, 'categories']);
route::post('/productadded', [SellersController::class, 'add_product']);
route::get('/mainpage', [SellersController::class, 'mainpage']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//VIEW FOR ADMIN
Route::get('/redirect', [HomeController::class, 'redirect']);

//route for home:
Route::view('/aboutus', 'home.about');