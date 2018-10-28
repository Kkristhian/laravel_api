<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller {
    
    public function getInicial() {
        return view('inicial');
    }
}