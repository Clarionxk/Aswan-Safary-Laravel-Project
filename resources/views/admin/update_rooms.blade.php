<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <!-- Required meta tags -->
@include('admin.css')
<style>
.div_center{ text-align: center; padding-top:40px;}
.font_size{font-size:40px; padding-bottom:40px;}
.text_color{color:black; padding-bottom:20px;}
lable{display: inline-block; width:200px;}
.div_design{padding-bottom:15px;}

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
            <h1 class="font_size">Add Tour</h1>
            
            <form action="{{url('/update_rooms_confirm',$room->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
            <div class="div_design">   
            <lable>Hotel ID</lable>
            <input class="text_color" type="number" name="hotelid" placeholder="HOTEL ID" required="" value="{{$room->hotel_id}}">
        </div>

        <div class="div_design">   
        <lable>Room Type</lable>
            <input class="text_color" type="text" name="type" placeholder="room type" required="" value="{{$room->type}}">
        </div>

    

        <div class="div_design">   
        <lable>Room Count</lable>
            <input class="text_color" type="number" name="count" placeholder="Room Count" required="" value="{{$room->roomcount}}">
        </div>

        <div class="div_design">   
        <lable>Room Price</lable>
            <input class="text_color" type="number" name="price" placeholder="rooms price" required="" value="{{$room->price}}">
        </div>

   


        <div class="div_design">   
            <lable>Current Room Image</lable>
            <img style="margin:auto;" height="100" width="100" src="/img/{{$room->image}}">
        </div>

        <div class="div_design">   
            <lable>Change Room Image</lable>
            <input type="file" name="image" >
        </div>

        <div class="div_design">   
        
            <input type="submit" value="Update Room" class="btn btn-primary">
        </div>

        </form>
          </div>

</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
  @include('admin.script')