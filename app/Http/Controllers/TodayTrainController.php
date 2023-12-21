<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TodayTrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('today-trains.index', compact('trains'));
    }
}