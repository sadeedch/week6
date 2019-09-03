 @extends('layouts.master')

@section('title')
  Item List
@endsection

@section('content')
<h1> Items </h1>
  <ul>
  @if ($items)
    @foreach ($items as $item)
      <li><a href = "{{url("item_detail/$item->id")}}" > {{$item->summary}}</a> </li>   
    @endforeach
  </ul>
  @else
    No item Found
  @endif
  <a href = "{{url("add_item")}}" > Add Item</a> </li>   
@endsection




{{-- url() function above is being used for absolute address --}}