
@extends('layouts.master')

@section('title')
  Results
@endsection


@section('content')
<h2>Australian Prime Ministers</h2>
<h3>Results for {{$name}} {{$year}} {{$state}}</h3>


<table class="bordered">
    <tbody>
    <thead>
        <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
    </thead>
    @foreach($pms as $pm) 
        <tr><td>{{$pm['index']}}</td>
            <td>{{$pm['name']}}</td>
            <td>{{$pm['from']}}</td>
            <td>{{$pm['to']}}</td>
            <td>{{$pm['duration']}}</td>
            <td>{{$pm['party']}}</td>
            <td>{{$pm['state']}}</td></tr>
    
 
     @endforeach
    </tbody>
</table>

@endsection
