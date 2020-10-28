@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Certificats</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editer le certificat</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<form role="form-" action="/certificats/{{$certificat->id}}" method="POST">
						@csrf
                        @method('PUT')
						<div class="form-group">
						<label>Nom Inscrit</label> 
						<select name="id_part" id="" class="form-control"
						class="@error('id_inscrit') is-danger @enderror"> 
						<option value="" >Select Nom Inscrit</option>
						@foreach($participations as $participation)
                        <option value="{{$participation->id}}">{{$participation->id_inscrit}}</option>
						@endforeach
						@error('id_part')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					
					<div class="form-group">
					<label>nom certificat</label> 
									
					<input type="text" name="nom_certificat" class="form-control" placeholder="" value="{{$certificat->nom_certificat}}">
									
					</div>

					<label > date sortie</label> 
									
					<input type="date" name="date_sortie" class="form-control" placeholder="" value="{{$certificat->date_sortie}}">
									
					</div>

								<div class="form-group">
									<div class="col-md-5 widget-right">
									 <button type="submit" class="btn btn-sm btn-info">Enregistrer</button> 
							
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection
