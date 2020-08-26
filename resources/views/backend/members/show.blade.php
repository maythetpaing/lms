@extends('backendtemplate')
@section('content')
<div id="checkout_body" style="margin-top: 100px;">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3">Issue</h3>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								
								<th>Member </th>
								<th>Book</th>
								{{-- <th>Status</th> --}}
								{{-- <th>User</th> --}}
								<th>Issue Date</th>
								<th>Due Date</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($member->books as $member1)
							<tr>
								<td>{{$member->name}}</td>
								{{-- <td>{{$member1->name}}</td>
								<td>{{$member1->price}}</td>
								<td>{{$member1->pivot->fee}}</td> --}}
								{{-- <td>{{$member1->pivot->create_at}}</td> --}}
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection