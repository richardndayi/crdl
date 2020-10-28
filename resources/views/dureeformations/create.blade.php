@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dureeformations</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter le Dureeformations</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form  action="{{url('dureeformations')}}" method="POST">
						@csrf
						<div class="form-group">
                                <label for="nom_cours">Cours</label>
                                <select name="cour_id" id="" class="form-control"
                                class ="@error('nom_cours') is-danger @enderror">
                                <option value="">Select Cours</option>
                                @foreach($cours as $cour)
                                <option value="{{$cour->id}}">{{$cour->nom_cours}}</option>
                                @endforeach
                                @error('cour->id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nom_salle">Salles</label>
                                <select name="salle_id" id="" class="form-control"
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
                                <select name="formateur_id" id="" class="form-control"
                                class ="@error('nom_form') is-danger @enderror">
                                <option value="">Select formateur</option>
                                @foreach($formateurs as $formateur)
                                <option value="{{$formateur->id}}">{{$formateur->nom_form}}</option>
                                @endforeach
                                @error('formateur_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <labe for=""> Duree formation</label>
                            <input type="text" name="dureeformation" id="" class="form-control"
                            class="@error('dureeformation') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('dureeformation')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="form-group">
                            <labe for=""> Date debut</label>
                            <input type="date" name="datedebut" id="" class="form-control"
                            class="@error('datedebut') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('datedebut')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="form-group">
                            <labe for=""> Date fin</label>
                            <input type="date" name="datefin" id="" class="form-control"
                            class="@error('datefin') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('datefin')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                            <div class="form-group">
                            <labe for=""> Prix</label>
                            <input type="number" name="prix" id="" class="form-control"
                            class="@error('prix') is-danger @enderror" placeholder="" >
                            @error('prix')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                            
                           

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
