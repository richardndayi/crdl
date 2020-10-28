<?php

Namespace App\Http\Controllers;
use App\Certificat;
use App\Participation;


 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 
class CertificatsController extends Controller{

public function index()
{
    # code... 
    $certificats = DB::table('certificats')
                 ->join('participations','certificats.id_part','participations.id')
                
                 ->select('participations.*','certificats.*')
                 ->get();
    return view('certificats/index',
    ['certificats'=>$certificats]);

}

public function create()

{
 
  $participations = Participation::all();

    # code...
    return view('certificats/create',
   ['participations'=>$participations]);
   
}

public function store(Request $request)
{
    # code...
    //validation

    $request->validate([
        'id_part' =>'required',
        'nom_certificat' =>'required',
        'date_sortie' =>'required',
       
    ]);
    $certificat= new Certificat();
    $certificat->id_part= $request->id_part;
    $certificat->nom_certificat= $request->nom_certificat;
    $certificat->date_sortie= $request->date_sortie;
   

    $certificat->save();
    return redirect('certificats');

}

//dependency injection
public function edit(Certificat $certificats)
{
    # code...
    $participations= Participation::all();
   
    $certificat= Certificat::find($certificat->id);
    return view('certificats/edit', [
        'certificats'=>$certificats,
        'participations'=>$participations,
        
    ]);
}

public function update(Request $request, certificat $certificat)

{
    $request->validate([
        'id_part' =>'required',
        'nom_certificat' =>'required',
        'date_sortie' =>'required',
       
    ]);
    $certificat= new Certificat();
    $certificat->id_part= $request->id_part;
    $certificat->nom_certificat= $request->nom_certificat;
    $certificat->date_sortie= $request->date_sortie;
   

    $certificat->save();
    return redirect('certificats');

   
}

public function destroy(certificat $certificat)
{
    # code...

    $certificat= certificat::find($certificat->id);
  $certificat->delete();
  return redirect('certificats');
}


}