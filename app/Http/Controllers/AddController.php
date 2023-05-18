<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan;
use App\Models\tag;
use App\Models\note;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function GetTags()
    {
        $tags = tag::get();

        return view('add', compact(['tags']));
    }

    public function AddPlan(Request $request)
    {
        if($request->has('important')){
            $important = 1;
        }
        else {
            $important = 0;
        }
        plan::create([
            'description' => $request['description'],
            'important' => $important,
            'userid' => Auth::id(),
            'tag_id' => $request['tag'],
            'done' => 0,
            'date' => $request['date'],
        ]);

        return redirect('/');
    }

    public function AddNote(Request $request)
    {
        note::create([
            'description' => $request['description'],
            'userid' => Auth::id(),
        ]);

        return redirect('/');
    }

    public function AddTag(Request $request)
    {
        tag::create([
            'name' => $request['name'],
            'color' => $request['color'],
            'userid' => Auth::id(),
        ]);

        return redirect('/');
    }
}
