@extends('admin.layout.auth')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Sub Category</div>

				<div class="card-body">


					<table class="table table-borderless table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Item Name</th>
								<th scope="col">Category Name</th>
								<th scope="col">Sub Category Name</th>
								<th scope="col">Brand Name</th>
								<th scope="col">Price</th>
								<th scope="col">Description</th>
								<th scope="col">Process</th>
							</tr>
						</thead>
						<tbody>
							@foreach($items as $item)


							<tr>
								<td>{{ $item->id }}</td>
								<td><a href="{{ url('item/{item}') }}" title="">{{ $item->name }}</a></td>
								<td><a href="{{ url('item/{item}') }}" title="">{{ $item->category->name }}</a></td>
								<td><a href="{{ url('item/{item}') }}" title="">{{ $item->subcategory->name }}</a></td>
								<td><a href="{{ url('item/{item}') }}" title="">{{ $item->brand->name }}</a></td>
								<td><a href="{{ url('item/{item}') }}" title="">{{ $item->price }}</a></td>
								<td><a href="{{ url('item/{item}') }}" title="">{{ $item->description }}</a></td>
								<td>
									<form method="POST" action="{{ url('item/'.$item->id) }}" onSubmit="if(!confirm('Are You Sure To Delete')){return false;}">
										@csrf
										<input type="hidden" name="_method" value="DELETE">
										<a href="{{ url('item/'.$item->id.'/edit') }}" title="">
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
						<a href="{{ url('item/create') }}" title="">
							<button type="button" class="btn btn-success">New</button>
						</a>
					</div>
					<div class="row offset-md-5 offset-lg-5 offset-sm-5">						
						{{ $items->links() }}							
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
