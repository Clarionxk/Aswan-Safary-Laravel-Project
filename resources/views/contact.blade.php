<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            .hed{font-size:70px;}
            .des{font-size:20px;}
            .nam{font-size:16px;}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="home/css/style.css">
            @include('home.header')

</head>
<body>
    <div class="container">
<div class="row">
<div class="col-md-6 offset-md-3 mt-5"></div>
<h1 class="hed">Contact Us</h1><hr>
<h3 class="des"> If you Have any Queries or Questions Make sure To Contact Us</h3><br>

<form action="{{ route('send.email') }}" method="POST">
    @csrf
<div class="form-group">
<br><label class="nam" for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
   @error('name')<span class="text-danger">{{$message}}</span>@enderror 
</div>
    <div class="form-group">
<label class="nam" for="">Email</label>
<input type="text" class="form-control" name="email" placeholder="enter your email" value="{{old('email')}}">
@error('email')<span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
<label class="nam" for="">Subject</label>
<input type="text" class="form-control" name="subject" placeholder="enter the subject" value="{{old('subject')}}">
@error('subject')<span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
<label class="nam" for="">Message</label>
<textarea name="message" class="form-control" cols="4" rows="4">{{old('message')}}</textarea>
@error('message')<span class="text-danger">{{$message}}</span> @enderror
 </div>


</div>


<button class="btn btn-primary" >Send</button><br>

</form>

</div>


</div>



    </div>
   <br> @include('home.footer')
</body>
</html>