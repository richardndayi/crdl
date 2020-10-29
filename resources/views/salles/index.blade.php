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
				<h1 class="page-header">Listes des Salles</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('salles/create')}}" type="button" class="btn btn-sm btn-info">Nouveau sale</a>

</div>
					<!--  <div class="col-md-12">

					  <form method="POST" action="{{url('salles')}}">
						@csrf
					<div class="form-group">
					
					<table>
					<tr>
					<td>
					<div class="form-group">
						<label>Nom salle</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_salle" class="form-control"  placeholder="Saisir le nom" 
						class="form-control" class="@error('nom_salle') is-danger @enderror">
						@error('nom_salle')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					
					</div>
					<div class="form-group">
						<label> nb_place</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="nb_place" class="form-control"  placeholder="Saisir le nb_place" 
						class="form-control" class="@error('nb_place') is-danger @enderror">
						@error('nb_place')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div> 
					
					</div>
					</td>
					</tr>
					</table>




					</div>

								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <a href="" button type="submit" class="btn btn-sm btn-default">Save</button> ->
							<button type="submit" class="btn btn-sm btn-success">enregistrer</button>
									</div>
								</div>
					</form>  -->


                      
<table class="table"  style="" border="0">
<thead>
<tr>
<td>ID</td>
<td>Nom salle</td>
<td>Nbre de places</td>
<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($salles as $salle)
<tr>
	<td>{{$salle->id}}</td>
	<td>{{$salle->nom_salle}}</td> 
	<td>{{$salle->nb_place}}</td>

<td style="width:3%"><a href="salles/edit/{{$salle->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td>
<form action="salles/destroy/{{$salle->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cette salle ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>
</form>
</td>
</tr>

@endforeach

      
@endsection