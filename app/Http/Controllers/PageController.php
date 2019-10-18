<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function inicio(){
        return view('principal');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function contacto(){
        return view('contacto');
    }

    public function cursos(){
        
        $cursoEst = App\CursoUNAM::paginate(3);
        
        return view('curso', compact('cursoEst'));
    }

    public function cursosExt(){
        
        $cursoExternos = App\CursoExternos::paginate(3);
        
        return view('cursosExternos', compact('cursoExternos'));
    }    
}
