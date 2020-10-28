@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Typeformation</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">typeformation</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/typeformations/{{$typeformation->id}}" method="POST">
						@csrf
                        @method('PUT')
						
						<table>
						<tr>
						<td>
						<div class="form-group">
						<label>Nom Cours</label> 
						<select name="cour_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
						class="@error('nom_cours') is-danger @enderror"> 
						<option value="" >Select Nom Cour</option>
						@foreach($cours as $cour)
                        <option value="{{$cour->id}}">{{$cour->nom_cours}}</option>
						@endforeach
						@error('cour_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					<div class="form-group">
						<label>Salle</label> 
						<select name="salle_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
						class="@error('nom_salle') is-danger @enderror"> 
						<option value="" >Select Salle</option>
						@foreach($salles as $salle)
                        <option value="{{$salle->id}}">{{$salle->nom_salle}}</option>
						@endforeach
						@error('salle_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					<div class="form-group">
						<label>formateur</label> 
						<select name="formateur_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
						class="@error('nom_form') is-danger @enderror"> 
						<option value="" >Select formateur</option>
						@foreach($formateurs as $formateur)
                        <option value="{{$formateur->id}}">{{$formateur->nom_form}}</option>
						@endforeach
						@error('formateur_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>

					<div class="form-group">
					<label>nom formation</label> 
									
					<input type="text"style="width:300px; height:35px ;background:black; color:white" name="nomformation" class="form-control" placeholder="" value="{{$typeformation->nomformation}}">
									
					</div>
                   
				   </td>
				   <td style="width:20%"> </td>
				   <td>
					<div class="form-group">
					<label>Duree formation</label> 
									
					<input type="text" style="width:300px; height:35px ;background:black; color:white" name="dureeformation" class="form-control" placeholder="" value="{{$typeformation->dureeformation}}">
									
					</div>

					<label >datedebut</label> 
									
					<input type="date" style="width:300px; height:35px ;background:black; color:white" name="datedebut" class="form-control" placeholder="" value="{{$typeformation->datedebut}}">
									
				     </div>
					 <label >date fin</label> 
									
					<input type="date" style="width:300px; height:35px ;background:black; color:white" name="datefin" class="form-control" placeholder="" value="{{$typeformation->datefin}}">
									
					</div>
					<div class="form-group">
					<label >Prix</label> 
									
					<input type="number" style="width:300px; height:35px ;background:black; color:white" name="prix" class="form-control" placeholder="" value="{{$typeformation->prix}}">
									
					</div>
					</td>
					</tr>
					</table>

								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-success">enregistrer</button>
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection
