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
      .galleryphoto{
          display: flex;
          flex-wrap: wrap;
      }
      .imagediv img{
          height: 200px;
          margin: 4px;
      }
      .imagediv a img{
          border: 1px dashed black;
      }
      .imagediv a img:hover{
        border: 2px solid black;
    }
    span a{
        color: rgb(4, 173, 173);
    }
    @media only screen and (min-width:200px) and (max-width:992px){
        .imagediv img{
          height: 150px;
          width: 200px;
      }
      .galleryphoto {
        justify-content: space-evenly;
    }
    }
    </style>

    <div class="sublitilemenu">
        <li><a href="/">Notice</a></li>
        <li><a href="/teacher">Teachers</a></li>
        <li><a href="/student">Students</a></li>
        <li class="activemenu"><a href="/gallery">Gallery</a></li>
        <li><a href="/video">Video</a></li>
    </div>
    
    <div class="galleryphoto">
        @foreach ($photo as $item)
            

        <div class="imagediv">
            <abbr title="{{$item->title}}"><img src="{{$item->gfile}}" alt=""></abbr>
        </div>

        @endforeach
    </div>
    <span class="mt-4">
        {{$photo->links()}}
    </span>
@endsection