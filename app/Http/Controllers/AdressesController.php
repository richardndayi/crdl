<?php

Namespace App\Http\Controllers;
use App\Adresse;
use App\Inscrit;



 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 
class AdressesController extends Controller{

public function index()
{
    # code... 
    $adresses = DB::table('adresses')
                 ->join('inscrits','adresses.id_apprenant','inscrits.id')
                 ->select('inscrits.*','adresses.*')
                 ->get();
    return view('adresses/index',
    ['adresses'=>$adresses]);

}

public function create()

{
        $inscrits = Inscrit::all();
    
      
          # code...
          return view('adresses/create',
         ['inscrits'=>$inscrits]);
   
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'id_apprenant' =>'required',

        'province' =>'required',
        'commune' =>'required',
        'zone' =>'required',
        'quartier' =>'required',
        'rue' =>'required',
        'maison' =>'required'
    ]);
    $adresse= new adresse();
    $adresse->id_apprenant= $request->id_apprenant;
    $adresse->province= $request->province;
    $adresse->commune= $request->commune;
    $adresse->zone= $request->zone;
    $adresse->quartier= $request->quartier;
    $adresse->rue= $request->rue;
    $adresse->maison= $request->maison;
    $adresse->save();
    return redirect('adresses');

}

//dependency injection
public function edit(Adresse $adresse)
{
    # code...
    $inscrits= Inscrit::all();

    $adresse= Adresse::find($adresse>id);
    return view('adresses/edit', [
        'adresses'=>$adresses,
        'inscrits'=>$inscrits
        

    ]);
}

public function update(Request $request, adresse $adresse)

{
    $request->validate([
        'id_apprenant' =>'required',

        'province' =>'required',
        'commune' =>'required',
        'zone' =>'required',
        'quartier' =>'required',
        'rue' =>'required',
        'maison' =>'required'
    ]);
    $adresse= new adresse();
    $adresse->id_apprenant= $request->id_apprenant;
    $adresse->province= $request->province;
    $adresse->commune= $request->commune;
    $adresse->zone= $request->zone;
    $adresse->quartier= $request->quartier;
    $adresse->rue= $request->rue;
    $adresse->maison= $request->maison;
      
      
      
      
     $adresse->save();
    return redirect('adresses');


}

public function destroy(adresse $adresse)
{
    # code...

    $adresse= adresse::find($adresse->id);
  $adresse->delete();
  return redirect('adresses');
}


}