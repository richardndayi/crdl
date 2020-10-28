<?php

Namespace App\Http\Controllers;
use App\Formateur;

 use Illuminate\Http\Request;
class FormateursController extends Controller{

public function index()
{
    # code... 
    $formateurs = Formateur::all();
    return view('formateurs/index',['formateurs'=>$formateurs]);

}

public function create()
{
    # code...
    return view('formateurs/create');
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'nom_form' =>'required',
        'prenom_form' =>'required',
        'niv_etude' =>'required',
        'email_form' =>'required',
        'tel_form' =>'required'
    ]);
    $formateur= new Formateur();
    $formateur->nom_form= $request->nom_form;
    $formateur->prenom_form= $request->prenom_form;
    $formateur->niv_etude= $request->niv_etude;
    $formateur->email_form= $request->email_form;
    $formateur->tel_form = $request->tel_form;

    $formateur->save();
    return redirect('formateurs');

}

//dependency injection
public function edit(Formateur $formateur)
{
    # code...

    $formateur= Formateur::find($formateur->id);
    return view('formateurs/edit', [
        'formateur'=>$formateur
    ]);
}

public function update(Request $request, formateur $formateur)
{
    # code...
    $formateur->nom_form= $request->nom_form;
    $formateur->prenom_form= $request->prenom_form;
    $formateur->niv_etude= $request->niv_etude;
    $formateur->email_form= $request->email_form;
    $formateur->tel_form = $request->tel_form;
    $formateur->save();
    return redirect('formateurs');
}

public function destroy(formateur $formateur)
{
    # code...

    $formateur= formateur::find($formateur->id);
  $formateur->delete();
  return redirect('formateurs');
}


}

