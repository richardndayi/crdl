<?php

Namespace App\Http\Controllers;
use App\Participation;
use App\Inscrit;

use App\Typeformation;


 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 
class ParticipationsController extends Controller{

public function index()
{
    # code... 
    $participations = DB::table('participations')
                 ->join('inscrits','participations.id_inscrit','inscrits.id')
                
                 ->join('typeformations','participations.formation_id','typeformations.id')
                 ->select('inscrits.*','typeformations.*','participations.*')
                 ->get();
    return view('participations/index',
    ['participations'=>$participations]);

}

public function create()

{
 $inscrits = Inscrit::all();

  $typeformations = Typeformation::all();

    # code...
    return view('participations/create',
   ['inscrits'=>$inscrits,'typeformations'=>$typeformations]);
   
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'id_inscrit' =>'required',
        
        'formation_id' =>'required',
        'etat_part' =>'required',
        'prix_part' =>'required'
    ]);
    $participation= new Participation();
    $participation->id_inscrit= $request->id_inscrit;
   
    $participation->formation_id= $request->formation_id;
    $participation->etat_part= $request->etat_part;
    $participation->prix_part= $request->prix_part;

    $participation->save();
    return redirect('participations');

}

//dependency injection
public function edit(Participation $participation)
{
    # code...
    $inscrits= Inscrit::all();
   
    $typeformations= Typeformation::all(); 
    $participation= Participation::find($participation->id);
    return view('participations/edit', [
     'participation'=>$participation,
        'inscrits'=>$inscrits,
       
        'typeformations'=>$typeformations
       

    ]);
}

public function update(Request $request, participation $participation)

{
    $request->validate([
        'id_inscrit' =>'required',
        
        'formation_id' =>'required',
        'etat_part' =>'required',
        'prix_part' =>'required'
    ]);
    $participation= new Participation();
    $participation->id_inscrit= $request->id_inscrit;
   
    $participation->formation_id= $request->formation_id;
    $participation->etat_part= $request->etat_part;
    $participation->prix_part= $request->prix_part;


    $participation->save();
    return redirect('participations');

   
}

public function destroy(participation $participation)
{
    # code...

    $participation= participation::find($participation->id);
  $participation->delete();
  return redirect('participations');
}


}