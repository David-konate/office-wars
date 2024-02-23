<?php


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiteController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\PlanetController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\RankingController;
use App\Http\Controllers\Api\SecurityController;
use App\Http\Controllers\Api\AccomodationController;
use App\Http\Controllers\Api\QuestionController;
use App\Models\Ranking;

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


Route::get('/me', function () {
    // Assurez-vous que l'utilisateur est authentifié
    $user = Auth::user();

    // Charger l'utilisateur avec la relation "rankings"
    $userWithRankings = User::with('rankings')->find($user->id);

    // Récupérer les 3 meilleurs classements pour l'utilisateur spécifié
    $topRankings = Ranking::where('user_id', $user->id)
        ->orderByDesc('resultQuizz')
        ->limit(3)
        ->get();

    // Récupérer les 3 derniers résultats triés par ordre croissant de 'resultQuizz' pour l'utilisateur spécifié
    $latestRankings = Ranking::where('user_id', $user->id)
        ->orderByDesc('created_at') // Utilisation de orderByDesc pour trier par ordre décroissant
        ->limit(3)
        ->get();

    // Compter le nombre total de classements de l'utilisateur
    $totalRankingsCount = Ranking::where('user_id', $user->id)->count();

    // Retourner les données sous forme de tableau associatif
    return [
        'user' => $user,
        'rankings' => $userWithRankings->rankings,
        'topRankings' => $topRankings,
        'latestRankings' => $latestRankings,
        'totalRankingsCount' => $totalRankingsCount,
    ];
})->middleware('auth:sanctum');
//Route users
Route::prefix('/security')->group(function () {
    Route::post('/register', [SecurityController::class, 'register'])->middleware('guest')->name('security.register');
    Route::post('/login', [SecurityController::class, 'login'])->middleware(['guest'])->name('security.login');
    Route::post('/logout', [SecurityController::class, 'logout'])->middleware('auth:sanctum');
});

//Route users
Route::controller(UserController::class)->group(function () {
    Route::get('users/{user}', 'show');
    Route::get('users/{users}', 'multi');
    Route::get('users', 'index');
    Route::post('users/{user}', 'update')->middleware('auth:sanctum');
    Route::delete('users/{user}', 'destroy')->middleware('auth:sanctum');
});

//Route hotels
Route::controller(AccomodationController::class)->group(function () {
    Route::get('accomodations/{accomodation}', 'show');
    Route::get('accomodations', 'index');
    Route::post('accomodations', 'store')->middleware('auth:sanctum');
    Route::post('accomodations/{accomodation}', 'update')->middleware('auth:sanctum');
    Route::delete('accomodations/{accomodation}', 'destroy')->middleware('auth:sanctum');
});

//Route évènements
Route::controller(EventController::class)->group(function () {
    Route::get('events/{event}', 'show');
    Route::get('events', 'index');
    Route::post('events', 'store')->middleware('auth:sanctum');
    Route::post('events/{event}', 'update')->middleware('auth:sanctum');
    Route::delete('events/{event}', 'destroy')->middleware('auth:sanctum');
});

//Route images
Route::controller(ImageController::class)->group(function () {
    Route::get('images/eventslist', 'eventsList');
    Route::get('imagesHeadband', 'headband');
    Route::delete('images/{image}', 'destroy')->middleware('auth:sanctum');
});
//Route rankings
Route::controller(RankingController::class)->group(function () {
    Route::get('rankings', 'index');
    Route::post('rankings', 'saveStats');
    Route::get('rankings-welcome', 'welcome');
});
//Route questions
Route::controller(QuestionController::class)->group(function () {
    Route::get('new-game', 'index');
});
//Route planetes
Route::controller(PlanetController::class)->group(function () {
    Route::get('planets/{planet}', 'show');
    Route::get('planets', 'index');
    Route::post('planets', 'store');
    Route::post('planets/{planet}', 'update')->middleware('auth:sanctum');
    Route::delete('planets/{planet}', 'destroy')->middleware('auth:sanctum');
});


//Route commentaires
Route::controller(ReviewController::class)->group(function () {
    Route::get('reviews/{review}', 'show');
    Route::get('reviews', 'index');
    Route::post('reviews', 'store')->middleware('auth:sanctum');
    Route::post('reviews/{review}', 'update')->middleware('auth:sanctum');
    Route::delete('reviews/{review}', 'destroy')->middleware('auth:sanctum');
});

//Route des sites
Route::controller(SiteController::class)->group(function () {
    Route::get('sites/{site}', 'show');
    Route::get('sites', 'index');
    Route::post('sites', 'store')->middleware('auth:sanctum');
    Route::post('sites/{site}', 'update')->middleware('auth:sanctum');
    Route::delete('sites/{site}', 'destroy')->middleware('auth:sanctum');
});


//Route des types
Route::controller(TypeController::class)->group(function () {
    Route::get('types/{type}', 'show');
    Route::get('types', 'index');
    Route::post('types', 'store')->middleware('auth:sanctum');
    Route::post('types/{type}', 'update')->middleware('auth:sanctum');
    Route::delete('types/{type}', 'destroy')->middleware('auth:sanctum');
});
