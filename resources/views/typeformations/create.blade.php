@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Typeformations</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">s
				<h1 class="page-header">Ajouter les types de formations</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form  action="{{url('typeformations')}}" method="POST">
						@csrf
                        <table>
                        <tr>
                        <td>
						<div class="form-group">
                                <label for="nom_cours"> cours   </label>
                                <select name="cour_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
                                class ="@error('nom_cours') is-danger @enderror">
                                <option value="">Select cours</option>
                                @foreach($cours as $cour)
                                <option value="{{$cour->id}}">{{$cour->nom_cours}}</option>
                                @endforeach
                                @error('cour->id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nom_salle">salles</label>
                                <select name="salle_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
                                class ="@error('nom_salle') is-danger @enderror"> 
                                <option value="">Select salles</option>
                                @foreach($salles as $salle)
                                <option value="{{$salle->id}}">{{$salle->nom_salle}}</option>
                                @endforeach
                                @error('salle_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>

							<div class="form-group">
                                <label for="nom_form">formateurs</label>
                                <select name="formateur_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
                                class ="@error('nom_form') is-danger @enderror"> 
                                <option value="">Select formateurs</option>
                                @foreach($formateurs as $formateur)
                                <option value="{{$formateur->id}}">{{$formateur->nom_form}}</option>
                                @endforeach
                                @error('formateur_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>

                            </td>
                            <td style="width:20%" >  </td>
							
                            <td>
                            <div class="form-group">
                            <labe for=""> Nom formation</label>
                            <input type="text" style="width:300px; height:35px ;background:black; color:white" name="nomformation" id="" class="form-control"
                            class="@error('nomformation') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('nomformation')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                           
                            <div class="form-group">
                            <labe for=""> duree formation</label>
                            <input type="float" style="width:300px; height:35px ;background:black; color:white" name="dureeformation" id="" class="form-control"
                            class="@error('dureeformation') is-danger @enderror" placeholder="" >
                            @error('dureeformation')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
							<div class="form-group">
                            <labe for=""> date debut</label>
                            <input type="date" style="width:300px; height:35px ;background:black; color:white" name="datedebut" id="" class="form-control"
                            class="@error('datedebut') is-danger @enderror" placeholder="" >
                            @error('datedebut')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
							<div class="form-group">
                            <labe for=""> date fin</label>
                            <input type="date" style="width:300px; height:35px ;background:black; color:white" name="datefin" id="" class="form-control"
                            class="@error('datefin') is-danger @enderror" placeholder="" >
                            @error('datefin')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                             </td>
                             </tr>
                             </table>
                           

								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <a href="" button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-success">enregistrer</button>
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection()
