<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(Request $request, $church_id){
        $schedules = Schedule::orderBy('id');

        $schedules->with('church');

        $schedules = Schedule::whereHas('church', function ($query) use ($church_id) {
            $query->where('id', '=', $church_id);
        });

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the baptismal record based on the given field and filter
            $schedules = Schedule::whereHas('receipt', function ($query) use ($field, $filter) {
                $query->where($field, 'like', "%$filter%");
            });
        }


        return view('schedule.schedules-list', ['schedules' => $schedules->get()]);
    }

    public function create(){
        return view('schedule.schedule-create');
    }

    public function store(Request $request){
        $request->validate([
            'date'          => 'required|date',
            'description'   => 'required|string',
            'time_start'    => 'required|date_format:H:i',
            'time_end'      => 'required|date_format:H:i|after:time_start',
            'church_id'     => 'required|integer',
        ]);

        Schedule::create([
            'date'          =>  $request->date,
            'description'   =>  $request->description,
            'time_start'    =>  $request->time_start,
            'time_end'      =>  $request->time_end,
            'church_id'     =>  Auth::user()->church->id,
        ]);

        return redirect('/schedules');

    }
}
