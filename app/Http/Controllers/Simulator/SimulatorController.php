<?php

namespace App\Http\Controllers\Simulator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimulatorController extends Controller
{
    public function index()
    {
        return view('simulator.index');
    }
}
