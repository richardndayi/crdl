<?php

Namespace App\Http\Controllers;
use App\Cour;

 use Illuminate\Http\Request;
class CoursController extends Controller{

public function index()
{
    # code... 
    $cours = Cour::all();
    return view('cours/index',['cours'=>$cours]);

}

public function create()
{
    # code...
    return view('cours/create');
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'nom_cours' =>'required',
        'jours_etud' =>'required',
        'heure_debut_fin' =>'required',
    ]);
    $cour= new Cour();
    $cour->nom_cours= $request->nom_cours;
    $cour->jours_etud= $request->jours_etud;
    $cour->heure_debut_fin= $request->heure_debut_fin;

    $cour->save();
    return redirect('cours');

}

//dependency injection
public function edit(Cour $cour)
{
    # code...

    $cour= Cour::find($cour->id);
    return view('cours/edit', [
        'cour'=>$cour
    ]);
}

public function update(Request $request, Cour $cour)
{
    # code...
    $cour->nom_cours= $request->nom_cours;
    $cour->jours_etud= $request->jours_etud;
    $cour->heure_debut_fin= $request->heure_debut_fin;
    $cour->save();

    return redirect('cours');
    
}

public function destroy(Cour $cour)
{
    # code...

    $cour= Cour::find($cour->id);
  $cour->delete();
  return redirect('cours');
}


}