@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Inscrits</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header"> Listes des Inscrits </h1> 
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('inscrits/create')}}" type="button" class="btn btn-sm btn-info">Nouveau inscrit</a>

</div>
					  <div class="col-md-12">

                      
<table class="table" border="0">
<thead>
<tr>
<td>ID</td>
<td>NOM</td>
<td>PRENOM</td>
<td>FONCTION</td>
<td>GENRE</td>
<td>EMAIL</td>
<td>TELEPHONE</td>
<td>ACTION</td>

</tr>
</thead>


<tbody>
@foreach($inscrits as $inscrit)
<tr>
<td style="">{{$inscrit->id}}</td>
<td>{{$inscrit->nom_inscrit}}</td>
<td>{{$inscrit->prenom_inscrit}}</td>
<td>{{$inscrit->fonction}}</td>
<td>{{$inscrit->genre}}</td>
<td>{{$inscrit->email}}</td>
<td>{{$inscrit->tel}}</td>

<td style="width:3%"><a href="inscrits/edit/{{$inscrit->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td >
<form action="inscrits/destroy/{{$inscrit->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cet inscrit ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>

</form>
</td>
</tr>

@endforeach
</tbody>
</table>
      
@endsection()