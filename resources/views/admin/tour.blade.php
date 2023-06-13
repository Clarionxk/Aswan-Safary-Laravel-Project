<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('admin.css')

<style> .div_center{ text-align:center; padding-top:40px;}

.h2_font{ font-size:40px; padding-bottom:40px;}
.input_color{color:black;}
.center{margin:auto; width:50%; text-align:center; margin-top:30px; border:  3px solid white;}
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

<div class="div_center">
<h2 class="h2_font"> Add Tour</h2>

<form action="{{url('/add_tour')}}" method="POST">
@csrf
<input type="text" class="input_color" name="tour" placeholder="write Tour name">
<input type="submit" class="btn btn-primary" name="submit" value="Add Tour">

</form>


</div>


<table class="center">

<tr>
<td><strong>Tour Name</strong></td>
<td>Action</td>
</tr>
@foreach($data as $data)
<tr>
    <td>{{$data->tour_name}}</td>
    <td><a onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger" href="{{url('delete_tour' ,$data->id)}}">Delete</a></td>
</tr>
@endforeach

</table>



        </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
  @include('admin.script')