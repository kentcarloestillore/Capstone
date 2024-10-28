<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
    }

    public function register(){
        return view('register.parishioner.create-parishioner');
    }

    public function baptismals(){
        return view('retrieve.baptismal.baptismals');
    }

    public function confirmations(){
        return view('retrieve.confirmation.confirmations');
    }

    public function marriages(){
        return view('retrieve.marriage.marriages');
    }

    public function deaths(){
        return view('retrieve.death.deaths');
    }

    public function donations(){
        return view('donation.donations');
    }

    public function receipts(){
        return view('receipt.receipts');
    }

    public function schedules(){
        return view('schedule.schedules');
    }

    public function earnings(){
        return view('pages.earning');
    }

    public function pamisa(){
        return view('pamisa.pamisa');
    }

    public function pss(){
        return view('pages.pss');
    }

    public function users(){
        return view('user.users');
    }
}
