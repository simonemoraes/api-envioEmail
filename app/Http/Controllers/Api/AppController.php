<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\primeiroEmail;

class AppController extends Controller
{
    public function index(){
        return view('index');
    }

    public function enviaPrimeiroEmail(Request $request){

        $cliente = $request->all();

        $result = \App\Cliente::create($cliente);

        Mail::to('contato@kitrufas.com.br')->send(new primeiroEmail($result));
        // retorno da API
        return response()->json($result);
    }
}
