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
				<h1 class="page-header">Editer le participation</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/participations/{{$participation->id}}" method="POST">
						@csrf
                        @method('PUT')
						<table>
						<tr>
						<td>
						<div class="form-group">
						<label>Nom Inscrit</label> 
						<select name="id_inscrit" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
						class="@error('nom_inscrit') is-danger @enderror"> 
						<option value="" >Select Nom Inscrit</option>
						@foreach($inscrits as $inscrit)
                        <option value="{{$inscrit->id}}">{{$inscrit->nom_inscrit}}</option>
						@endforeach
						@error('inscrit_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					<div class="form-group">
						<label>Typeformation</label> 
						<select name="formation_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
						class="@error('nomformation') is-danger @enderror"> 
						<option value="" >Select Typeformation</option>
						@foreach($typeformations as $typeformation)
                        <option value="{{$typeformation->id}}">{{$typeformation->nomformation}}</option>
						@endforeach
						@error('formation_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					</td>
					<td style="width:20%"> </td>
					<td>
					<div class="form-group">
					<label>Etat participationt</label> 
									
					<input type="text" style="width:300px; height:35px ;background:black; color:white" name="etat_part" class="form-control" placeholder="" value="{{$participation->etat_part}}">
									
					</div>

					<label > prix participation</label> 
									
					<input type="text" style="width:300px; height:35px ;background:black; color:white" name="prix_part" class="form-control" placeholder="" value="{{$participation->prix_part}}">
									
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
