<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerificationController;
use App\Models\Categorie;
use App\Models\Famillies;
use App\Models\HoldOn;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [HomeController::class, 'search'])->name('search');

Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class, 'send'])->name('verification.send');

Route::get('/product', function() {
    $famillies = Cache::store('redis')->get('famillies');
    if ($famillies == null) {
        $famillies = Famillies::orderBy('index', 'ASC')
            ->get();
        foreach ($famillies as $familly) {
            $familly->categories = HoldOn::where('id_familly', $familly->id)->get();
            foreach ($familly->categories as $value) {
                $value->sub = Categorie::where('sub_name', $value->name_category)->get();
            }
        }
        Cache::store('redis')->put('famillies', $famillies, now()->addMinutes(10));
    }
    view()->share(compact('famillies'));
    return view('products.show');
})->name('product');
