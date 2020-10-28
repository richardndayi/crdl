<?php

Namespace App\Http\Controllers;
use App\Salle;

 use Illuminate\Http\Request;
class SallesController extends Controller{

public function index()
{
    # code... 
    $salles = Salle::all();
    return view('salles/index',['salles'=>$salles]);

}

public function create()
{
    # code...
    return view('salles/create');
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'nom_salle' =>'required',
        'nb_place' =>'required',
    ]);
    $salle= new Salle();
    $salle->nom_salle= $request->nom_salle;
    $salle->nb_place= $request->nb_place;

    $salle->save();
    return redirect('salles');

}

//dependency injection
public function edit(Salle $salle)
{
    # code...

    $salle= Salle::find($salle->id);
    return view('salles/edit', [
        'salle'=>$salle
    ]);
}

public function update(Request $request, salle $salle)
{
    # code...
    $salle->nom_salle= $request->nom_salle;
    $salle->nb_place= $request->nb_place;
    $salle->save();
    return redirect('salles');
}

public function destroy(salle $salle)
{
    # code...

    $salle= salle::find($salle->id);
  $salle->delete();
  return redirect('salles');
}


}