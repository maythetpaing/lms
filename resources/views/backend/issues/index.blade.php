@extends('backendtemplate')
@section('content')


<div class="container-fluid">
	<h2 class="d-inline-block">Issue Book List(Table)</h2>
	<a href="{{route('issues.create')}}" class="btn btn-success float-right">Add Issue Book</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Member</th>
				<th>Book</th>
				<th>Issue Date</th>
				<th>Due Date</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($issues as $issue)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$issue->member->name}}</td>
				<td>{{$issue->book->name}}</td>
				<td>{{$issue->created_at}}</td>
				{{-- <td>{{$issue->note}}</td> --}}
				
				<td>
					{{-- <a href="{{route('issues.show',$issue->id)}}" class="btn btn-warning">Detail</a> --}}
					<a href="#" class="btn btn-warning">Issue</a>
					
					
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
						Price:<strong id="price"></strong><br>
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
			var price=$(this).data('price');
			var desc=$(this).data('desc');
			$('.modal-title').text(name);
			$('#name').text(name);
			$('#photo').attr('src',photo);
			$('#price').text(price);
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


