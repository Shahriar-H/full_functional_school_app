<?php 
    $getstu = DB::table('writtings')->orderBy('id','DESC')->where('category','Student')->paginate(3);
?>

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
        .teacherwriteris{
            padding: 15px;
        }
        .paragraphere p{
            color: rgb(95, 94, 94);
        }
        .pagi a{
            color: rgb(0, 174, 255);
        }
        .ttile h4{
            font-size: 15px;
        }
      
    </style>

    <div class="sublitilemenu">
        <li><a href="/">Notice</a></li>
        <li ><a href="/teacher">Teachers</a></li>
        <li class="activemenu"><a href="/student">Students</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/video">Video</a></li>
    </div>
<?php 
    foreach ($getstu as $key) {
    
?>
    <div class="teacherwriteris">
        <div class="ttile">
            <h4 class="mb-0">{{$key->title}} </h4>
            <span>{{$key->wname}} | {{$key->created_at}}</span>
        </div>
        <div class="paragraphere mt-3">
            <p>
                {{substr($key->postbody,0,100)}}
            </p>
            <a class="bg-dark p-2" href="/seepost/{{$key->id}}">Read full</a>
        </div>
        <br>
    </div>
<?php } ?>
<span class="pagi">
    {{$getstu->links()}}
</span>
    
@endsection