@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Adresses</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">adresse</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/adresses/{{$adresse->id}}" method="POST">
						@csrf
                        @method('PUT')
						<div class="form-group">
						<label>Nom inscrit</label> 
						<select name="id_apprenant" id="" class="form-control"
						class="@error('nom_inscrit') is-danger @enderror"> 
						<option value="" >Select Nom inscrit</option>
						@foreach($inscrits as $inscrit)
                        <option value="{{$inscrit->id}}">{{$inscrit->nom_inscrit}}</option>
						@endforeach
						@error('id_apprenant')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
				
					
					<div class="form-group">
					<label> Province</label> 
									
					<input type="text" name="province" class="form-control" placeholder="" value="{{$adresse->province}}">
									
					</div>

					<label >commune</label> 
									
					<input type="text" name="commune" class="form-control" placeholder="" value="{{$adresse->commune}}">
									
				     </div>
					 <label >Zone</label> 
									
					<input type="texte" name="zone" class="form-control" placeholder="" value="{{$adresse->zone}}">
									
					</div>
					<div class="form-group">
					<label >quartier</label> 
									
					<input type="text" name="quartier" class="form-control" placeholder="" value="{{$adresse->quartier}}">
									
					</div>
					<div class="form-group">
					<label >RUE</label> 
									
					<input type="text" name="rue" class="form-control" placeholder="" value="{{$adresse->zone}}">
									
					</div>
					<div class="form-group">
					<label >Numero_maison</label> 
									
					<input type="text" name="maison" class="form-control" placeholder="" value="{{$adresse->maison}}">
									
					</div>

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
