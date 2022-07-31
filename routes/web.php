<?php

use App\Http\Livewire\Addbranch;
use App\Http\Livewire\Createshiping;
use App\Http\Livewire\Delivery;
use App\Http\Livewire\Display;
use App\Http\Livewire\Enquary;
use App\Http\Livewire\History;
use App\Http\Livewire\Home;
use App\Http\Livewire\Items;
use App\Http\Livewire\Listbranch;
use App\Http\Livewire\Receiver;
use App\Http\Livewire\Receiverinfo;
use App\Http\Livewire\Userinfo;
use App\Models\senderinfo;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::name('shiping.')->group(function () {
    
    
    Route::get("/shiping/edit/{items_id}", Createshiping::class)->name("edit");
    Route::get("/shiping/add", Createshiping::class)->name("add");
 

});
Route::name('display.')->group(function () {
    Route::get("/display/list", Display::class)->name("list");
});
Route::name('receiver.')->group(function () {
    Route::get("/receiver/add", Receiver::class)->name("add");
    Route::get("/receiver/edit/{items_id}", Receiver::class)->name("edit");
    
});
Route::name('history.')->group(function () {
    Route::get("/history/show", History::class)->name("show");
});

Route::name('enquary.')->group(function () {
    Route::get("/enquary/{item_id}", Enquary::class)->name("display");
  
});
Route::name('items.')->group(function () {
   
    Route::get("/items/add", Items::class)->name("add");
});
Route::name('addbranch.')->group(function () {
   
    Route::get("/addbranch/add", Addbranch::class)->name("add");
});
Route::name('display.')->group(function () {
   
    Route::get("/display/show", Listbranch::class)->name("show");
    Route::get("/display/{item_id}", Addbranch::class)->name("add");
});

