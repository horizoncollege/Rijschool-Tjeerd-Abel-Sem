<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('user')->group(function () {
    Route::middleware('auth:sanctum')->get('/', [UserController::class, 'index']);

    Route::get('/show/{id}', [UserController::class, 'show'])
        ->name('show');

    Route::post('/update/{id}', [UserController::class, 'update'])
        ->name('update');

    Route::post('/edit/{id}', [UserController::class, 'edit'])
        ->name('edit');

    Route::post('/destroy/{id}', [UserController::class, 'destroy'])
        ->name('destroy');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware('guest')
        ->name('register');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('web')
        ->name('login');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->middleware('guest')
        ->name('password.email');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware('guest')
        ->name('password.store');

    Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::prefix('lesson')->group(function () {
    Route::get('/', [LessonController::class, 'index'])
        ->name('lesson');

    Route::get('/show/{id}', [LessonController::class, 'show'])
        ->name('lesson.show');

    Route::post('/store', [LessonController::class, 'store'])
        ->name('lesson.store');

    Route::delete('/destroy/{id}', [LessonController::class, 'destroy'])
        ->name('lesson.destroy');

    Route::post('/update/{id}', [LessonController::class, 'update'])
        ->name('lesson.update');

    Route::get('/edit/{id}', [LessonController::class, 'edit'])
        ->name('lesson.edit');
});
