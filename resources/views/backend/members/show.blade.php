@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Issue Detail(Your UI)</h2>
    
        
        <div class="col-md-8 mt-5 offset-lg-3">
           
            
            
           
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Member Name</td>
                        <td>Book Name</td>
                        <td>Issue Date</td>
                        <td>Due date</td>
                        <td>Status</td>
                        <td>Fee</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach($member->books as $member1)
                    <tr>
                       <td>{{$member1->name}}</td>
                        <td>{{$member1->books->name}}</td>
                       <td>{{$member1->pivot->issue_date}}</td>
                        <td>{{$member1->pivot->due_date}}</td>
                        <td></td>
                        <td></td>
                        {{-- <td>{{$order1->price*$order1->pivot->qty}}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
                {{-- <tfoot>
                    <tr>
                    <td colspan="3">Total amount</td>
                    <td>{{$order->total}}</td>
                </tr>
                </tfoot> --}}
            </table>
            
            

            
        </div>
        
    
</div>
@endsection