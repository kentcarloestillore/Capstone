<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParishionerController;
use App\Http\Controllers\BaptismalController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PamisaController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChapelController;
use App\Http\Controllers\ClusterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/donations', [PageController::class, 'donations'])->middleware(['auth', 'verified'])->name('donations');
// Route::get('/receipts', [PageController::class, 'receipts'])->middleware(['auth', 'verified'])->name('receipts');
// Route::get('/pss', [PageController::class, 'pss'])->middleware(['auth', 'verified'])->name('pss');
// Route::get('/schedules', [PageController::class, 'schedules'])->middleware(['auth', 'verified'])->name('schedules');
// Route::get('/earnings', [PageController::class, 'earnings'])->middleware(['auth', 'verified'])->name('earnings');
// Route::get('/pamisa', [PageController::class, 'pamisa'])->middleware(['auth', 'verified'])->name('pamisa');

// Route::get('/register/baptismal', function () {
//     return view('pages.register');
// })->middleware(['auth', 'verified'])->name('register.baptismal');
// Route::post('/register/parishioner/{type}', [ParishionerController::class, 'store']);

//nganu kung naay retrieve mahimong /retrieve/api/...... ang route
// Route::get('/baptismals', [BaptismalController::class, 'index'])->name('baptismals.list');
// Route::get('/retrieve/baptismal/{baptismal}', [BaptismalController::class, 'show'])->middleware(['auth', 'verified']);
// Route::get('/register/baptismal/create', [BaptismalController::class, 'create'])->middleware(['auth', 'verified'])->name('register.baptismal');
// Route::post('/register/baptismal/create', [BaptismalController::class, 'store']);

// Route::get('/retrieve/confirmations', [ConfirmationController::class, 'index'])->middleware(['auth', 'verified'])->name('confirmations.list');
// Route::get('/retrieve/confirmation/{confirmation}', [ConfirmationController::class, 'show'])->middleware(['auth', 'verified']);
// Route::get('/register/confirmation/create', [ConfirmationController::class, 'create']);
// Route::post('/register/confirmation/create', [ConfirmationController::class, 'store']);

// Route::get('/retrieve/marriages', [MarriageController::class, 'index'])->middleware(['auth', 'verified'])->name('marriages.list');
// Route::get('/retrieve/marriage/{marriage}', [MarriageController::class, 'show'])->middleware(['auth', 'verified']);
// Route::get('/register/marriage/create', [MarriageController::class, 'create']);

// Route::get('/retrieve/deaths', [DeathController::class, 'index'])->middleware(['auth', 'verified'])->name('deaths.list');
// Route::get('/retrieve/death/{death}', [DeathController::class, 'show'])->middleware(['auth', 'verified']);
// Route::get('/register/death/create', [DeathController::class, 'create']);

// Route::get('/donations', function () {
//     return view('pages.donations');
// })->middleware(['auth', 'verified'])->name('donations');

// Route::get('/pss', function () {
//     return view('pages.pss');
// })->middleware(['auth', 'verified'])->name('pss');

// Route::get('/receipts', function () {
//     return view('pages.receipts');
// })->middleware(['auth', 'verified'])->name('receipts');

// Route::get('/schedule', function () {
//     return view('pages.schedule');
// })->middleware(['auth', 'verified'])->name('schedule');

// Route::get('/earning', function () {
//     return view('pages.earning');
// })->middleware(['auth', 'verified'])->name('earning');

// Route::get('/pamisa', function () {
//     return view('pages.pamisa');
// })->middleware(['auth', 'verified'])->name('pamisa');

Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

//for creating or get a specific parishioner
Route::get('/register/parishioner', [PageController::class, 'register'])->middleware(['auth', 'verified']);
Route::post('/register/parishioner/{type}', [ParishionerController::class, 'store'])->middleware(['auth', 'verified']);

