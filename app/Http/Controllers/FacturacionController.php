<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function index(){
        return view('tenancy.administracion.index');
    }
}
