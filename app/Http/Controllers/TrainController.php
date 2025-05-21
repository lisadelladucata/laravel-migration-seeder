<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
   public function index()
    {
        $oggi = Carbon::now();

        $trains = Train::where('departure_time', '>=', $oggi)
            ->orderBy('departure_time')
            ->get();

        return view('home', compact('trains'));
    }
}
