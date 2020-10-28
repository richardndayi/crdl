<?php

Namespace App\Http\Controllers;
use App\Apprenant;

 use Illuminate\Http\Request;
class ApprenantsController extends Controller{

public function index()
{
    # code... 
    $apprenants = Apprenant::all();
    return view('apprenants/index',['apprenants'=>$apprenants]);

}

public function create()
{
    # code...
    return view('apprenants/create');
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'nom' =>'required',
        'prenom' =>'required'
    ]);
    $apprenant= new Apprenant();
    $apprenant->nom= $request->nom;
    $apprenant->prenom= $request->prenom;

    $apprenant->save();
    return redirect('apprenants');

}

//dependency injection
public function edit(Apprenant $apprenant)
{
    # code...

    $apprenant= Apprenant::find($apprenant->id);
    return view('apprenants/edit', [
        'apprenant'=>$apprenant
    ]);
}

public function update(Request $request, apprenant $apprenant)
{
    # code...
    $apprenant->nom= $request->nom;
    $apprenant->prenom= $request->prenom;
    $apprenant->save();
    return redirect('apprenants');
}

public function destroy(apprenant $apprenant)
{
    # code...

    $apprenant= apprenant::find($apprenant->id);
  $apprenant->delete();
  return redirect('apprenants');
}


}