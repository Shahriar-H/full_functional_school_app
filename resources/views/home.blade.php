<?php 
    $notice = DB::table('notices')->orderBy('id','DESC')->paginate(8);
    $page = $notice->links();
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
        .noticeshere{
            display: flex;
            border-top: 1px solid rgba(128, 128, 128, 0.185);
            margin-top: 10px;
        }
        .datesec .datebody{
            background-color: var(--bgcolor);
            height: 50px;
            width: 40px;
            text-align: center;
        }
        .manthname{
            background-color: white;
            width: 100%;
            height: 40%;
            text-align: center;
        }
        .datenum{
            font-size: 20px;
            font-weight: 600;
            color: white;
        }
        .noticebody{
            margin-left: 25px;
        }
        .noticebody h4 a{
            font-size: 15px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            color: rgb(1, 82, 107);
            line-height: 1.42857143;
        }
        .noticebody h4{
            font-size: 15px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            color: rgb(1, 82, 107);
            line-height: 1.42857143;
        }
        .pagi a{
            color: rgb(0, 195, 255) !important;
        }
    </style>

    <div class="sublitilemenu">
        <li class="activemenu"><a href="/">Notice</a></li>
        <li><a href="/teacher">Teachers</a></li>
        <li><a href="/student">Students</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/video">Video</a></li>
    </div>

    <?php 
        foreach ($notice as $key) {
        
    ?>
    <div class="noticeshere">
        <div class="datesec">
            <div class="datebody">
                <div class="manthname"><span>{{substr($key->nmonth,0,3)}}</span></div>
                <p class="datenum">{{$key->ndate}}</p>
            </div>
        </div>
        <div class="noticebody">
            <h4> <a target="_blank" href="{{$key->noticefile}}"> {{$key->title}}</a></h4>
        </div>
    </div>

    <?php } ?>
 
    <br>
    <span class="pagi">
       {{$page}}
    </span>

    
@endsection