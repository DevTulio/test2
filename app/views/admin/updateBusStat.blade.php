@extends('admin.template.default')


@section('content')

	<div class="row-fluid">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>BUS ID</th>
					<th>BUS TYPE</th>
					<th>BUS PLATE NO</th>
					<th>BUS CAPACITY</th>
					<th>BUS STATUS</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($data as $bus)
						<tr>
							<td>{{$bus->busid}}</td>
							<td>{{$bus->bustype}}</td>
							<td>{{$bus->busplate_no}}</td>
							<td>{{$bus->capacity}}</td>
							<td>{{$bus->status}}</td>
							<td><button class="btn btn-primary">UPDATE</button></td>
						</tr>
					@endforeach
				</tr>
			</tbody>
		</table>
		{{$data->links()}}
	</div>

@stop