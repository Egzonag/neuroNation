<?php
// app/Http/Controllers/HistoryController.php

namespace App\Http\Controllers;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        //$userId = $request->query('userId');
        $userId = 2; //used this id since this user has the most number of sessions

        $history = Session::where('user_id', $userId)
        ->with('sessionExercises.exercise.course') 
        ->latest()
        ->take(12)
        ->get()
        ->map(function ($session){
            return [
                'sessions' => [
                    //'session_id'=> $session->id,
                    'score' => $session->calculateTotalScore(),
                    'date' => Carbon::parse($session->date)->format('Y-m-d '),
                ],
            ];
        });

        return response()->json(['history' => $history]);
    }
}