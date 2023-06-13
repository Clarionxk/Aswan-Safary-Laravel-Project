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
            <h1 class="font_size">Update Hotels</h1>
            
            <form action="{{url('/update_hotels_confirm',$hotel->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
            <div class="div_design">   
            <lable>Hotel Name</lable>
            <input class="text_color" type="text" name="title" placeholder="Write a name" required="" value="{{$hotel->name}}">
        </div>

        <div class="div_design">   
            <lable>Hotel Address</lable>
            <input class="text_color" type="text" name="address" placeholder="address" required="" value="{{$hotel->address}}">
        </div>

        <div class="div_design">   
            <lable>Hotel Description</lable>
            <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{$hotel->description}}">
        </div>

    

        <div class="div_design">   
            <lable>Details URL</lable>
            <input class="text_color" type="text" name="url" placeholder="Put a URL" required="" value="{{$hotel->url}}">
        </div>

        <div class="div_design">   
            <lable>Available Rooms</lable>
            <input class="text_color" type="number" name="rooms" placeholder="number of rooms" required="" value="{{$hotel->available_rooms}}">
        </div>


        <div class="div_design">   
            <lable>Current Hotel Image</lable>
            <img style="margin:auto;" height="100" width="100" src="/img/{{$hotel->image}}">
        </div>

        <div class="div_design">   
            <lable>Change Hotel Image</lable>
            <input type="file" name="image" >
        </div>

        <div class="div_design">   
        
            <input type="submit" value="Update Hotel" class="btn btn-primary">
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