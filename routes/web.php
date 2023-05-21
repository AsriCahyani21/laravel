<?php

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
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/', function () {
    $furniture_post = [
        [
            "img" => "https://images.furnituredealer.net/img/products/riverside_furniture/color/aberdeen212_21250%2B6x21358-b0.jpg",
            "title" => "Produk 1",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora mollitia autem nobis, natus nostrum voluptatibus, minus incidunt, rem voluptas accusamus laboriosam optio corporis. Minus quas voluptatem tempore reiciendis dignissimos illo!",
            "price" => "5000"
        ],
        [
            "img" => "https://designwarehouse.co.nz/wp-content/uploads/2019/02/Ibiza-Outdoor-Furniture-Collection-By-Design-Warehouse.jpg",
            "title" => "Produk 2",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora mollitia autem nobis, natus nostrum voluptatibus, minus incidunt, rem voluptas accusamus laboriosam optio corporis. Minus quas voluptatem tempore reiciendis dignissimos illo!",
            "price" => "5000"
        ],
        [
            "img" => "https://i0.wp.com/raysahouse.com/wp-content/uploads/2017/10/mid-century-modern-outdoor-furniture-set-mid-century-modern-outdoor-patio-furniture.jpg?w=1280&ssl=1",
            "title" => "Produk 3",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora mollitia autem nobis, natus nostrum voluptatibus, minus incidunt, rem voluptas accusamus laboriosam optio corporis. Minus quas voluptatem tempore reiciendis dignissimos illo!",
            "price" => "5000"
        ],
        ];
    return view('home', [
        "furnitures" => $furniture_post
    ]);
});
