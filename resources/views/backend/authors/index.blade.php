@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Author List(Table)</h2>
	<a href="{{route('authors.create')}}" class="btn btn-success float-right">+ Add Author</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($authors as $author)
			<tr>
				<td>{{$i++}}</td>
				
				<td>{{$author->name}}</td>
				
				<td>
				
					<a href="{{route('authors.edit',$author->id)}}" class="btn btn-warning">
					{{-- <i class="far fa-edit"></i> --}}
					Edit</a>
					<form method="post" action="{{route('authors.destroy',$author->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						
					</form>
					
				</td>
			</tr>
			@endforeach()
		</tbody>
	</table>
</div>


@endsection
