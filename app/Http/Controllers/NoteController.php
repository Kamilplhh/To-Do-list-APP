<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function GetData()
    {
        $notes = note::where('userid', Auth::id())->get();
        return view('notes', compact(['notes']));
    }

    public function DeleteNote($id)
    {
        note::where('id', $id)->delete();
        return redirect()->back();
    }
}
