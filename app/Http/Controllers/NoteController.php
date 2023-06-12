<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\note;
use App\Models\tag;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function GetData()
    {
        $tags = tag::where('userid', Auth::id())->get();

        $notes = note::where('userid', Auth::id())->get();
        return view('notes', compact(['notes', 'tags']));
    }

    public function DeleteNote($id)
    {
        note::where('id', $id)->delete();
        return redirect()->back();
    }
}
