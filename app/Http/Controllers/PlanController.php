<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\plan;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function GetData() {

        $plans = plan::where('userid', Auth::id())->get();

        return view('home', compact(['plans']));
    }
}
