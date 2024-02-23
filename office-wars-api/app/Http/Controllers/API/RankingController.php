<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;


use App\Models\Ranking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $rankings = Ranking::with('user')->get();
            return response()->json([
                'rankings' => $rankings,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }


    public function welcome()
    {
        $now = Carbon::now();
        $firstDayOfMonth = $now->firstOfMonth()->toDateTimeString();
        $lastDayOfMonth = $now->lastOfMonth()->toDateTimeString();

        try {


            $latestRankings = DB::table('rankings')
                ->select('rankings.*', 'users.id', 'users.userImage', 'users.userPseudo')
                ->join('users', 'rankings.user_id', '=', 'users.id')
                ->orderBy('rankings.created_at', 'desc')
                ->take(5)
                ->get();


            $topRankings = DB::table('rankings')
                ->select('rankings.*', 'users.id', 'users.userImage', 'users.userPseudo')
                ->join('users', 'rankings.user_id', '=', 'users.id')
                ->whereBetween('rankings.created_at', [$firstDayOfMonth, $lastDayOfMonth]) // Filtrer par le mois actuel
                ->orderBy('rankings.resultQuizz', 'desc')
                ->take(10)
                ->get();

            return response()->json([
                'latestRankings' => $latestRankings,
                'topRankings' => $topRankings,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }

    public function saveStats(Request $request)
    {
        try {
            $data = $request->validate([
                'resultQuizz' => 'required',
                'timeQuizz' => 'required',
                'user_id' => 'required',
            ]);

            // Créer une nouvelle entrée dans la table rankings
            $ranking = Ranking::create([
                'resultQuizz' => $data['resultQuizz'],
                'timeQuizz' => $data['timeQuizz'],
                'user_id' => $data['user_id'],
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Résultat enregistré avec succès !',
                $ranking,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }
}
