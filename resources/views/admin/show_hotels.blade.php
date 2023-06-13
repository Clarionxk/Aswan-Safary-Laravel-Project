<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('admin.css')

<style>

.center{margin:auto; width:50%; border:2px solid white; text-align:center; margin-top:40px;}
.font_size{text-align:center; font-size:40px; padding-top:20px;}
.img_size{width:150px; height:150px;}
.th_color{background: skyblue;}
.th_deg{padding:30px;}


</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->

        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">


          @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
            {{session()->get('message')}}
            </div>

          @endif


          <h2 class="font_size"> All Hotels</h2>

          <table class="center">

        <tr class="th_color">

        <th class="th_deg">Hotel Name</th>

        <th class="th_deg">Address</th>
        <th class="th_deg">Description</th>

        <th class="th_deg">Image</th>
        <th class="th_deg">Delete</th>
        <th class="th_deg">Edit</th>
        <th class="th_deg">Add Room</th>
        <th class="th_deg">Add Service</th>
        </tr>

@foreach($hotel as $hotel)

 <tr>
<th>{{$hotel->name}}</th>

<th>{{$hotel->address}}</th>
<th>{{$hotel->description}}</th>

<th>
    <img class="img_size" src="/img/{{$hotel->image}}"/>
</th>

<td> <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="{{url('delete_hotels',$hotel->id)}}">Delete</a>    </td>
<td> <a class="btn btn-success" href="{{url('update_hotels',$hotel->id)}}">Edit</a>    </td>
<td> <a class="btn btn-success" href="{{url('view_rooms',$hotel['id'])}}">AddRoom</a>    </td>
<td> <a class="btn btn-success" href="{{url('view_service',$hotel)}}">AddService</a>    </td>

</tr>

@endforeach

          </table>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
  @include('admin.script')
