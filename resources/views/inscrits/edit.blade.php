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
				<h1 class="page-header"> changer l' apprenants   </h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/inscrits/{{$inscrit->id}}" method="POST">
						@csrf
                        @method('PUT')
						<table>
						<tr>
						<td>
					<div class="form-group">
					<label>Nom</label> 
									
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_inscrit" class="form-control" placeholder="" value="{{$inscrit->nom_inscrit}}">
									
					</div>
					<div class="form-group">
					<label >Prenom</label> 
									
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="prenom_inscrit" class="form-control" placeholder="" value="{{$inscrit->prenom_inscrit}}">
									
					</div>

					<div class="form-group">
					<label >Fonction</label> 				
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="fonction" class="form-control" placeholder="" value="{{$inscrit->fonction}}">				
					</div>
                  
				  </td>
				  <td style="width:15%"> </td>

                 <td>
					<div class="form-group">
					<label >Genre</label> 				
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="genre" class="form-control" placeholder="" value="{{$inscrit->genre}}">				
					</div>
					<div class="form-group">
					<label >Email</label> 
									
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="email" class="form-control" placeholder="" value="{{$inscrit->email}}">
									
					</div>
					<div class="form-group">
					<label >Numero tel</label> 
									
					<input type="number" style="width:300px; height:33px ;background:black; color:white" name="tel" class="form-control" placeholder="" value="{{$inscrit->tel}}">
									
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
