<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('index', compact('trains'));
    }

    public function getTrainsByTime()
    {
        $is_chrono = true;
        $trains = Train::orderBy('arrival_time')->get();
        return view('index', compact('trains', 'is_chrono'));
    }
}