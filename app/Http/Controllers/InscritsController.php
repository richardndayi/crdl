<?php

Namespace App\Http\Controllers;
use App\Inscrit;

 use Illuminate\Http\Request;
class InscritsController extends Controller{

public function index()
{
    # code... 
    $inscrits = Inscrit::all();
    return view('inscrits/index',['inscrits'=>$inscrits]);

}

public function create()
{
    # code...
    return view('inscrits/create');
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'nom_inscrit' =>'required',
        'prenom_inscrit' =>'required',
        'fonction' =>'required',
        'genre' =>'required',
        'email' =>'required',
        'tel' =>'required',
    ]);
    $inscrit= new Inscrit();
    $inscrit->nom_inscrit= $request->nom_inscrit;
    $inscrit->prenom_inscrit= $request->prenom_inscrit;
    $inscrit->fonction= $request->fonction;
    $inscrit->genre= $request->genre;
    $inscrit->email= $request->email;
    $inscrit->tel= $request->tel;
    $inscrit->save();
    return redirect('inscrits');

}

//dependency injection
public function edit(Inscrit $inscrit)
{
    # code...

    $apprenant= Inscrit::find($inscrit->id);
    return view('inscrits/edit', [
        'inscrit'=>$inscrit
    ]);
}

public function update(Request $request, inscrit $inscrit)
{
    # code...
    $inscrit->nom_inscrit= $request->nom_inscrit;
    $inscrit->prenom_inscrit= $request->prenom_inscrit;
    $inscrit->fonction= $request->fonction;
    $inscrit->genre= $request->genre;
    $inscrit->email= $request->email;
    $inscrit->tel= $request->tel;
    $inscrit->save();
    return redirect('inscrits');
}

public function destroy(inscrit $inscrit)
{
    # code...

    $inscrit= inscrit::find($inscrit->id);
  $inscrit->delete();
  return redirect('inscrits');
}


}