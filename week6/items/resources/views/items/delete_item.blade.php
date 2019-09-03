@extends('layouts.master')

@section('title')
  Update Item
@endsection

@section('content')

<form method="post" action= "{{url("delete_item_action")}}">
{{csrf_field()}}
<h3> Item has been deleted</h3> <br>

<a href = "{{url("/")}}">Click here to go to Home Page</a>

</form>


@endsection