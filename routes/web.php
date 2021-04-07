<?php

use App\Http\Controllers\Dashboard\Setting\Permission;
use App\Http\Controllers\Dashboard\Setting\Role;
use App\Http\Controllers\Dashboard\Setting\Site;
use App\Http\Controllers\Dashboard\Setting\Team;
use App\Http\Controllers\Dashboard\Setting\User;
use App\Http\Controllers\Jetstream\Inertia\ApiTokenController;
use App\Http\Controllers\Jetstream\Inertia\CurrentUserController;
use App\Http\Controllers\Jetstream\Inertia\OtherBrowserSessionsController;
use App\Http\Controllers\Jetstream\Inertia\PrivacyPolicyController;
use App\Http\Controllers\Jetstream\Inertia\ProfilePhotoController;
use App\Http\Controllers\Jetstream\Inertia\TeamController;
use App\Http\Controllers\Jetstream\Inertia\TeamMemberController;
use App\Http\Controllers\Jetstream\Inertia\TermsOfServiceController;
use App\Http\Controllers\Jetstream\Inertia\UserProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
use Laravel\Jetstream\Http\Controllers\TeamInvitationController;
use Laravel\Jetstream\Jetstream;

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
    return Inertia::render('Pages/Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
    if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
        Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');
        Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
    }

    Route::group(['middleware' => ['auth', 'verified']], function () {
        // User & Profile...
        Route::get('/user/profile', [UserProfileController::class, 'show'])
            ->name('profile.show');

        Route::delete('/user/other-browser-sessions', [OtherBrowserSessionsController::class, 'destroy'])
            ->name('other-browser-sessions.destroy');

        Route::delete('/user/profile-photo', [ProfilePhotoController::class, 'destroy'])
            ->name('current-user-photo.destroy');

        if (Jetstream::hasAccountDeletionFeatures()) {
            Route::delete('/user', [CurrentUserController::class, 'destroy'])
                ->name('current-user.destroy');
        }

        // API...
        if (Jetstream::hasApiFeatures()) {
            Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
            Route::post('/user/api-tokens', [ApiTokenController::class, 'store'])->name('api-tokens.store');
            Route::put('/user/api-tokens/{token}', [ApiTokenController::class, 'update'])->name('api-tokens.update');
            Route::delete('/user/api-tokens/{token}', [ApiTokenController::class, 'destroy'])->name('api-tokens.destroy');
        }

        // Teams...
        if (Jetstream::hasTeamFeatures()) {
            Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
            Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
            Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
            Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');
            Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
            Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');
            Route::post('/teams/{team}/members', [TeamMemberController::class, 'store'])->name('team-members.store');
            Route::put('/teams/{team}/members/{user}', [TeamMemberController::class, 'update'])->name('team-members.update');
            Route::delete('/teams/{team}/members/{user}', [TeamMemberController::class, 'destroy'])->name('team-members.destroy');

            Route::get('/team-invitations/{invitation}', [TeamInvitationController::class, 'accept'])
                ->middleware(['signed'])
                ->name('team-invitations.accept');

            Route::delete('/team-invitations/{invitation}', [TeamInvitationController::class, 'destroy'])
                ->name('team-invitations.destroy');
        }
    });
});

Route::middleware([
    'auth:sanctum',
    'verified'
])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Pages/Dashboard', [
            'menu' => config('menu.dashboard')
        ]);
    });

    Route::name('setting.')->prefix('setting')->group(function () {
        Route::get('/', function () {
            return Inertia::render('Pages/Dashboard/Setting', [
                'menu' => config('menu.dashboard')
            ]);
        });

        Route::resource('site', Site::class)->parameter('site', 'item');
        Route::resource('user', User::class)->parameter('user', 'item');
        Route::resource('team', Team::class)->parameter('team', 'item');
        Route::resource('role', Role::class)->parameter('role', 'item');
        Route::resource('permission', Permission::class)->parameter('permission', 'item');
    });
});
