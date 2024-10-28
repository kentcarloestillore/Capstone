<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage;
use App\Models\Parishioner;
use App\Models\MarriageSponsor;
use Barryvdh\DomPDF\Facade\Pdf;

class MarriageController extends Controller
{
    public function index(Request $request){

        $marriages = Marriage::orderBy('id');

        $marriages->with('husband');
        $marriages->with('wife');
        $marriages->with('church');
        $marriages->with('sponsors');

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the marriage record based on the given field and filter
            $marriages = Marriage::whereHas('husband', function ($query) use ($field, $filter) {
                $query->where($field, 'like', "%$filter%");
            });
        }

        return view('retrieve.marriage.marriages-list', ['marriages' => $marriages->get()]);
    }

    public function show(Marriage $marriage){
        $marriage->load('husband', 'wife', 'church', 'sponsors');
        return view('retrieve.marriage.marriage-show', ['marriage' => $marriage]);
    }

    public function create(){
        return view('register.marriage.create-marriage');
    }

    public function store(Request $request){
        $request->validate([
            'book_number'               =>  'required|integer',
            'page_number'               =>  'required|integer',
            'serial_number'             =>  'required|integer',
            'name_of_clergy'            =>  'required|string',
            'date_of_marriage'          =>  'required|date',
            'place_of_marriage'         =>  'required|string',
            'church_id'                 =>  'required|integer',
            'name_of_church'            =>  'required|string',
            // husband form
            'fullname_husband'          =>  'required|string',
            'residence_husband'         =>  'required|string',
            'date_of_birth_husband'     =>  'required|date',
            'place_of_birth_husband'    =>  'required|string',
            'citizenship_husband'       =>  'required|string',
            'name_of_father_husband'    =>  'required|string',
            'name_of_mother_husband'    =>  'required|string',
            // wife form
            'fullname_wife'             =>  'required|string',
            'residence_wife'            =>  'required|string',
            'date_of_birth_wife'        =>  'required|date',
            'place_of_birth_wife'       =>  'required|string',
            'citizenship_wife'          =>  'required|string',
            'name_of_father_wife'       =>  'required|string',
            'name_of_mother_wife'       =>  'required|string',
            'sponsors'                  =>  'required|array',
            'sponsors.*'                =>  'required|string',
        ]);

        $husband = Parishioner::where('fullname', '=', $request->fullname_husband)
                        ->where('residence', '=', $request->residence_husband)
                        ->where('date_of_birth', '=', $request->date_of_birth_husband)
                        ->where('place_of_birth', '=', $request->place_of_birth_husband)
                        ->first();

        if(!$husband) {
            $husband = Parishioner::create([
                'fullname'              =>  $request->fullname_husband,
                'residence'             =>  $request->residence_husband,
                'date_of_birth'         =>  $request->date_of_birth_husband,
                'place_of_birth'        =>  $request->place_of_birth_husband,
                'sex'                   =>  'Male',
                'citizenship'           =>  $request->citizenship_husband,
                'name_of_father'        =>  $request->name_of_father_husband,
                'name_of_mother'        =>  $request->name_of_mother_husband,
                'church_id'             =>  $request->church_id,
            ]);
        }

        $wife = Parishioner::where('fullname', '=', $request->fullname_wife)
                        ->where('residence', '=', $request->residence_wife)
                        ->where('date_of_birth', '=', $request->date_of_birth_wife)
                        ->where('place_of_birth', '=', $request->place_of_birth_wife)
                        ->first();

        if(!$wife) {
            $wife = Parishioner::create([
                'fullname'              =>  $request->fullname_wife,
                'residence'             =>  $request->residence_wife,
                'date_of_birth'         =>  $request->date_of_birth_wife,
                'place_of_birth'        =>  $request->place_of_birth_wife,
                'sex'                   =>  'Female',
                'citizenship'           =>  $request->citizenship_wife,
                'name_of_father'        =>  $request->name_of_father_wife,
                'name_of_mother'        =>  $request->name_of_mother_wife,
                'church_id'             =>  $request->church_id,
            ]);
        }

        $husband->load('marriagesAsHusband');
        $wife->load('marriagesAsWife');

        if (!$husband->marriagesAsHusband && !$wife->marriagesAsWife) {
            $marriage = Marriage::create([
                'book_number'           =>  $request->book_number,
                'page_number'           =>  $request->page_number,
                'serial_number'         =>  $request->serial_number,
                'husband_id'            =>  $husband->id,
                'wife_id'               =>  $wife->id,
                'name_of_clergy'        =>  $request->name_of_clergy,
                'date_of_marriage'      =>  $request->date_of_marriage,
                'place_of_marriage'     =>  $request->place_of_marriage,
                'name_of_church'        =>  $request->name_of_church,
                'church_id'             =>  $request->church_id,
            ]);

            $husband->load('marriagesAsHusband');

            foreach ($request->sponsors as $sponsor) {
                MarriageSponsor::create([
                    'fullname'         =>  $sponsor,
                    'marriage_id'      =>  $husband->marriagesAsHusband->id,
                ]);
            }

        }



        return redirect('/retrieve/marriage/'. $husband->marriagesAsHusband->id);

    }

    public function pdf(Marriage $marriage){
        $marriage->load('husband', 'wife','church', 'sponsors');

        $pdf = Pdf::loadView('retrieve.marriage.marriage-pdf', ['marriage' => $marriage]);
        return $pdf->stream();
    }
}
