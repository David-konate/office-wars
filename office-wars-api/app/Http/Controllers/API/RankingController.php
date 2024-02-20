<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
