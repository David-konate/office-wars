<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function userProfil(User $user)
    {
        // Pas besoin de vérifier si l'utilisateur existe, Laravel le fait automatiquement
        // Récupérer les 3 meilleurs résultats triés par ordre décroissant de 'resultQuizz' pour l'utilisateur spécifié
        $topRankings = Ranking::where('user_id', $user->id)
            ->orderByDesc('resultQuizz')
            ->limit(3)
            ->get();

        // Récupérer les 3 derniers résultats triés par ordre croissant de 'resultQuizz' pour l'utilisateur spécifié
        $latestRankings = Ranking::where('user_id', $user->id)
            ->orderBy('resultQuizz')
            ->limit(3)
            ->get();

        // Compter le nombre total de classements de l'utilisateur
        $totalRankingsCount = Ranking::where('user_id', $user->id)->count();

        return response()->json([
            'status' => true,
            'data' => [
                'top_rankings' => $topRankings,
                'latest_rankings' => $latestRankings,
                'total_rankings_count' => $totalRankingsCount,
            ],
        ]);
    }
}
