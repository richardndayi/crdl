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
				<h1 class="page-header"> Adresses</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('adresses/create')}}" type="button" class="btn btn-sm btn-info">New</a>

</div>
					  <div class="col-md-12">

                      
<table class="table">
<thead>
<tr>
<td>ID</td>
<td> id_apprenant</td>
<td>province</td> 
<td>commune</td>
<td>zone</td>
<td>quartier</td>
<td>rue</td>
<td>maison</td>

<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($adresses as $adresse)
<tr>
<td>{{$adresse->id}}</td>
<td>{{$adresse->id_apprenant}}</td>
<td>{{$adresse->province}}</td>
<td>{{$adresse->commune}}</td>
<td>{{$adresse->zone}}</td>
<td>{{$adresse->quartier}}</td>
<td>{{$adresse->rue}}</td>
<td>{{$adresse->maison}}</td>


<td><a href="adresses/edit/{{$adresse->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td>
<form action="adresses/destroy/{{$adresse->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cette adresse ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>

<!-- <button type="submit" value="" class="btn btn-sm btn-danger">Delete</button> ->

<td> <a href="adresses/edit/{{$adresse->id}}" type="button" class="btn btn-sm btn-info">Edit</a>
<form action="adresses/destroy/{{$adresse->id}}" method="POST">
@csrf
<button type="submit" value="" class="btn btn-sm btn-default">Delete</button> -->
</form>
</td>
</tr>

@endforeach
</tbody>
</table>
      
@endsection()