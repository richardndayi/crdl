@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Salles</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editer le nom du salle</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/salles/{{$salle->id}}" method="POST">
						@csrf
                        @method('PUT')

						<div class="form-group">
					<label>Nom salles</label> 
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_salle" class="form-control" placeholder="" value="{{$salle->nom_salle}}">
					</div>

					<label>capacites</label> 
					<input type="text"style="width:300px; height:33px ;background:black; color:white" name="nb_place" class="form-control" placeholder="" value="{{$salle->nb_place}}">
					</div>

					<div class="form-group">
				     <div class="form-group">
					<div class="col-md-5 widget-right">
					<!-- <button type="submit" class="btn btn-sm btn-default">Save</button> -->
					<button type="submit" class="btn btn-sm btn-info">enregistrer</button>
					</div>
					</div>

					</form>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection
