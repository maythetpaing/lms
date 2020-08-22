@extends('backendtemplate')
@section('content')


<div class="container-fluid">
	<h2 class="d-inline-block">Book List</h2>
	<a href="{{route('books.create')}}" class="btn btn-success float-right">+ Add Book</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Codeno</th>
				<th>Name</th>
				<th>No Of Copies</th>
				<th>Edition</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($books as $book)
			<tr>
				<td>{{$i++}}</td>
				<td>
					{{$book->codeno}}
					<a href="{{route('books.show',$book->id)}}">
						<span class="badge badge-primary badge-pill">Detail</span>
					</a>

					<a href="#" class="box" 
					data-name="{{$book->name}}" data-photo="{{asset($book->photo)}}"
					 
					data-edition="{{$book->edition}}"
					
					 data-desc="{{$book->description}}"
					  >
						<span class="badge badge-primary badge-pill">Modal</span>
					</a>
				</td>
				<td>{{$book->name}}</td>
				<td>{{$book->noc}}</td>
				<td>{{$book->edition}}</td>
				<td>
					<a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">
					<i class="far fa-edit"></i>
					Edit</a>
					<form method="post" action="{{route('books.destroy',$book->id)}}" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger delete" onclick="sweetAlert()">
						
					</form>
					
				</td>
			</tr>
			@endforeach()
		</tbody>
	</table>
</div>
{{-- detail modal --}}
<div class="modal fade" tabindex="-1" id="mymodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<img src="" class="img-fluid" id="photo">
					</div>
					<div class="col-md-8">		
						Name:<strong id="name"></strong><br>
						Edition:<strong id="edition"></strong><br>
						Description:<strong id="desc"></strong>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.box').click(function(){
			// alert('box!');
			var name=$(this).data('name');
			var photo=$(this).data('photo');
			var edition=$(this).data('edition');
			var desc=$(this).data('desc');
			$('.modal-title').text(name);
			$('#name').text(name);
			$('#photo').attr('src',photo);
			$('#edition').text(edition);
			$('#desc').text(desc);
			$('#mymodal').modal('show');

		});
		//delete
		
	})
</script>
@endsection
{{-- import swal from 'sweetalert'; --}}
<script src="'https://unpkg.com/sweetalert/dist/sweetalert.min.js">
	function sweetAlert(){
		swal("What do you want to do",{
			dangerMode:true,
			buttons:true,
		})

		
	}
	</script>


