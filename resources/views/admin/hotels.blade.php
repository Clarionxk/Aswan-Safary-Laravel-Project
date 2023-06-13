<!DOCTYPE html>
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

          <div class="div_center">
            <h1 class="font_size">Add Hotel</h1>
            
            <form action="{{url('/add_hotels')}}" method="post" enctype="multipart/form-data" >
                @csrf
            <div class="div_design">   
            <lable>Hotel Name</lable>
            <input class="text_color" type="text" name="title" placeholder="Write a name" required="">
        </div>

        <div class="div_design">   
            <lable>Hotel Address</lable>
            <input class="text_color" type="text" name="address" placeholder="Write a description" required="">
        </div>

    

        <div class="div_design">   
            <lable>Hotel Description</lable>
            <input class="text_color" type="text" name="description" placeholder="Duration in Hours" required="">
        </div>


        <div class="div_design">   
            <lable>Details URL</lable>
            <input class="text_color" type="text" name="url" placeholder="Put a URL" required="">
        </div>

        <div class="div_design">   
            <lable>Available Rooms</lable>
            <input class="text_color" type="number" name="rooms" placeholder="rooms available" required="">
        </div>

        <div class="div_design">   
            <lable>Hotel Image</lable>
            <input type="file" name="image" required="" >
        </div>

        <div class="div_design">   
        
            <input type="submit" value="Add Hotel" class="btn btn-primary">
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