@extends('backendtemplate')
@section('content')
<div class="container-fluid text-center">
	<h2 class="d-inline-block">Issue List(Table)</h2>
	<a href="{{route('issues.create')}}" class="btn btn-success float-right">+ Add Issue</a>
</div>
	
	<div class="container table-responsive py-2">
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <table class="table table-bordered">
                <tr>
                  <th>Member Name</th>
                  <th>Book Name</th>
                  <th>Issue Date</th>
                  <th>Due Date</th>
                  {{-- <th>Available/Not available</th> --}}
                  {{-- <td>Fee</td> --}}
                </tr>
                @foreach($members as $member)           
                  @foreach($member->books as $book)
                  <tr>
                  <td>{{$member->name}}</td>
                  <td>{{$book->name}}</td>
                  <td>{{$book->created_at}}</td>
                    <td>{{$book->pivot->due_date}}</td>
                    {{-- <td>{{$book->pivot->status}}</td> --}}
                    {{-- <td>{{$book->pivot->fee}}</td> --}}
                  </tr>  
                  @endforeach
                @endforeach
                <td>
                  
                </td>
              </table>
            </div>
          </div>
        </div>
	
@endsection