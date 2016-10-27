<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Form;

class FormInfoController extends Controller
{
     public function store(Request $request){

    	$form = new Form;

    	$form->Nombre = $request->input('Nombre');
    	$form->ApPat = $request->input('ApPat');
    	$form->ApMat = $request->input('ApMat');
    	$form->FechaNacimiento = $request->input('FechaNacimiento');
    	$form->Genero = $request->input('Genero');
    	$form->Nacionalidad = $request->input('Nacionalidad');
    	$form->CP = $request->input('CP');
    	$form->Institucion = $request->input('Institucion');
    	$form->Cargo = $request->input('Cargo');
    	$form->Cel = $request->input('Cel');
    	$form->Email = $request->input('Email');
    	$form->SS1 = $request->input('SS1');
    	$form->SS2 = $request->input('SS2');
    	$form->SS3 = $request->input('SS3');
    	$form->Opcion1 = $request->input('Opcion1');
    	$form->Opcion2 = $request->input('Opcion2');
    	$form->Opcion3 = $request->input('Opcion3');
    	$form->Opcion4 = $request->input('Opcion4');
    	$form->Opcion5 = $request->input('Opcion5');
    	$form->NomInst = $request->input('NomInst');
    	$form->Lugar = $request->input('Lugar');
    	$form->TelInst = $request->input('TelInst');
    	$form->Actividad = $request->input('Actividad');
    	$form->Beneficio = $request->input('Beneficio');
    	$form->PeriodoSS = $request->input('InicioSS');
    	$form->PeriodoSS = $request->input('FinSS');
    	$form->save();
    	return redirect('/EndOfForm');
     }
}
