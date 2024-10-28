<?php

namespace App\Http\Controllers;

use App\Models\Chapel;
use App\Models\Church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChapelController extends Controller
{
    public function index(Church $church){
        $church->with('chapels');
        $chapels = $church->chapels->sortBy('chapel_name');

        return view('chapel.chapels', ['chapels' => $chapels]);
    }

    public function create(){
        return view('chapel.chapel-create');
    }

    public function store(Request $request){
        $request->validate([
            'name_of_chapel'    => 'required|string',
            'address'           => 'required|string',
            'chapel_treasurer'  => 'required|string',
            'chapel_chairman'   => 'required|string'
        ]);

        $chapel = Chapel::create([
            'name_of_chapel'    => $request->name_of_chapel,
            'address'           => $request->address,
            'chapel_treasurer'  => $request->chapel_treasurer,
            'chapel_chairman'   => $request->chapel_chairman,
            'church_id'         => Auth::user()->church->id
        ]);

        return redirect("/chapels/$chapel->church_id");
    }
}
