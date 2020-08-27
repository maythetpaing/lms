@extends('backendtemplate')
@section('content')
<div class="container-fluid text-center">
  <h2 class="d-inline-block">Return List</h2>
</div>

<div class="container table-responsive py-2">
  <div class="row">
    <div class="offset-md-2 col-md-8">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Member Name</th>
          <th>Book Name</th>
          <th>Issue Date</th>
          <th>Due Date</th>
          {{-- <th>Penalty Fee</th> --}}
          <th>Action</th>
        </tr>
        @php $i=1; @endphp
        @foreach($members as $member)           
        @foreach($member->books as $book)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$member->name}}</td>
          <td>{{$book->name}}</td>
          <td>{{$book->created_at}}</td>
          <td>{{$book->pivot->due_date}}</td>
         {{--  <td>
             <a href="#" class="box btn btn-warning" 
            data-name="{{$member->name}}" data-issuedate="{{$book->created_at}}"
            data-due_date="{{$book->pivot->due_date}}"
            >OutofDate</a>
          </td> --}}
          <td>
             <a href="#" class="box btn btn-info">Return</a>
          </td>
        </tr>  
        @endforeach
        @endforeach
      </table>
    </div>
  </div>
</div>
{{-- detail modal --}}
{{-- <div class="modal fade" tabindex="-1" id="mymodal">
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
            Fee:<strong id="fee"></strong><br>

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
 --}}
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function () {
    $('.box').click(function () {
        // alert('Hi');
        var name=$(this).data('name');

    })
  })
</script>
@endsection