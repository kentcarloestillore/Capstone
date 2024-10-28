<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parishioner;
use App\Models\Death;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class DeathController extends Controller
{
    public function index(Request $request){

        $deaths = Death::orderBy('id');

        $deaths->with('parishioner');
        $deaths->with('church');

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the baptismal record based on the given field and filter
            $deaths = Death::whereHas('parishioner', function ($query) use ($field, $filter) {
                $query->where($field, 'like', "%$filter%");
            });
        }

        return view('retrieve.death.deaths-list', ['deaths' => $deaths->get()]);
    }

    public function show(Death $death){
        $death->load('parishioner', 'church');

        $dateOfBirth = Carbon::parse($death->parishioner->date_of_birth);
        $dateOfDeath = Carbon::parse($death->date_of_death);
        $age = (int) $dateOfBirth->diffInYears($dateOfDeath);

        return view('retrieve.death.death-show', ['death' => $death, 'age' => $age]);
    }

    public function create(){
        return view('register.death.create-death');
    }

    public function store(Request $request){

        $request->validate([
            'book_number'           =>  'required|integer',
            'page_number'           =>  'required|integer',
            'serial_number'         =>  'required|integer',
            'name_of_clergy'        =>  'required|string',
            'partner_name'          =>  'required|string',
            'church_id'             =>  'required|integer',
            'date_of_death'         =>  'required|date',
            'date_of_burial'        =>  'required|date',
            'cause_of_death'        =>  'required|string',
            'name_of_cemetery'      =>  'required|string',
            'received_any_sacrament'=>  'required|boolean',
            'fullname'              =>  'required|string',
            'residence'             =>  'required|string',
            'date_of_birth'         =>  'required|date',
            'place_of_birth'        =>  'required|string',
            'sex'                   =>  'required',
            'citizenship'           =>  'required|string',
            'name_of_father'        =>  'required|string',
            'name_of_mother'        =>  'required|string',
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

        $parishioner->load('death');

        if (!$parishioner->death) {
            Death::create([
                'book_number'           =>  $request->book_number,
                'page_number'           =>  $request->page_number,
                'serial_number'         =>  $request->serial_number,
                'parishioner_id'        =>  $parishioner->id,
                'name_of_clergy'        =>  $request->name_of_clergy,
                'partner_name'          =>  $request->partner_name,
                'church_id'             =>  $request->church_id,
                'date_of_death'         =>  $request->date_of_death,
                'date_of_burial'        =>  $request->date_of_burial,
                'cause_of_death'        =>  $request->cause_of_death,
                'name_of_cemetery'      =>  $request->name_of_cemetery,
                'received_any_sacrament'=>  $request->received_any_sacrament,
            ]);
        }

        $parishioner->load('death');

        return redirect('/retrieve/death/'. $parishioner->death->id);
    }

    public function pdf(Death $death){
        $death->load('parishioner','church');
        $dateOfBirth = Carbon::parse($death->parishioner->date_of_birth);
        $dateOfDeath = Carbon::parse($death->date_of_death);
        $age = (int) $dateOfBirth->diffInYears($dateOfDeath);
        $dateOfDeath = Carbon::parse($death->date_of_death);
        $dateOfDeathDay = $dateOfDeath->format('d');
        $dateOfDeathMonth = $dateOfDeath->format('F');
        $dateOfDeathYear = $dateOfDeath->format('Y');
        $dateOfBuried = Carbon::parse($death->date_of_burial);
        $dateOfBuriedDay = $dateOfBuried->format('d');
        $dateOfBuriedMonth = $dateOfBuried->format('F');
        $dateOfBuriedYear = $dateOfBuried->format('Y');
        $dateToday = Carbon::now()->format('d');
        $dateMonth = Carbon::now()->format('F');
        $dateYear = Carbon::now()->format('Y');
        $pdf = Pdf::loadView('retrieve.death.death-pdf', [
                            'death'             => $death,
                            'age'               => $age,
                            'dateOfDeathDay'    => $dateOfDeathDay,
                            'dateOfDeathMonth'  => $dateOfDeathMonth,
                            'dateOfDeathYear'   => $dateOfDeathYear,
                            'dateOfBuriedDay'   => $dateOfBuriedDay,
                            'dateOfBuriedMonth' => $dateOfBuriedMonth,
                            'dateOfBuriedYear'  => $dateOfBuriedYear,
                            'dateToday'         => $dateToday,
                            'dateMonth'         => $dateMonth,
                            'dateYear'          => $dateYear]);
        return $pdf->stream();
    }
}
