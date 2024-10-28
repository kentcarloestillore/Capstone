<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baptismal;
use App\Models\Parishioner;
use App\Models\Godparent;
use Barryvdh\DomPDF\Facade\Pdf;

class BaptismalController extends Controller
{
    public function index(Request $request){


        $baptismals = Baptismal::orderBy('id');

        $baptismals->with('parishioner');
        $baptismals->with('church');
        $baptismals->with('godparents');

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the baptismal record based on the given field and filter
            $baptismals = Baptismal::whereHas('parishioner', function ($query) use ($field, $filter) {
                $query->where($field, 'like', "%$filter%");
            });
        }

        return view('retrieve.baptismal.baptismals-list', ['baptismals' => $baptismals->get()]);
    }

    // public function filteredIndex(Request $request){

    //     $baptismals = Baptismal::orderBy('id');

    //     // if ($request->filter) {
    //     //     $filter = $request->filter;
    //     //     $students->where(function ($query) use ($filter) {
    //     //         $query->where('last_name',   "%$filter%")
    //     //               ->orWhere('first_name', 'like', "%$filter%")
    //     //               ->orWhere('address', 'like', "%$filter%");
    //     //     });
    //     // }

    //     $baptismals->with('parishioner');
    //     $baptismals->with('church');
    //     $baptismals->with('godparents');

    //     if ($request->has('filter') || $request->has('category')) {
    //         $field = $request->field;
    //         $filter = $request->filter;

    //         // Find the baptismal record based on the given field and filter
    //         $baptismals = Baptismal::whereHas('parishioner', function ($query) use ($field, $filter) {
    //             $query->where($field, 'like', "%$filter%");
    //         }); // Use first() to get the first matching record
    //     }

    //     // $baptismal = Baptismal::whereHas('parishioner', function ($query) use ($fullname) {
    //     //     $query->where('fullname', 'like', "%$fullname%");
    //     // })->first();

    //     return view('retrieve.baptismal.baptismals-filtered', ['baptismals' => $baptismals->get()]);
    // }

    public function show(Baptismal $baptismal){
        $baptismal->load('parishioner', 'church', 'godparents');
        return view('retrieve.baptismal.baptismal-show', ['baptismal' => $baptismal]);
    }

    public function create(){
        return view('register.baptismal.create-baptismal');
    }

    public function store(Request $request){

        $request->validate([
            'book_number'           =>  'required|integer',
            'page_number'           =>  'required|integer',
            'serial_number'         =>  'required|integer',
            'officiating_clergy'    =>  'required|string',
            'date_of_baptism'       =>  'required|date',
            'church_id'             =>  'required|integer',
            'place_of_baptism'      =>  'required|string',
            'fullname'              =>  'required|string',
            'residence'             =>  'required|string',
            'date_of_birth'         =>  'required|date',
            'place_of_birth'        =>  'required|string',
            'sex'                   =>  'required',
            'citizenship'           =>  'required|string',
            'name_of_father'        =>  'required|string',
            'name_of_mother'        =>  'required|string',
            'godparents'            =>  'required|array',
            'godparents.*'          =>  'required|string',
        ]);

        $parishioner = Parishioner::where('fullname', '=', $request->fullname)
                        ->where('residence', '=', $request->residence)
                        ->where('date_of_birth', '=', $request->date_of_birth)
                        ->where('place_of_birth', '=', $request->place_of_birth)
                        ->first();

        if(!$parishioner) {
            $parishioner = Parishioner::create([
                'fullname'              =>  $request->fullname,
                'residence'             =>  $request->residence,
                'date_of_birth'         =>  $request->date_of_birth,
                'place_of_birth'        =>  $request->place_of_birth,
                'sex'                   =>  $request->sex,
                'citizenship'           =>  $request->citizenship,
                'name_of_father'        =>  $request->name_of_father,
                'name_of_mother'        =>  $request->name_of_mother,
                'church_id'             =>  $request->church_id,
            ]);
        }


        $parishioner->load('baptismal');

        if (!$parishioner->baptismal) {
            Baptismal::create([
                'book_number'           =>  $request->book_number,
                'page_number'           =>  $request->page_number,
                'serial_number'         =>  $request->serial_number,
                'parishioner_id'        =>  $parishioner->id,
                'officiating_clergy'    =>  $request->officiating_clergy,
                'date_of_baptism'       =>  $request->date_of_baptism,
                'church_id'             =>  $request->church_id,
                'place_of_baptism'      =>  $request->place_of_baptism,
            ]);

            $parishioner->load('baptismal');

            foreach ($request->godparents as $godparent) {
                Godparent::create([
                    'fullname'          =>  $godparent,
                    'baptismal_id'      =>  $parishioner->baptismal->id,
                ]);
            }
        }




        return redirect('/retrieve/baptismal/'. $parishioner->baptismal->id);
    }

    public function pdf(Baptismal $baptismal){

        $baptismal->load('parishioner', 'church', 'godparents');

        $pdf = Pdf::loadView('retrieve.baptismal.baptismal-pdf', ['baptismal' => $baptismal]);
        return $pdf->stream();
    }
}
