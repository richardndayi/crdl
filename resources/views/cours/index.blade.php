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
				<h1 class="page-header"> <red> Les differents Cours </red>  </h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('cours/create')}}" type="button" class="btn btn-sm btn-info">New</a>

</div>
					  <div class="col-md-12">

                      
<table class="table">
<thead>
<tr>
<td>ID</td>
<td>Nom du cours</td>
<td> jours</td>
<td> heure_etude</td>
<td>action</td>

</tr>
</thead>


<tbody>
@foreach($cours as $cour)
<tr>
<td>{{$cour->id}}</td>
<td>{{$cour->nom_cours}}</td>
<td>{{$cour->jours_etud}}</td>
<td>{{$cour->heure_debut_fin}}</td>

			
<td style="width:1%"><a href="cours/edit/{{$cour->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td>
<form action="cours/destroy/{{$cour->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cet cours ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>
</form>
</td>
</tr>

@endforeach
</tbody>
</table>
      
@endsection()