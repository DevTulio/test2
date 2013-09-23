@extends('admin.template.default')


@section('content')

		<div class="row-fluid">
				
				<form>					
					<div class="control-group"
					
						<input name="search Route" type="text">
						
					</div>

					

				</form>

			
						@if(!Session::has('editRoute'))
						@if(Session::has('message'))
							<div class="alert alert-success">
							 	<button class="close" data-dismiss="alert">&times;</button>
							 	<strong>Successfully</strong> Update Route
							</div>
						@endif
						<table class="table table-bordered">
						<thead>
								<th>Bus ID</th>
								<th>Departure Date</th>
								<th>Departure Time</th>
								<th>Going To</th>	
								<th>Leaving From</th>	
								<th>Amount</th>	
								<th>Action</th>
								

						</thead>
						<tbody>
								@foreach($data as $routes)
								<tr>
										<td>{{$routes->busid}}</td>
										<td>{{$routes->departure_date}}</td>
										<td>{{$routes->departure_time}}</td>
										<td>{{$routes->going_to}}</td>
										<td>{{$routes->leaving_from}}</td>
										<td>{{$routes->amount}}</td>
										<td>
										<form action="{{URL::to('admin/editRoute')}}" method="post">
											
				<button class="btn btn-primary" value="{{$routes->route_id}}" name="EditRoute">EDIT ROUTE</button>

										</form>

										</td>

								</tr>
								@endforeach
						</tbody>

						</table>
				
						@endif

						@if(Session::has('editRoute'))
						{{--*/$data=Session::get('data')/*--}}
								<form class="form-inline" method="post" action="{{URL::to('admin/updateRoute')}}">
								<input type="hidden" name="routeid" value="{{$data->route_id}}">
									<div class="span5">
											<div class="control-label">
									<label><b>Departure Date</b></label>
								</div>
									<div class="control-group">
										<input type="date" name="departure_date" value="{{$data->departure_date}}">	
									</div>

									<div class="control-label">
									<label><b>Departure Time</b></label>
								</div>
									<div class="control-group">
										<input type="time" name="departure_time" value="{{$data->departure_time}}">	
									</div>

									<div class="control-label">
									<label><b>Leaving from</b></label>
								</div>
									<div class="control-group">
										<input type="text" name="leaving_from" value="{{$data->leaving_from}}">	
									</div>
									<div class="control-label">
									<label><b>Going to</b></label>
								</div>
									<div class="control-group">
										<input type="text" name="going_to"  value="{{$data->going_to}}">	
									</div>
									<div class="control-label">
									<label><b>Amount</b></label>
								</div>
									<div class="control-group">
										<input type="text" name="amount"  value="{{$data->amount}}">	
									</div>
								
									<div class="control-group">
										<button class="btn btn-primary">UPDATE</button>
									</div>
								</form>
						@endif

		</div>



@stop