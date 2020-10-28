@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Cours</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter un Cours</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form method="POST" action="{{url('cours')}}">
						@csrf

					<table>
					<tr>
					<td>
					<div class="form-group">
						<label>Nom</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_cours" class="form-control"  placeholder="Saisir le nom" 
						class="form-control" class="@error('nom_cours') is-danger @enderror">
						@error('nom_cours')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					
					</div>
					<div class="form-group">
						<label> jours_etud</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="jours_etud" class="form-control"  placeholder="Saisir le jours_etude" 
						class="form-control" class="@error('jours_etud') is-danger @enderror">
						@error('jours_etud')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div> 
					<div class="form-group">
						<label> heure_etude</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="heure_debut_fin" class="form-control"  placeholder="Saisir le heure_etude" 
						class="form-control" class="@error('heure_debut_fin') is-danger @enderror">
						@error('heure_debut_fin')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div> 
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
