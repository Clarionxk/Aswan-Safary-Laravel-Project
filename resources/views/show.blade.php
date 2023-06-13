@extends('templatee')
@section('main')
<a href="/addbooking"><h2>Add Data</h2></a>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">check_in</th>
      <th scope="col">check_out</th>
      <th scope="col">room_type</th>
      <th scope="col">select_room</th>
      </tr>


  </thead>
  <tbody>
@foreach ($data as $order)
 <tr>
      <th scope="row">{{$order['id']}}</th>
      <td>{{$order['name']}}</td>
      <td>{{$order['check_in']}}</td>
      <td>{{$order['check_out']}}</td>
      <td>{{$order['room_type']}}</td>
      <td>{{$order['select_room']}}</td>
      <td><a href="{{route('deletedata',['id'=>$order['id']])}}">Delete</a></td>
        <td><a href="{{rout('editdata',['id'=>$order['id']])}}">edit</a></td>
        @endforeach
    </tbody>
</table>








@endsection
