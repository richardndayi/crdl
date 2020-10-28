<?php

Namespace App\Http\Controllers;
use App\Typeformation;
use App\Inscrit;
use App\Cour;
use App\Salle;
use App\Formateur;


 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 
class TypeformationsController extends Controller{

public function index()
{
    # code... 
    $dureeformations = DB::table('typeformations')
                 ->join('inscrits','typeformations.inscrit_id','inscrits.id')
                 ->join('cours','typeformations.cour_id','cours.id')
                 ->join('salles','dureeformations.salle_id','salles.id')
                 ->join('formateurs','dureeformations.formateur_id','formateurs.id')
                 ->select('cours.*','salles.*','formateurs.*','dureeformations.*')
                 ->get();
    return view('dureeformations/index',
    ['dureeformations'=>$dureeformations]);

}

public function create()

{
  $cours = Cour::all();
  $salles = Salle::all();
  $formateurs = Formateur::all();

    # code...
    return view('dureeformations/create',
   ['cours'=>$cours,'salles'=>$salles,'formateurs'=>$formateurs]);
   
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'cour_id' =>'required',
        'salle_id' =>'required',
        'formateur_id' =>'required',
        'dureeformation' =>'required',
        'datedebut' =>'required',
        'datefin' =>'required',
        'prix' =>'required'
    ]);
    $dureeformation= new Dureeformation();
    $dureeformation->cour_id= $request->cour_id;
    $dureeformation->salle_id= $request->salle_id;
    $dureeformation->formateur_id= $request->formateur_id;
    $dureeformation->dureeformation= $request->dureeformation;
    $dureeformation->datedebut= $request->datedebut;
    $dureeformation->datefin= $request->datefin;
    $dureeformation->prix= $request->prix;

    $dureeformation->save();
    return redirect('dureeformations');

}

//dependency injection
public function edit(Dureeformation $dureeformation)
{
    # code...
    $cours= Cour::all();
    $salles= Salle::all();
    $formateurs= Formateur::all(); 
    $dureeformation= Dureeformation::find($dureeformation->id);
    return view('dureeformations/edit', [
        'dureeformations'=>$dureeformations,
        'cours'=>$cours,
        'salles'=>$salles,
        'formateurs'=>$formateurs

    ]);
}

public function update(Request $request, dureeformation $dureeformation)

{
    $request->validate([
        'cour_id' =>'required',
        'salle_id' =>'required',
        'formateur_id' =>'required',
        'dureeformation' =>'required',
        'datedebut' =>'required',
        'datefin' =>'required',
        'prix' =>'required'
    ]);
    $dureeformation->cour_id= $request->cour_id;
    $dureeformation->salle_id= $request->salle_id;
    $dureeformation->formateur_id= $request->formateur_id;
    $dureeformation->dureeformation= $request->dureeformation;
    $dureeformation->datedebut= $request->datedebut;
    $dureeformation->datefin= $request->datefin;
    $dureeformation->prix= $request->prix;

    $dureeformation->save();
    return redirect('dureeformations');

   
}

public function destroy(dureeformation $dureeformation)
{
    # code...

    $dureeformation= dureeformation::find($dureeformation->id);
  $dureeformation->delete();
  return redirect('dureeformations');
}


}