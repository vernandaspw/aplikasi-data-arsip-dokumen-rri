<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Kantor;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $jmlArsip = Arsip::get()->count();
        $jmlAkun = User::get()->count();
        $jmlKantor = Kantor::get()->count();

        return view('home', compact('jmlArsip', 'jmlAkun', 'jmlKantor'));
    }
}
