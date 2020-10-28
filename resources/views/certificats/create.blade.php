@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">certificats</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter le certificats</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form  action="{{url('certificats')}}" method="POST">
						@csrf
                        <table>
                        <tr>
                        <td>
						<div class="form-group">
                                <label for="id_inscrit"> nom participation  </label>
                                <select name="id_part" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
                                class ="@error('id_part') is-danger @enderror">
                                <option value="">Select Participations</option>
                                @foreach($participations as $participation)
                                <option value="{{$participation->id}}">{{$participation->id_inscrit}}</option>
                                @endforeach
                                @error('participation->id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                           
                          
                            <div class="form-group">
                            <labe for="">nom certificats</label>
                            <input type="text" style="width:300px; height:35px ;background:black; color:white" name="nom_certificat" id="" class="form-control"
                            class="@error('nom_certificat') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('nom_certificat')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                           
                            <div class="form-group">
                            <labe for="">Date sortie</label>
                            <input type="date" style="width:300px; height:35px ;background:black; color:white" name="date_sortie" id="" class="form-control"
                            class="@error('date_sortie') is-danger @enderror" placeholder="" >
                            @error('date_sortie')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
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
