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

Route::get('/', function () {
    return view('home/index');
})->name('home');

Route::get('/sitemaps.xml', [App\Http\Controllers\HomeController::class, 'sitemaps'])
    ->name('sitemaps');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginStep1'])->name('login');

Route::get('loginstep2', [App\Http\Controllers\Auth\LoginController::class, 'showLoginStep2'])->name('loginstep2');

Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::post('usercheck', [App\Http\Controllers\Auth\LoginController::class, 'usercheck']);

Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm']);
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm']);
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset']);

Route::get('verify/resend', [App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('verify.resend');

Route::get('verify', [App\Http\Controllers\Auth\TwoFactorController::class, 'index'])->name('verify.index');

Route::get('store', [App\Http\Controllers\Auth\TwoFactorController::class, 'store'])->name('verify.store');

Route::post('/get-invited', [App\Http\Controllers\HomeController::class, 'getInvited'])
    ->name('get-invited');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware(['auth', 'g2fa', 'verified']);
//    ->middleware(['auth', 'twofactor', 'g2fa', 'verified']);
Route::get('/dashboard/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])
    ->name('welcome')
    ->middleware(['auth', 'g2fa']);

Route::get('/marketplace', [App\Http\Controllers\MaketplaceController::class, 'index'])
    ->name('marketplace-index')
    ->middleware(['auth', 'g2fa', 'verified']);
Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])
    ->name('wallet-index')
    ->middleware(['auth', 'g2fa', 'verified']);
Route::get('/wallet/{coin}', [App\Http\Controllers\WalletController::class, 'coinWallet'])
    ->middleware(['auth', 'g2fa', 'verified']);

Route::get('/myaccount', [App\Http\Controllers\MyaccountController::class, 'index'])
    ->name('myaccount')
    ->middleware(['auth', 'g2fa', 'verified']);
Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'index'])
    ->name('notification')
    ->middleware(['auth', 'g2fa', 'verified']);
Route::get('/marketcap', [App\Http\Controllers\MarketcapController::class, 'index'])
    ->name('marketcap')
    ->middleware(['auth', 'g2fa', 'verified']);

Route::get('/security', [App\Http\Controllers\SecurityController::class, 'index'])
    ->name('security')
    ->middleware(['auth']);

Route::post('/security/set-master-code', [App\Http\Controllers\SecurityController::class, 'setMasterCode'])
    ->name('set-master-code')
    ->middleware(['auth', 'g2fa']);
Route::post('/security/change-password', [App\Http\Controllers\SecurityController::class, 'changePassword'])
    ->name('change-password')
    ->middleware(['auth', 'g2fa']);

Route::group(['prefix' => 'g2fa'], function () {
    Route::get('/', [App\Http\Controllers\Google2FAController::class, 'show2faForm']);
    Route::post('/generateSecret', [App\Http\Controllers\Google2FAController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa', [App\Http\Controllers\Google2FAController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa', [App\Http\Controllers\Google2FAController::class, 'disable2fa'])->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('g2fa');
});

Route::post('/register/upload-profile', [App\Http\Controllers\WelcomeController::class, 'uploadProfile'])
    ->name('upload-profile')
    ->middleware(['auth', 'g2fa']);

Route::get('/register/kyc-verify', [App\Http\Controllers\WelcomeController::class, 'kycVerify'])
    ->name('register-kyc-verify')
    ->middleware(['auth']);
Route::post('/register/kyc-upload', [App\Http\Controllers\WelcomeController::class, 'kycUpload'])
    ->name('register-kyc-upload')
    ->middleware(['auth']);
Route::post('/register/kyc-delete', [App\Http\Controllers\WelcomeController::class, 'kycDelete'])
    ->name('register-kyc-delete')
    ->middleware(['auth']);
Route::post('/register/kyc-submit', [App\Http\Controllers\WelcomeController::class, 'kycSubmit'])
    ->name('register-kyc-submit')
    ->middleware(['auth']);

Route::get('/escrow/index', [App\Http\Controllers\EscrowController::class, 'index'])
    ->name('escrow-index')
    ->middleware(['auth']);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [App\Http\Controllers\Admin\UserManageController::class, 'index'])->name('admin_dashboard');
});
