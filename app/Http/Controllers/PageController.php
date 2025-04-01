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
        // $trainsOrdered = Train::orderBy('train_code')->get();

        // dd([$trains, $trainsOrdered]);

        return view('index', compact('trains'));
    }
}