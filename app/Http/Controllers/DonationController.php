<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index(Request $request, $church_id){

        $donations = Donation::orderBy('id');

        $donations->with('church');

        $donations = Donation::whereHas('church', function ($query) use ($church_id) {
            $query->where('church_id', '=', $church_id);
        });

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the receipt record based on the given field and filter
            $donations->where($field, 'like', "%$filter%");
        }

        return view('donation.donations-list', ['donations' => $donations->get()]);

    }

    public function create(){
        return view('donation.donation-create');
    }

    public function store(Request $request){

        $request->validate([
            'name'          =>  'required|string',
            'date_donated'  =>  'required|date',
            'amount'        =>  'required|numeric',
            'remarks'       =>  'required|string',
            'church_id'     =>  'required|integer'
        ]);

        Donation::create([
            'name'          =>  $request->name,
            'date_donated'  =>  $request->date_donated,
            'amount'        =>  $request->amount,
            'remarks'       =>  $request->remarks,
            'church_id'     =>  $request->church_id
        ]);

        return redirect('/donations');
    }
}
