<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Paypalcontroller;
use App\Http\Controllers\Ordercontroller;



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
route::get('/',[HomeController::class,'index']);
route::get('package',[HomeController::class,'tourtable']);
route::get('book',[HomeController::class,'hotel']);
route::get('/show_tourtable',[AdminController::class,'show_tourtable']);
route::get('/view_tourbook',[AdminController::class,'view_tourbook']);
route::post('/addtourbook',[AdminController::class,'addtourbook']);
route::get('/view_user',[AdminController::class,'view_user']);
route::post('/add_user',[AdminController::class,'add_user']);
route::get('/delete_user/{id}',[AdminController::class,'delete_user']);

route::get('/view_tourtable',[AdminController::class,'view_tourtable']);
route::post('/add_tourtable',[AdminController::class,'add_tourtable']);
route::get('/show_tourtable',[AdminController::class,'show_tourtable']);
route::get('/delete_tourtable/{id}',[AdminController::class,'delete_tourtable']);
route::get('/update_tourtable/{id}',[AdminController::class,'update_tourtable']);
route::post('/update_tourtable_confirm/{id}',[AdminController::class,'update_tourtable_confirm']);

route::get('/view_hotels',[AdminController::class,'view_hotels']);
route::post('/add_hotels',[AdminController::class,'add_hotels']);
route::get('/show_hotels',[AdminController::class,'show_hotels']);
route::get('/delete_hotels/{id}',[AdminController::class,'delete_hotels']);
route::get('/update_hotels/{id}',[AdminController::class,'update_hotels']);
route::post('/update_hotels_confirm/{id}',[AdminController::class,'update_hotels_confirm']);




Route::get('/view_booking/{hotel}',[AdminController::class,'view_booking'])->name('view_booking');
Route::Post('/store_book',[AdminController::class,'store_book'])->name('store_book');
Route::get('/showbooking',[AdminController::class,'index'])->name('showbooking');


/*form2*/

route::get('/view_rooms/{id}',[AdminController::class,'view_rooms']);


route::post('/add_rooms',[AdminController::class,'add_rooms']);
route::get('/show_rooms',[AdminController::class,'show_rooms']);
route::get('/delete_rooms/{id}',[AdminController::class,'delete_rooms']);
route::get('/update_rooms/{id}',[AdminController::class,'update_rooms']);
route::post('/update_rooms_confirm/{id}',[AdminController::class,'update_rooms_confirm']);





route::get('/about',[HomeController::class,'about']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);







Route::get('/about', function () {
    return view('about');
});


Route::get('/cart', function () {
    $data=auth()->user()->order_details;
    $i=0;
    $j=0;
    foreach ($data as $item) {  
    if($item["tour_book_id"]==null){
        $hotels[$i]=$item->order;
        $x=$hotels[$i]->Room;
        $hotels[$i]->room=$x->type; 
        $hotels[$i]->hotel=$x->hotel->name; 
      
        $i++;
    }else{
        $x=DB::table("tour_books")->where("id",$item["tour_book_id"])->get();
        //dd($x[0]->tour_id);
        $y=DB::table("tour_tables")->where("id",$x[0]->tour_id)->get();
       // dd($y[0]->price);
        $tours[$j]=$x[0];
        $tours[$j]->price=$y[0]->price*$tours[$j]->How_many;
        $tours[$j]->name=$y[0]->Sight;
        $j++; 
    }
    }
   // dd($tours,$hotels);
    return view('cart',compact('hotels','tours'));
});

route::get('/tourbook/{tourtable}',[AdminController::class,'view_tourtable2'])->name("tourbook");






Route::get('/dam', function () {
//dd($id);
    return view('dam');
});

Route::get('/abu', function () {
    return view('abu');
});



Route::get('/fluca', function () {
    return view('fluca');
});

Route::get('/nub', function () {
    return view('nub');
});
Route::get('/oblisk', function () {
    return view('oblisk');
});
Route::get('/philea', function () {
   // dd($id);
    return view('philea');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/basma', function () {
    return view('basma');
});
Route::get('/benben', function () {
    return view('benben');
});
Route::get('/cataract', function () {
    return view('cataract');
});
Route::get('/hi', function () {
    return view('hi');
});
Route::get('/katadol', function () {
    return view('katadol');
});
Route::get('/kendaka', function () {
    return view('kendaka');
});
Route::get('/movinbic', function () {
    return view('movinbic');
});
Route::get('/tollip', function () {
    return view('tollip');
});

Route::get('/terms', function () {
    return view('terms');
});
Route::get('/Form', function () {
    return view('Form');

});

Route::view('/contact','contact')->name('contact');
Route::post('/send', [ContactController::class,'send'])->name('send.email');





Route::get('/activity',[HomeController::class,'activity'])->name('activity');



Route::get('/view_booking/{hotel}',[AdminController::class,'view_booking'])->name('view_booking');
Route::Post('/store_book',[AdminController::class,'store_book'])->name('store_book');
Route::get('/showbooking',[AdminController::class,'index'])->name('showbooking');




route::get('createpaypal',[Paypalcontroller::class,'createpaypal'])
        ->name('createpaypal');


route::get('processPaypal',[Paypalcontroller::class,'processPaypal'])
        ->name('processPaypal');

        route::get('processSuccess',[Paypalcontroller::class,'processSuccess'])
        ->name('processSuccess');

        route::get('processCancel',[Paypalcontroller::class,'processCancel'])
        ->name('processCancel');