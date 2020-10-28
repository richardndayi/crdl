<?php

Namespace App\Http\Controllers;
use App\Typeformation;
use App\Cour;
use App\Salle;
use App\Formateur;


 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 
class TypeformationsController extends Controller{

public function index()
{
    # code... 
    $typeformations = DB::table('typeformations')
                 
                 ->join('cours','typeformations.cour_id','cours.id')
                 ->join('salles','typeformations.salle_id','salles.id')
                 ->join('formateurs','typeformations.formateur_id','formateurs.id')
                 ->select('cours.*','salles.*','formateurs.*','typeformations.*')
                 ->get();
    return view('typeformations/index',
    ['typeformations'=>$typeformations]);

}

public function create()

{
 
  $cours = Cour::all();
  $salles = Salle::all();
  $formateurs = Formateur::all();

    # code...
    return view('typeformations/create',
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
        'nomformation' =>'required',
        'dureeformation' =>'required',
        'datedebut' =>'required',
        'datefin' =>'required',
        
    ]);
    $typeformation= new Typeformation();
    
    $typeformation->cour_id= $request->cour_id;
    $typeformation->salle_id= $request->salle_id;
    $typeformation->formateur_id= $request->formateur_id;
    $typeformation->nomformation= $request->nomformation;
    $typeformation->dureeformation= $request->dureeformation;
    $typeformation->datedebut= $request->datedebut;
    $typeformation->datefin= $request->datefin;
   

    $typeformation->save();
    return redirect('typeformations');

}

//dependency injection
public function edit(Typeformation $typeformation)
{
    # code...
    
    $cours= Cour::all();
    $salles= Salle::all();
    $formateurs= Formateur::all(); 
    $typeformation= Typeformation::find($typeformation->id);
    return view('typeformations/edit', [
        'typeformation'=>$typeformation,
        
        'cours'=>$cours,
        'salles'=>$salles,
        'formateurs'=>$formateurs
       

    ]);
}

public function update(Request $request, typeformation $typeformation)

{
    $request->validate([
        
        'cour_id' =>'required',
        'salle_id' =>'required',
        'formateur_id' =>'required',
        'nomformation' =>'required',
        'dureeformation' =>'required',
        'datedebut' =>'required',
        'datefin' =>'required',
        
    ]);
    
    $typeformation->cour_id= $request->cour_id;
    $typeformation->salle_id= $request->salle_id;
    $typeformation->formateur_id= $request->formateur_id;
    $typeformation->nomformation= $request->nomformation;
    $typeformation->dureeformation= $request->dureeformation;
    $typeformation->datedebut= $request->datedebut;
    $typeformation->datefin= $request->datefin;
   

    $typeformation->save();
    return redirect('typeformations');

   
}

public function destroy(typeformation $typeformation)
{
    # code...

    $typeformation= typeformation::find($typeformation->id);
  $typeformation->delete();
  return redirect('typeformations');
}


}