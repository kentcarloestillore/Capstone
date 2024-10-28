<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index(Request $request, $church_id){

        $receipts = Receipt::orderBy('id');

        $receipts->with('church');

        $receipts = Receipt::whereHas('church', function ($query) use ($church_id) {
            $query->where('church_id', '=', $church_id);
        });

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the receipt record based on the given field and filter
            $receipts->where($field, 'like', "%$filter%");
        }

        return view('receipt.receipt-list', ['receipts' => $receipts->get()]);

    }

    public function create(){
        return view('receipt.receipt-form');
    }

    public function store(Request $request){

        $request->validate([
            'title'              =>  'required|string',
            'description'       =>  'required|string',
            'amount'            =>  'required|numeric',
            'date_paid'         =>  'required|date',
            'receivers_name'    =>  'required|string',
            'church_id'         =>  'required|integer'
        ]);

        $receipt = Receipt::create([
            'title'             =>  $request->title,
            'description'       =>  $request->description,
            'amount'            =>  $request->amount,
            'date_paid'         =>  $request->date_paid,
            'receivers_name'    =>  $request->receivers_name,
            'church_id'         =>  $request->church_id

        ]);

        $views = [
            'certificate'   => '/receipts',
            'pamisa'        => '/pamisa/create/'.$receipt->id,
            'pss'           => '/pss',
            'other'         => '/receipts',
        ];

        return redirect($views[$request->title]);
    }
}
