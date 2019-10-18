<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cursoExternos = App\CursoExternos::paginate(2);
        $cursoEst = App\CursoUNAM::paginate(2);
        return view('home', compact('cursoExternos'), compact('cursoEst'));
    }

    public function planCurso(){
        return view('planCurso');
    } 

    public function metodoPago(){
        return view('metodoPago');
    }
}
