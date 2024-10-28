<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pamisa;

class PamisaController extends Controller
{
    public function index(Request $request, $church_id){
        $pamisas = Pamisa::orderBy('id');

        $pamisas->with('receipt');
        $pamisas->with('church');

        $pamisas = Pamisa::whereHas('church', function ($query) use ($church_id) {
            $query->where('id', '=', $church_id);
        });

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the baptismal record based on the given field and filter
            $pamisas = Pamisa::whereHas('receipt', function ($query) use ($field, $filter) {
                $query->where($field, 'like', "%$filter%");
            });
        }

        return view('pamisa.pamisa-list', ['pamisas' => $pamisas->get()]);

    }

    public function create($receipt_id){
        return view('pamisa.pamisa-create', ['receipt_id' => $receipt_id]);
    }

    public function store(Request $request){

        $request->validate([
            'name'                  => 'required|string',
            'prayer_intention'      => 'required|string',
            'prayer_intention_to'   => 'required|string',
            'date'                  => 'required|date',
            'mass_schedule'         => 'required|string',
            'receipt_id'            => 'required|integer',
            'church_id'             => 'required|integer',
        ]);

        Pamisa::create([
            'name'                  => $request->name,
            'prayer_intention'      => $request->prayer_intention,
            'prayer_intention_to'   => $request->prayer_intention_to,
            'date'                  => $request->date,
            'mass_schedule'         => $request->mass_schedule,
            'receipt_id'            => $request->receipt_id,
            'church_id'             => $request->church_id,
        ]);

        return redirect('/pamisa');
    }
}
