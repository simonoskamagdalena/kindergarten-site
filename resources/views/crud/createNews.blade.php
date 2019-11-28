@extends('app')

@section('title')
    <title> Primekidz | Add post </title>
@endsection

@section('content')

<div style="text-align:center" class="addmarginlogo">
    <div class="logo"><img src="images/logo.png" alt="" style="height:80px; width:auto"></div>
</div>
<form method="post" action="{{route('createPost')}}" enctype="multipart/form-data" class="create-news addmargin" > 
    @csrf
    <label for="title"  style="color:#ee7b00"  required >Title:</label>
    <input type="text" placeholder="" name="title" class="form-control">
    <br>
    <label for="content"  style="color:#ee7b00"  required >Content:</label> <br>
    <textarea class="form-control" id="content" name="content" rows='10' cols='100' > </textarea>

    <div >

        <label for="content" style="color:#ee7b00"  required >Image (optional):</label> <br>
        <div >
            <input  class="form-control" type="file" name="image" id="image" >
        </div >
        <label for="content" style="color:#ee7b00"  required >Category:</label> <br>            
        <select name="category"  class="form-control" >
            <option value="act">Activities</option>  
            <option value="ann">Announcements</option>
            <option value="eve">Events</option>
        </select>
    </div>

    <!-- <input type="submit" value="Create"> -->
    <button type="submit" value="Submit" class="post-button-news"> Create</button>

</form>
@endsection