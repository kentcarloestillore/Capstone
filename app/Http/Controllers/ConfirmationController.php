<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmation;
use App\Models\Parishioner;
use App\Models\ConfirmationSponsor;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class ConfirmationController extends Controller
{
    public function index(Request $request){

        $confirmations = Confirmation::orderBy('id');

        $confirmations->with('parishioner');
        $confirmations->with('church');
        $confirmations->with('sponsors');

        if ($request->has('filter') || $request->has('category')) {
            $field = $request->field;
            $filter = $request->filter;

            // Find the confirmational record based on the given field and filter
            $confirmations = Confirmation::whereHas('parishioner', function ($query) use ($field, $filter) {
                $query->where($field, 'like', "%$filter%");
            });
        }

        return view('retrieve.confirmation.confirmations-list', ['confirmations' => $confirmations->get()]);
    }

    public function show(Confirmation $confirmation){
        $confirmation->load('parishioner', 'church', 'sponsors');
        return view('retrieve.confirmation.confirmation-show', ['confirmation' => $confirmation]);
    }

    public function create(){
        return view('register.confirmation.create-confirmation');
    }

    public function store(Request $request){

        $request->validate([
            'book_number'                   =>  'required|integer',
            'page_number'                   =>  'required|integer',
            'serial_number'                 =>  'required|integer',
            'officiating_clergy'            =>  'required|string',
            'date_of_confirmation'          =>  'required|date',
            'church_id'                     =>  'required|integer',
            'place_of_confirmation'         =>  'required|string',
            'fullname'                      =>  'required|string',
            'residence'                     =>  'required|string',
            'date_of_birth'                 =>  'required|date',
            'place_of_birth'                =>  'required|string',
            'sex'                           =>  'required',
            'citizenship'                   =>  'required|string',
            'name_of_father'                =>  'required|string',
            'name_of_mother'                =>  'required|string',
            'confirmation_sponsors'         =>  'required|array',
            'confirmation_sponsors.*'       =>  'required|string',
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


        $parishioner->load('confirmation');

        if (!$parishioner->confirmation) {
            Confirmation::create([
                'book_number'           =>  $request->book_number,
                'page_number'           =>  $request->page_number,
                'serial_number'         =>  $request->serial_number,
                'parishioner_id'        =>  $parishioner->id,
                'officiating_clergy'    =>  $request->officiating_clergy,
                'date_of_confirmation'  =>  $request->date_of_confirmation,
                'church_id'             =>  $request->church_id,
                'place_of_confirmation' =>  $request->place_of_confirmation,
            ]);

            $parishioner->load('confirmation');

            foreach ($request->confirmation_sponsors as $confirmation_sponsor) {
                ConfirmationSponsor::create([
                    'fullname'          =>  $confirmation_sponsor,
                    'confirmation_id'   =>  $parishioner->confirmation->id,
                ]);
            }

        }

        return redirect('/retrieve/confirmation/'. $parishioner->confirmation->id);
    }

    public function pdf(Confirmation $confirmation){
        $confirmation->load('parishioner', 'church', 'sponsors');

        // Use Carbon to handle the date_of_confirmation
        $date = Carbon::parse($confirmation->date_of_confirmation);

        // Extract day, month (as text), and year
        $day = $date->format('d'); // Day
        $month = $date->format('F'); // Full month name like January, February
        $year = $date->format('Y'); // Year
        $dateToday = Carbon::now()->format('F d');
        $dateYear = Carbon::now()->format('Y');

        $pdf = Pdf::loadView('retrieve.confirmation.confirmation-pdf', ['confirmation' => $confirmation, 'day' => $day, 'month' => $month, 'year' => $year, 'dateToday' => $dateToday, 'dateYear' => $dateYear]);
        return $pdf->stream();
    }
}
