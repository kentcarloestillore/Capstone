<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parishioner;

class ParishionerController extends Controller
{
    // public function store($type){

    //     if($type == 'baptismal'){
    //         return view('register.baptismal.create-baptismal');
    //     }
    //     if ($type == 'confirmation') {
    //         return view('register.confirmation.create-confirmation');
    //     }
    //     if ($type == 'death') {
    //         return view('register.death.create-death');
    //     }
    //     if ($type == 'marriage') {
    //         return view('register.marriage.create-marriage');
    //     }
    // }

    public function store($type){

        $views = [
            'baptismal'    => 'register.baptismal.create-baptismal',
            'confirmation' => 'register.confirmation.create-confirmation',
            'death'        => 'register.death.create-death',
            'marriage'     => 'register.marriage.create-marriage',
        ];

        return view($views[$type]);
    }
}
