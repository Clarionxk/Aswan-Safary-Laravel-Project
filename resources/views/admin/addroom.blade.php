!DOCTYPE html>
<html lang="en">
  <head>
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
          {{dd($hotel_id)}}
          <div class="div_center">
            <h1 class="font_size">Add Room</h1>
            <form action="{{url('/add_room')}}" method="post" enctype="multipart/form-data" >
                @csrf


            <input type="text" name="hotel_id" value="{{$hotel_id}}" hidden>


        <div class="div_design">
        <lable>Room Type</lable>
        <select class="text_color" id="select3" name="room_type" required="">
                <option value="1">single</option>
                  <option value="2">double</option>
                   <option value="3">trible</option>
                  </select>
        </div>
        <div class="div_design">
            <lable>Roomcount</lable>
            <input class="text_color" type="text" name="roomcount" placeholder="Write a number" required="">
        </div>


        <div class="div_design">
            <lable>Price</lable>
            <input class="text_color" type="text" name="price" placeholder="Write a Price" required="">
        </div>


        <div class="div_design">
            <lable>Room Image</lable>
            <input type="file" name="img" required="" >
        </div>

        <div class="div_design">

            <input type="submit" value="Add Room" class="btn btn-primary">
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
