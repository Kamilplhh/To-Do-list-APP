<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\plan;
use App\Models\tag;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function GetData()
    {
        $tags = tag::get();

        $plans = plan::where('userid', Auth::id())->get();

        return view('home', compact(['plans', 'tags']));
    }

    public function GetByImportant()
    {
        $tags = tag::get();

        $plans = plan::where([
            ['userid', Auth::id()],
            ['important', 1]
        ])->get();

        return view('home', compact(['plans', 'tags']));
    }

    public function GetByDate()
    {
        $tags = tag::get();

        $date = date("Y-m-d");
        $date = date("Y-m-d", strtotime("$date +7 day"));

        $plans = plan::where([
            ['userid', Auth::id()],
            ['date', '<=', $date]
        ])->get();

        return view('home', compact(['plans', 'tags']));
    }

    public function GetByTag($id)
    {
        $tags = tag::get();

        $plans = plan::where([
            ['userid', Auth::id()],
            ['tag_id', $id]
        ])->get();

        return view('home', compact(['plans', 'tags']));
    }

    public function GetDataR()
    {
        $tags = tag::get();

        $plans = plan::where('userid', Auth::id())->get();

        return view('remove', compact(['plans', 'tags']));
    }

    public function DeletePlan($id)
    {
        plan::where('id', $id)->delete();
        return redirect()->back();
    }
}
