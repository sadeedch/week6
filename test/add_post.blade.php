@extends('layouts.master')

@section('title')
  Add Item
@endsection

@section('content')
  <h1>Add Item</h1>
  <form method="post" action="{{url("add_item_action")}}">
     {{csrf_field()}}
    <p>
      <label> Summary </label>
      <input type = "text"  name ="title"> 
    </p>
    <p>
      <label> Details </label>
      <textarea type = "text" rows="5" cols="50" name ="details"></textarea>
    </p>
    <input type ="submit" value="Add">

    <h3>testsssssssss</h3>



  </form>
@endsection