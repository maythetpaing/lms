@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Issue List(Table)</h2>
	<a href="{{route('issues.create')}}" class="btn btn-success float-right">+ Add Issue</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Member Name</th>
				<th>Book Name</th>
				<th>Issue Date</th>
				<th>Due Date</th>
				<th>Actions</th>
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
				<td>{{$issue->due_date}}</td>
				
				<td>
				
					{{-- <a href="#" class="btn btn-warning detail" data-name="{{$issue->name}}">
					Detail</a> --}}
					<form method="post" action="{{route('issues.destroy',$issue->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						
					</form>
					
				</td>
			</tr>
			@endforeach
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
					<div class="col-md-12">		
						Name:<strong id="name"></strong><br>

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
	$(document).ready(function () {
		$('.detail').click(function(){
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