//for creating baptismal record
Route::get('/register/baptismal/create', [BaptismalController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/register/baptismal/create', [BaptismalController::class, 'store'])->middleware(['auth', 'verified']);

//for creating confirmation record
Route::get('/register/confirmation/create', [ConfirmationController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/register/confirmation/create', [ConfirmationController::class, 'store'])->middleware(['auth', 'verified']);

//for creating marriage record
Route::get('/register/marriage/create', [MarriageController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/register/marriage/create', [MarriageController::class, 'store'])->middleware(['auth', 'verified']);

//for creating death record
Route::get('/register/death/create', [DeathController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/register/death/create', [DeathController::class, 'store'])->middleware(['auth', 'verified']);

//retrieve baptismals route
Route::get('/retrieve/baptismals', [PageController::class, 'baptismals'])->middleware(['auth', 'verified']);
Route::get('/retrieve/baptismal/{baptismal}', [BaptismalController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/retrieve/baptismal/pdf/{baptismal}', [BaptismalController::class, 'pdf'])->middleware(['auth', 'verified']);

//retrieve confirmations route
Route::get('/retrieve/confirmations', [PageController::class, 'confirmations'])->middleware(['auth', 'verified']);
Route::get('/retrieve/confirmation/{confirmation}', [ConfirmationController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/retrieve/confirmation/pdf/{confirmation}', [ConfirmationController::class, 'pdf'])->middleware(['auth', 'verified']);

//retrieve marriages route
Route::get('/retrieve/marriages', [PageController::class, 'marriages'])->middleware(['auth', 'verified']);
Route::get('/retrieve/marriage/{marriage}', [MarriageController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/retrieve/marriage/pdf/{marriage}', [MarriageController::class, 'pdf'])->middleware(['auth', 'verified']);

//retrieve deaths route
Route::get('/retrieve/deaths', [PageController::class, 'deaths'])->middleware(['auth', 'verified']);
Route::get('/retrieve/death/{death}', [DeathController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/retrieve/death/pdf/{death}', [DeathController::class, 'pdf'])->middleware(['auth', 'verified']);

//donations routes
Route::get('/donations', [PageController::class, 'donations'])->middleware(['auth', 'verified']);
Route::get('/donation/create', [DonationController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/donation/create', [DonationController::class, 'store'])->middleware(['auth', 'verified']);

//receipts routes
Route::get('/receipts', [PageController::class, 'receipts'])->name('receipts')->middleware(['auth', 'verified']);
Route::get('/receipt/create', [ReceiptController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/receipt/create', [ReceiptController::class, 'store'])->middleware(['auth', 'verified']);

Route::get('/pss', [PageController::class, 'pss'])->middleware(['auth', 'verified'])->name('pss');

//schedule routes
Route::get('/schedules', [PageController::class, 'schedules'])->middleware(['auth', 'verified'])->name('schedules');
Route::get('/schedule/create', [ScheduleController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/schedule/create', [ScheduleController::class, 'store'])->middleware(['auth', 'verified']);

//earning routes
Route::get('/earnings', [PageController::class, 'earnings'])->middleware(['auth', 'verified'])->name('earnings');

//Pamisa routes
Route::get('/pamisa', [PageController::class, 'pamisa'])->middleware(['auth', 'verified'])->name('pamisa');
Route::get('/pamisa/create/{receipt_id}', [PamisaController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/pamisa/create', [PamisaController::class, 'store'])->middleware(['auth', 'verified']);

// User routes
Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'role:DioceseAdmin|ParishAdmin'])->name('users');
// Route::get('/users/{church_id}', [UserController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/user/create', [UserController::class, 'create'])->middleware(['auth', 'role:DioceseAdmin|ParishAdmin']);
Route::post('/user/create', [UserController::class, 'store'])->middleware(['auth', 'role:DioceseAdmin|ParishAdmin']);

Route::get('/chapels/{church}', [ChapelController::class, 'index'])->middleware(['auth', 'role:DioceseAdmin|ParishAdmin']);
Route::get('/chapel/create', [ChapelController::class, 'create'])->middleware(['auth', 'role:DioceseAdmin|ParishAdmin']);
Route::post('/chapel/create', [ChapelController::class, 'store'])->middleware(['auth', 'role:DioceseAdmin|ParishAdmin']);

Route::get('/clusters/{church}', [ClusterController::class, 'index'])->middleware(['auth']);
Route::get('/cluster/create/{church}', [ClusterController::class, 'create'])->middleware(['auth']);
Route::post('/cluster/create', [ClusterController::class, 'store'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
