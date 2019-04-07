@extends('admin.layout.auth')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Brand</div>

				<div class="card-body">

					<table class="table table-borderless table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Brand Name</th>
								<th scope="col">Process</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($brands as $brand)
							<tr>
								<td>{{ $brand->id }}</td>
								<td><a href="{{ url('brand/{brand}') }}" title="">{{ $brand->name }}</a></td>
								<td>
									<form method="POST" action="{{ url('brand/'.$brand->id) }}" onSubmit="if(!confirm('Are You Sure To Delete')){return false;}">
										 @csrf
										 <input type="hidden" name="_method" value="DELETE">
										<a href="{{ url('brand/'.$brand->id.'/edit') }}" title="">
											<button type="button" class="btn btn-warning">Edit</button>
										</a>
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
									
								</td>
								
							</tr>
							@endforeach							
						</tbody>
					</table>
					<div class="row my-auto mx-auto">
						<a href="{{ url('brand/create') }}" title="">
							<button type="button" class="btn btn-success">New</button>
						</a>
					</div>
					<div class="row offset-md-5 offset-lg-5 offset-sm-5">						
						{{ $brands->links() }}							
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
