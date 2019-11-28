<head>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{asset('plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body class="background-login">
    <style>
        @media only screen and (max-width: 768px){
            .background-login {
                background:white; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                overflow-x:hidden;}
            
            .center-of-page-create-news{
                
                background: white;
            
                position: relative;
                top: 0;
                left: 0;
                margin-top: 0;
                margin-left: 0;
                background-color:white;
                border: none;

                padding:30px 0 30px 30px;	
	}
            }
        @media only screen and (min-width: 780px){
            .background-login {
                background: url("{{asset('images/kindergarten.jpg')}}") no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                overflow-x:hidden;}}
    </style>
    <div class="center-of-page-create-news" >

       <div style="text-align:center" class="addmarginlogo">
            <div class="logo"><img src="{{asset('images/logo.png')}}" alt="" style="height:80px; width:auto"></div>
        </div>

        <form method="post" action="{{ route('store-update',$post) }}" enctype="multipart/form-data" class="create-news">
            {{ csrf_field() }}
            <label for="title" style="color:#ee7b00" required >Title:</label>
            <input class="form-control"  id="title" name="title" type="text" value="{{$post->title}}" maxlength="55">
            <br>
            <label for="content" style="color:#ee7b00" required >Content:</label> <br>
            <textarea id="content" name="content" class="form-control" rows='20' cols='100' > {{$post->content}}</textarea>
            <br>
            <label for="content" style="color:#ee7b00" required >Category:</label> <br>
            <select name="category" >
                @if($post->category == 'act')
                <option value="act" selected>Activities</option> 
                <option value="ann" >Announcements</option>
                <option value="eve" >Events </option> 
                @elseif($post->category == 'ann')
                <option value="act" >Ativities</option>  
                <option value="ann" selected>Announcements</option>
                <option value="eve" >Events </option>
                @else
                <option value="act" >Activities</option> 
                <option value="ann" >Announcements</option>
                <option value="eve" selected>Events </option>
                @endif

            </select>
            <br>
            <label for="content" style="color:#ee7b00" required >Image (optional):</label> <br>
            @if($post->image)
                <label> * Current picture </label> <br>
                <div class="current-pic">
                    <img src="{{ route('image',['filename' => $post->image]) }}" class='update-pic'> <br>
                </div>
                <br>
            @endif
                <label style="color:#ee7b00"> * New picture (optional) </label> <br>
                <div >
                    <input class="form-control" type="file" name="image" id="image" class="custom-file-input">
                </div>
                
           
            <!-- <button type="submit" value="Submit" class="post-button-news1"> Save</button> -->

                <div class="pull-right text-right ">
                    <button type="submit" value="Submit" class="post-button-news"> Save</button>
                </div>
                <div>
                    <button class="delete-post">
                        <a href="{{route('delete',$post)}}" class="read-more" >Delete</a>
                    </button>
                <div> 

        </form>

    </div>

</body>