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
				<h1 class="page-header">Ajouter les Participations</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form  action="{{url('participations')}}" method="POST">
						@csrf
                        <table>
                        <tr>
                        <td>
						<div class="form-group">
                                <label for="nom_inscrit"> inscrit   </label>
                                <select name="id_inscrit" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
                                class ="@error('id_inscrit') is-danger @enderror">
                                <option value="">Select Inscrits</option>
                                @foreach($inscrits as $inscrit)
                                <option value="{{$inscrit->id}}">{{$inscrit->nom_inscrit}}</option>
                                @endforeach
                                @error('inscrit->id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nomformation">Typeformations</label>
                                <select name="formation_id" style="width:300px; height:35px ;background:black; color:white" id="" class="form-control"
                                class ="@error('nomformation') is-danger @enderror"> 
                                <option value="">Select typeformation</option>
                                @foreach($typeformations as $typeformation)
                                <option value="{{$typeformation->id}}">{{$typeformation->nomformation}}</option>
                                @endforeach
                                @error('formation_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            </td>
                            <td style="width:20%" >  </td>
							
                            <td>
                            <div class="form-group">
                            <labe for=""> Etat participation</label>
                            <input type="text" style="width:300px; height:35px ;background:black; color:white" name="etat_part" id="" class="form-control"
                            class="@error('etat_part') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('etat_part')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                           
                            <div class="form-group">
                            <labe for=""> Prix participation</label>
                            <input type="float" style="width:300px; height:35px ;background:black; color:white" name="prix_part" id="" class="form-control"
                            class="@error('prix_part') is-danger @enderror" placeholder="" >
                            @error('prix_part')
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
