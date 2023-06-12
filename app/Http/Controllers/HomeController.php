<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function mailContact(Request $request)
    {
        # code...
        $data=[];
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'empresa' => 'required'
        ]);
        $data['nombre'] =$request->nombre;
        $data['email'] =$request->email;
        $data['telefono'] =$request->telefono;
        $data['empresa'] =$request->empresa;
        // return $data;
        Mail::to($request->email)->send(new ContactMail(json_encode($data)));
        // return $data;
        return redirect()->route('home')->with('info', 'Mensaje enviado');
    }
}
