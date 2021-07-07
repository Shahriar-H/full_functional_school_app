@extends('master')
@section('dynamiccontent')
    <style>
        .sublitilemenu{
            display: flex;
            justify-content: space-around;
        }
        .sublitilemenu li a{
            color: black;
            font-size: 13px;
            font-weight: 100;
        }
        .sublitilemenu li{
            width: 20%;
            margin: 2px;
            text-align: center;
            border: 0.5px solid rgba(128, 128, 128, 0.212);
            border-top: none;
        }
        .sublitilemenu .activemenu{
            background-color: rgb(248, 248, 248);
            border-bottom: none;
        }
        .videois{
            overflow-y: scroll;
            height: 50rem;
            text-align: center;
        }
        .vides video{
            max-width: 535px;
            margin: 8px;
        }
    @media only screen and (min-width:200px) and (max-width:992px){
        .vides video {
            max-width: 309px;
            margin: 4px;
        }
        .videois{
            overflow-y: scroll;
        }
    }
      
    </style>

    <div class="sublitilemenu">
        <li><a href="/">Notice</a></li>
        <li><a href="/teacher">Teachers</a></li>
        <li><a href="/student">Students</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li class="activemenu"><a href="/video">Video</a></li>
    </div>

    <div class="videois">
        @foreach ($getvideo as $item)
            
        <div class="vides" >
            <video controls type='video/mp4' muted src="{{$item->vfile}}">
                Your browser does not support the video tag.
            </video>
        </div>
    @endforeach
        
    </div>
    
    
@endsection