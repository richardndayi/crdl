@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Participations</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Participations</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('participations/create')}}" type="button" class="btn btn-sm btn-info">New</a>

</div>
					  <div class="col-md-12">

                      
<table class="table">
<thead>
<tr>
<td>ID</td>
<td>id_inscrit</td>
<td>formation_id</td>
<td>etat_part</td>
<td>prix_part</td>

<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($participations as $participation)
<tr>
<td>{{$participation->id}}</td>
<td>{{$participation->nom_inscrit}} &nbsp {{$participation->prenom_inscrit}} </td>
<td>{{$participation->nomformation}}</td>

<td>{{$participation->etat_part}}</td>

<td>{{$participation->prix_part}}</td>


<td><a href="participations/edit/{{$participation->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td>
<form action="participations/destroy/{{$participation->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cet participant ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>

</form>
</td> 
</tr>
@endforeach 
</tbody>
</table>
@endsection     